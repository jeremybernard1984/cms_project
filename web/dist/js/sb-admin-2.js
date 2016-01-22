$(function() {

    $('#side-menu').metisMenu();
    $.pageLoader();


//Loads the correct sidebar on window load,
//collapses the sidebar on window resize.
// Sets the min-height of #page-wrapper to window size

    $(window).bind("load resize", function() {
        topOffset = 50;
        width = (this.window.innerWidth > 0) ? this.window.innerWidth : this.screen.width;
        if (width < 768) {
            $('div.navbar-collapse').addClass('collapse');
            topOffset = 100; // 2-row-menu
        } else {
            $('div.navbar-collapse').removeClass('collapse');
        }

        height = ((this.window.innerHeight > 0) ? this.window.innerHeight : this.screen.height) - 1;
        height = height - topOffset;
        if (height < 1) height = 1;
        if (height > topOffset) {
            $("#page-wrapper").css("min-height", (height) + "px");
        }
    });

    var url = window.location;
    var element = $('ul.nav a').filter(function() {
        return this.href == url || url.href.indexOf(this.href) == 0;
    }).addClass('active').parent().parent().addClass('in').parent();
    if (element.is('li')) {
        element.addClass('active');
    }

    // tooltip
    $('body').tooltip({
        selector: "[data-toggle=tooltip]",
        container: "body"
    })

    // datepicker
    $('.date_picker').datepicker({
        format: "dd/mm/yyyy"
    }).attr("readonly","readonly");


    // CKEDITOR


    $(document).on('change', '.btn-file :file', function() {
        var input = $(this),
            numFiles = input.get(0).files ? input.get(0).files.length : 1,
            label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
        input.trigger('fileselect', [numFiles, label]);
    });

    $(document).ready( function() {
        $('.btn-file :file').on('fileselect', function(event, numFiles, label) {

            var input = $(this).parents('.input-group').find(':text'),
                log = numFiles > 1 ? numFiles + ' files selected' : label;

            if( input.length ) {
                input.val(log);
            } else {
                if( log ) alert(log);
            }

        });


        $("a.fancybox").each(function(){
            var $a = $(this);
            var h = $a.data("height")
            var w = $a.data("width");
            $a.fancybox({
                'width' : w,
                'height': h
            });
        });

        $("table#dataTables").DataTable({
            responsive: true,
            ordering: false,
            pageLength: 5,
            lengthMenu: [5, 10, 25, 50, 100],
            pagingType: 'full',
            language: {
                paginate: {
                    first:    'Début',
                    previous: '‹‹',
                    next:     '››',
                    last:     'Fin'
                },
            zeroRecords:    "Aucune correspondance trouvée",
            decimal:        "",
            emptyTable:     "La catégorie est vide",
            info:           "Il y a _MAX_ enregistrement(s)",
            infoEmpty:      "",
            infoFiltered:   "",
            infoPostFix:    "",
            thousands:      ",",
            lengthMenu:     "Pages : _MENU_",
            loadingRecords: "Loading...",
            processing:     "Processing...",
            search:         "Trier :"
            }
        });

    });

    //#form_pays représente la liste déroulante des pays,
    // on lui indique de lancer une fonction au changement
    // de choix dans la liste déroulante grâce à ".change(...).
    $('#pointweb_adminbundle_menu_pathId').attr('disabled', false);
    $("#pointweb_adminbundle_menu_path").change(function() {
        $('#pointweb_adminbundle_menu_pathTitle').val('');
        var string = $(this).val();
        if ((string.match('_detail') || string.match('_of'))) {
            $('#pointweb_adminbundle_menu_pathId').attr('disabled', false);
            $.ajax({
                beforeSend: function()
                {
                    $("#pathId").hide();
                    $('#loading').html('<div class="control-label"><div class="progress progress-striped active"><div class="progress-bar" style="width: 100%"></div></div></div>').fadeIn(600);
                },
                complete: function()
                {
                    $('#loading').hide();
                    $("#pathId").fadeIn(600);
                },
                cache: "false",
                //On lui indique le type d'envoie des informations
                type: 'GET',
                //On lui indique le chemin de la fonction
                url: Routing.generate('admin_menu_rempli_pathid', {entitySelectOk: string}),
                //On lui donne la valeur du choix qu'on a fait,
                // et id est la variable qui va contenir notre valeur, nous la retrouvons dans notre controller
                //data: 'entitySelect=' + $(this).val(),
                //dataType: 'json',
                //Enfin nous lui disons de remplir notre formulaire avec le resultat
                success: function(response)
                {
                    //alert(response);
                    $('#pointweb_adminbundle_menu_pathId').find("option").remove();
                    $('#pointweb_adminbundle_menu_pathId').append('<option value="">Sélectionner</option>');
                    //TABLEAU A 2 DIMENSIONS POUR ORDONNEE
                    $.each(response, function(key, value){
                            //$('#pointweb_adminbundle_menu_pathId').append(new Option(id+': '+title, id));
                            $('#pointweb_adminbundle_menu_pathId').append('<option data-title="'+value[1].replace(/-/g, '')+'" value="'+value[0]+'"> '+value[1].replace(/-/g, '&nbsp;')+' (id:'+value[0]+')</option>');
                    });

                }
            })
        }else{
            $('#pointweb_adminbundle_menu_pathId').attr('disabled', true);
        }

        });

    $("#pointweb_adminbundle_menu_pathId").change(function() {
        $('#pointweb_adminbundle_menu_pathTitle').val($(this).find(':selected').attr('data-title'));
    });

    // remplacement des '---' par des espaces dans les selects
    $('option').html(function (i, text) {
        return text.replace(/-/g, '&nbsp;');
    });

    /**
     * Created by a.verilhac on 20/05/2015.
     */
        if ($(".menuParent")) {
            getSubMenu();
        }
        if ($(".catChilds")) {
            getSubCatProduct();
        }
        if ($('.files')) {
            prepareNewFileForm();
        }


});


    function isEmpty(el) {
        return !$.trim(el.html())
    }

    function getSubMenu() {
        $(".menuParent").each(function (index) {
            if (isEmpty($('#menuChilds-' + $(this).attr("data-id")))) {
                $.ajax({
                    type: "GET",
                    url: $(this).attr("data-url"),
                    success: function (data) {
                        $('#menuChilds-' + data.id).html(data.render);
                        getSubMenu();
                    }
                });
            }
        });
    }
    function getSubCatProduct() {
        $(".catChilds").each(function (index) {
            if (isEmpty($(this))) {
                var container = $(this);
                $.ajax({
                    type: "GET",
                    url: $(this).attr("data-url"),
                    success: function (data) {
                        container.html(data.render);
                        setSortable();
                        getSubCatProduct();
                    }
                });
            }
        });
    }

    function prepareNewFileForm(result) {
        var collectionHolder = $('ul.files');
        collectionHolder.find('li.formFile').each(function () {
            addFileFormDeleteLink($(this));
        });

        if (result) {
            $.each(result, function (key, value) {
                var id = addFileForm(collectionHolder, value);
                $(collectionHolder.children()[id]).find('[type=hidden]').val(value);
                var img = $(collectionHolder.children()[id]).find('.formFilePicture');
                img.attr('src', key);
            });
        }
    }

    function addFileForm(collectionHolder, $newLinkLi) {
        var id = collectionHolder.children().length;
        var prototype = collectionHolder.attr('data-prototype');
        var newForm = prototype.replace(/__name__/g, id);
        console.log(newForm);
        var $newFormLi = $('<li class="formFile col-sm-3"></li>').append(newForm);
        collectionHolder.append($newFormLi);
        addFileFormDeleteLink($newFormLi);
        return id;
    }

    function addFileFormDeleteLink($fileFormLi) {
        var $removeFormA = $('<a class="deleteFile btn btn-danger btn-block" href="#"><i class="fa fa-trash-o"></i> Supprimer</a>');
        if ($fileFormLi.find('.deleteFile').length < 1) {
            $fileFormLi.append($removeFormA);
        }
        /*
        $removeFormA.on('click', function (e) {
            e.preventDefault();
            $fileFormLi.remove();
        });
        */
        $removeFormA.on('click', function (e) {
            var string = $fileFormLi.attr("data-file");
            if (string){
                if (confirm('Voulez vous supprimer cette image ?')) {
                    $.ajax({
                        type: 'POST',
                        url: Routing.generate('point_web_admin_delete_file'),
                        data: {
                            action: 'deleteimage',
                            imagefile: string
                        },
                        success: function(data){
                            var response = $.parseJSON(data);
                            if(!response.success) {
                                alert(response.error);
                            } else {
                                //alert("success!");
                                e.preventDefault();
                                $fileFormLi.remove();
                            }
                        }
                    });
                }
            }else{
                e.preventDefault();
                $fileFormLi.remove();
            }

        });
    }


    function strip_tags (str, allowed_tags)
    {

        var key = '', allowed = false;
        var matches = [];    var allowed_array = [];
        var allowed_tag = '';
        var i = 0;
        var k = '';
        var html = '';
        var replacer = function (search, replace, str) {
            return str.split(search).join(replace);
        };

        if (allowed_tags) {
            allowed_array = allowed_tags.match(/([a-zA-Z0-9]+)/gi);
        }
        str += '';

        matches = str.match(/(<\/?[\S][^>]*>)/gi);
        for (key in matches) {
            if (isNaN(key)) {
                continue;
            }
            html = matches[key].toString();
            allowed = false;
            for (k in allowed_array) {            // Init
                allowed_tag = allowed_array[k];
                i = -1;

                if (i != 0) { i = html.toLowerCase().indexOf('<'+allowed_tag+'>');}
                if (i != 0) { i = html.toLowerCase().indexOf('<'+allowed_tag+' ');}
                if (i != 0) { i = html.toLowerCase().indexOf('</'+allowed_tag)   ;}

                if (i == 0) {                allowed = true;
                    break;
                }
            }
            if (!allowed) {
                str = replacer(html, "", str);
            }
        }
        return str;
    }

    $("table.sortable").rowSorter({
        handler: "td.sorter",
        onDrop: function (tbody, row, index, oldIndex) {
            $.each($(tbody).find("tr"), function (key, value) {
                $.ajax({
                    type: "GET",
                    url: $(value).attr("data-url") + '?value=' + key
                });
            });
        }
    });

    setSortable();

    function setSortable() {
        $("table.sortable").rowSorter({
            handler: "td.sorter",
            onDrop: function (tbody, row, index, oldIndex) {
                $.each($(tbody).find("tr"), function (key, value) {
                    $.ajax({
                        type: "GET",
                        url: $(value).attr("data-url") + '?value=' + key
                    });
                });
            }
        });

    }

$(function  () {
    // Sortable rows
    $('.sorted_table').sortable({
        containerSelector: 'table',
        itemPath: '> tbody',
        itemSelector: 'tr',
        placeholder: '<tr class="placeholder"/>'
    });


// Sortable column heads
    var oldIndex;
    $('.sorted_head tr').sortable({
        containerSelector: 'tr',
        itemSelector: 'th',
        placeholder: '<th class="placeholder"/>',
        vertical: false,
        onDragStart: function ($item, container, _super) {
            oldIndex = $item.index();
            $item.appendTo($item.parent());
            _super($item, container);
        },
        onDrop: function  ($item, container, _super) {
            var field,
                newIndex = $item.index();

            if(newIndex != oldIndex) {
                $item.closest('table').find('tbody tr').each(function (i, row) {
                    row = $(row);
                    if(newIndex < oldIndex) {
                        row.children().eq(newIndex).before(row.children()[oldIndex]);
                    } else if (newIndex > oldIndex) {
                        row.children().eq(newIndex).after(row.children()[oldIndex]);
                    }
                });
            }

            _super($item, container);
        }
    });
});


