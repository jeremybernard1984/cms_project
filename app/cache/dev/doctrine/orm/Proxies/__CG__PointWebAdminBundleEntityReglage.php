<?php

namespace Proxies\__CG__\PointWeb\AdminBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Reglage extends \PointWeb\AdminBundle\Entity\Reglage implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'PointWeb\\AdminBundle\\Entity\\Reglage' . "\0" . 'id', '' . "\0" . 'PointWeb\\AdminBundle\\Entity\\Reglage' . "\0" . 'menuProduct', '' . "\0" . 'PointWeb\\AdminBundle\\Entity\\Reglage' . "\0" . 'menuNews', '' . "\0" . 'PointWeb\\AdminBundle\\Entity\\Reglage' . "\0" . 'menuPartner', '' . "\0" . 'PointWeb\\AdminBundle\\Entity\\Reglage' . "\0" . 'menuGuestBook', '' . "\0" . 'PointWeb\\AdminBundle\\Entity\\Reglage' . "\0" . 'menuFaq', '' . "\0" . 'PointWeb\\AdminBundle\\Entity\\Reglage' . "\0" . 'menuGallery', '' . "\0" . 'PointWeb\\AdminBundle\\Entity\\Reglage' . "\0" . 'menuFolder', '' . "\0" . 'PointWeb\\AdminBundle\\Entity\\Reglage' . "\0" . 'menuMap', '' . "\0" . 'PointWeb\\AdminBundle\\Entity\\Reglage' . "\0" . 'menuPage', '' . "\0" . 'PointWeb\\AdminBundle\\Entity\\Reglage' . "\0" . 'clientName', '' . "\0" . 'PointWeb\\AdminBundle\\Entity\\Reglage' . "\0" . 'logo', '' . "\0" . 'PointWeb\\AdminBundle\\Entity\\Reglage' . "\0" . 'keyword', '' . "\0" . 'PointWeb\\AdminBundle\\Entity\\Reglage' . "\0" . 'backgroundStyle', '' . "\0" . 'PointWeb\\AdminBundle\\Entity\\Reglage' . "\0" . 'googleplusLink', '' . "\0" . 'PointWeb\\AdminBundle\\Entity\\Reglage' . "\0" . 'facebookLink', '' . "\0" . 'PointWeb\\AdminBundle\\Entity\\Reglage' . "\0" . 'metadescription', '' . "\0" . 'PointWeb\\AdminBundle\\Entity\\Reglage' . "\0" . 'langue', '' . "\0" . 'PointWeb\\AdminBundle\\Entity\\Reglage' . "\0" . 'googleanalitics'];
        }

        return ['__isInitialized__', '' . "\0" . 'PointWeb\\AdminBundle\\Entity\\Reglage' . "\0" . 'id', '' . "\0" . 'PointWeb\\AdminBundle\\Entity\\Reglage' . "\0" . 'menuProduct', '' . "\0" . 'PointWeb\\AdminBundle\\Entity\\Reglage' . "\0" . 'menuNews', '' . "\0" . 'PointWeb\\AdminBundle\\Entity\\Reglage' . "\0" . 'menuPartner', '' . "\0" . 'PointWeb\\AdminBundle\\Entity\\Reglage' . "\0" . 'menuGuestBook', '' . "\0" . 'PointWeb\\AdminBundle\\Entity\\Reglage' . "\0" . 'menuFaq', '' . "\0" . 'PointWeb\\AdminBundle\\Entity\\Reglage' . "\0" . 'menuGallery', '' . "\0" . 'PointWeb\\AdminBundle\\Entity\\Reglage' . "\0" . 'menuFolder', '' . "\0" . 'PointWeb\\AdminBundle\\Entity\\Reglage' . "\0" . 'menuMap', '' . "\0" . 'PointWeb\\AdminBundle\\Entity\\Reglage' . "\0" . 'menuPage', '' . "\0" . 'PointWeb\\AdminBundle\\Entity\\Reglage' . "\0" . 'clientName', '' . "\0" . 'PointWeb\\AdminBundle\\Entity\\Reglage' . "\0" . 'logo', '' . "\0" . 'PointWeb\\AdminBundle\\Entity\\Reglage' . "\0" . 'keyword', '' . "\0" . 'PointWeb\\AdminBundle\\Entity\\Reglage' . "\0" . 'backgroundStyle', '' . "\0" . 'PointWeb\\AdminBundle\\Entity\\Reglage' . "\0" . 'googleplusLink', '' . "\0" . 'PointWeb\\AdminBundle\\Entity\\Reglage' . "\0" . 'facebookLink', '' . "\0" . 'PointWeb\\AdminBundle\\Entity\\Reglage' . "\0" . 'metadescription', '' . "\0" . 'PointWeb\\AdminBundle\\Entity\\Reglage' . "\0" . 'langue', '' . "\0" . 'PointWeb\\AdminBundle\\Entity\\Reglage' . "\0" . 'googleanalitics'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Reglage $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setMenuProduct($menuProduct)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMenuProduct', [$menuProduct]);

        return parent::setMenuProduct($menuProduct);
    }

    /**
     * {@inheritDoc}
     */
    public function getMenuProduct()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMenuProduct', []);

        return parent::getMenuProduct();
    }

    /**
     * {@inheritDoc}
     */
    public function setMenuNews($menuNews)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMenuNews', [$menuNews]);

        return parent::setMenuNews($menuNews);
    }

    /**
     * {@inheritDoc}
     */
    public function getMenuNews()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMenuNews', []);

        return parent::getMenuNews();
    }

    /**
     * {@inheritDoc}
     */
    public function setMenuPartner($menuPartner)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMenuPartner', [$menuPartner]);

        return parent::setMenuPartner($menuPartner);
    }

    /**
     * {@inheritDoc}
     */
    public function getMenuPartner()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMenuPartner', []);

        return parent::getMenuPartner();
    }

    /**
     * {@inheritDoc}
     */
    public function setMenuGuestBook($menuGuestBook)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMenuGuestBook', [$menuGuestBook]);

        return parent::setMenuGuestBook($menuGuestBook);
    }

    /**
     * {@inheritDoc}
     */
    public function getMenuGuestBook()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMenuGuestBook', []);

        return parent::getMenuGuestBook();
    }

    /**
     * {@inheritDoc}
     */
    public function setMenuFaq($menuFaq)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMenuFaq', [$menuFaq]);

        return parent::setMenuFaq($menuFaq);
    }

    /**
     * {@inheritDoc}
     */
    public function getMenuFaq()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMenuFaq', []);

        return parent::getMenuFaq();
    }

    /**
     * {@inheritDoc}
     */
    public function setMenuGallery($menuGallery)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMenuGallery', [$menuGallery]);

        return parent::setMenuGallery($menuGallery);
    }

    /**
     * {@inheritDoc}
     */
    public function getMenuGallery()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMenuGallery', []);

        return parent::getMenuGallery();
    }

    /**
     * {@inheritDoc}
     */
    public function setMenuFolder($menuFolder)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMenuFolder', [$menuFolder]);

        return parent::setMenuFolder($menuFolder);
    }

    /**
     * {@inheritDoc}
     */
    public function getMenuFolder()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMenuFolder', []);

        return parent::getMenuFolder();
    }

    /**
     * {@inheritDoc}
     */
    public function setMenuMap($menuMap)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMenuMap', [$menuMap]);

        return parent::setMenuMap($menuMap);
    }

    /**
     * {@inheritDoc}
     */
    public function getMenuMap()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMenuMap', []);

        return parent::getMenuMap();
    }

    /**
     * {@inheritDoc}
     */
    public function setMenuPage($menuPage)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMenuPage', [$menuPage]);

        return parent::setMenuPage($menuPage);
    }

    /**
     * {@inheritDoc}
     */
    public function getMenuPage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMenuPage', []);

        return parent::getMenuPage();
    }

    /**
     * {@inheritDoc}
     */
    public function setClientName($clientName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClientName', [$clientName]);

        return parent::setClientName($clientName);
    }

    /**
     * {@inheritDoc}
     */
    public function getClientName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClientName', []);

        return parent::getClientName();
    }

    /**
     * {@inheritDoc}
     */
    public function setBackgroundStyle($backgroundStyle)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBackgroundStyle', [$backgroundStyle]);

        return parent::setBackgroundStyle($backgroundStyle);
    }

    /**
     * {@inheritDoc}
     */
    public function getBackgroundStyle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBackgroundStyle', []);

        return parent::getBackgroundStyle();
    }

    /**
     * {@inheritDoc}
     */
    public function setLogo(\PointWeb\AdminBundle\Entity\Image $logo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLogo', [$logo]);

        return parent::setLogo($logo);
    }

    /**
     * {@inheritDoc}
     */
    public function getLogo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLogo', []);

        return parent::getLogo();
    }

    /**
     * {@inheritDoc}
     */
    public function setKeyword($keyword)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setKeyword', [$keyword]);

        return parent::setKeyword($keyword);
    }

    /**
     * {@inheritDoc}
     */
    public function getKeyword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getKeyword', []);

        return parent::getKeyword();
    }

    /**
     * {@inheritDoc}
     */
    public function setGoogleplusLink($googleplusLink)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGoogleplusLink', [$googleplusLink]);

        return parent::setGoogleplusLink($googleplusLink);
    }

    /**
     * {@inheritDoc}
     */
    public function getGoogleplusLink()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGoogleplusLink', []);

        return parent::getGoogleplusLink();
    }

    /**
     * {@inheritDoc}
     */
    public function setFacebookLink($facebookLink)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFacebookLink', [$facebookLink]);

        return parent::setFacebookLink($facebookLink);
    }

    /**
     * {@inheritDoc}
     */
    public function getFacebookLink()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFacebookLink', []);

        return parent::getFacebookLink();
    }

    /**
     * {@inheritDoc}
     */
    public function setMetadescription($metadescription)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMetadescription', [$metadescription]);

        return parent::setMetadescription($metadescription);
    }

    /**
     * {@inheritDoc}
     */
    public function getMetadescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMetadescription', []);

        return parent::getMetadescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setLangue($langue)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLangue', [$langue]);

        return parent::setLangue($langue);
    }

    /**
     * {@inheritDoc}
     */
    public function getLangue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLangue', []);

        return parent::getLangue();
    }

    /**
     * {@inheritDoc}
     */
    public function setGoogleanalitics($googleanalitics)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGoogleanalitics', [$googleanalitics]);

        return parent::setGoogleanalitics($googleanalitics);
    }

    /**
     * {@inheritDoc}
     */
    public function getGoogleanalitics()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGoogleanalitics', []);

        return parent::getGoogleanalitics();
    }

}
