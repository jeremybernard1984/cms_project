<?php

namespace PointWeb\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @Gedmo\Tree(type="nested")
 * @ORM\Table(name="menu")
 * use repository for handy tree functions
 * @ORM\Entity(repositoryClass="Gedmo\Tree\Entity\Repository\NestedTreeRepository")
 */
class Menu
{

    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue
     */
    private $id;

    /**
     * @ORM\Column(name="title", type="string", length=64)
     */
    private $title;

    /**
     * @ORM\Column(name="icon", type="string", length=64, nullable=true)
     */
    private $icon;

    /**
     * @Gedmo\TreeLeft
     * @ORM\Column(name="lft", type="integer")
     */
    private $lft;

    /**
     * @Gedmo\TreeLevel
     * @ORM\Column(name="lvl", type="integer")
     */
    private $lvl;

    /**
     * @Gedmo\TreeRight
     * @ORM\Column(name="rgt", type="integer")
     */
    private $rgt;

    /**
     * @Gedmo\TreeRoot
     * @ORM\Column(name="root", type="integer", nullable=true)
     */
    private $root;


    /**
     * @Gedmo\TreeParent
     * @ORM\ManyToOne(targetEntity="Menu", inversedBy="children")
     * @ORM\JoinColumn(name="parent_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $parent;

    /**
     * @ORM\OneToMany(targetEntity="Menu", mappedBy="parent")
     * @ORM\OrderBy({"lft" = "ASC"})
     */
    private $children;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;


    /**
     *
     * @ORM\ManyToMany(targetEntity="PointWeb\AdminBundle\Entity\File", cascade={"persist", "remove"})
     * @ORM\JoinTable(name="menu_file",
     *      joinColumns={@ORM\JoinColumn(name="menu_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="file_id", referencedColumnName="id", onDelete="CASCADE")}
     *      )
     * @ORM\OrderBy({"position" = "ASC"})
     */
    public $pictures;

    /**
     * @var boolean
     *
     * @ORM\Column(name="online", type="boolean")
     */
    private $online;

    /**
     * @var boolean
     *
     * @ORM\Column(name="main_menu", type="boolean")
     */
    private $mainMenu;

    /**
     * @ORM\Column(name="path", type="string", length=255, nullable=true)
     */
    private $path;

    /**
     * @ORM\Column(name="path_id", type="integer", nullable=true)
     */
    private $pathId;

    /**
     * @ORM\Column(name="path_title", type="string", length=255, nullable=true)
     */
    private $pathTitle;


    public function __construct()
    {
        $this->pictures = new ArrayCollection();
        $this->children = new ArrayCollection();
    }

    public function __toString()
    {
        return $this->title;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setIcon($icon)
    {
        $this->icon = $icon;
    }

    public function getIcon()
    {
        return $this->icon;
    }

    public function setPath($path)
    {
        $this->path = $path;
    }

    public function getPath()
    {
        return $this->path;
    }

    public function setPathId($pathId)
    {
        $this->pathId = $pathId;
    }

    public function getPathId()
    {
        return $this->pathId;
    }

    public function setPathTitle($pathTitle)
    {
        $this->pathTitle = $pathTitle;
    }

    public function getPathTitle()
    {
        return $this->pathTitle;
    }

    public function setParent(Menu $parent = null)
    {
        $this->parent = $parent;
    }

    public function getParent()
    {
        return $this->parent;
    }

    public function getParentId()
    {
        return $this->parent;
    }

    public function getChildren()
    {
        return $this->children;
    }

    public function getLvl()
    {
        return $this->lvl;
    }
    public function getRoot()
    {
        return $this->root;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Category
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }



    /**
     * Add Pictures
     *
     * @param File $picture
     * @return Menu
     */
    public function addPicture(File $picture)
    {
        $this->pictures[] = $picture;

        return $this;
    }

    public function removePicture(File $picture)
    {
        $this->pictures->removeElement($picture);
    }

    public function getPictures()
    {
        return $this->pictures;
    }

    public function setOnline($online)
    {
        $this->online = $online;

        return $this;
    }

    public function getOnline()
    {
        return $this->online;
    }

    public function setMainMenu($mainMenu)
    {
        $this->mainMenu = $mainMenu;

        return $this;
    }

    public function getMainMenu()
    {
        return $this->mainMenu;
    }

    public function addChildren(Menu $children)
    {
        $this->children[] = $children;
    }


    public function getIndentedTitle() {
        return str_repeat("--", $this->lvl).$this->title;
    }


    public function getLevel($id_search)
    {
        $compare=$id_search;
        $category = $this;
        if ($category->hasParent() == false) {
        }
        while ($category = $category->getParent()) {
            if ($category->getId() == $id_search) {
                $id_search = $this->getId();
            }
        }
        if ($id_search != $compare){
            return $id_search;
        }
    }


    /**
     * @return bool
     */
    public function hasParent()
    {
        return ($this->parent != null ? true : false);
    }

}