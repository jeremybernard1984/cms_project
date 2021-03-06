<?php

namespace Proxies\__CG__\PointWeb\AdminBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Menu extends \PointWeb\AdminBundle\Entity\Menu implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = ['pictures' => NULL];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {
        unset($this->pictures);

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }

    /**
     * 
     * @param string $name
     */
    public function __get($name)
    {
        if (array_key_exists($name, $this->__getLazyProperties())) {
            $this->__initializer__ && $this->__initializer__->__invoke($this, '__get', [$name]);

            return $this->$name;
        }

        trigger_error(sprintf('Undefined property: %s::$%s', __CLASS__, $name), E_USER_NOTICE);
    }

    /**
     * 
     * @param string $name
     * @param mixed  $value
     */
    public function __set($name, $value)
    {
        if (array_key_exists($name, $this->__getLazyProperties())) {
            $this->__initializer__ && $this->__initializer__->__invoke($this, '__set', [$name, $value]);

            $this->$name = $value;

            return;
        }

        $this->$name = $value;
    }

    /**
     * 
     * @param  string $name
     * @return boolean
     */
    public function __isset($name)
    {
        if (array_key_exists($name, $this->__getLazyProperties())) {
            $this->__initializer__ && $this->__initializer__->__invoke($this, '__isset', [$name]);

            return isset($this->$name);
        }

        return false;
    }

    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'PointWeb\\AdminBundle\\Entity\\Menu' . "\0" . 'id', '' . "\0" . 'PointWeb\\AdminBundle\\Entity\\Menu' . "\0" . 'title', '' . "\0" . 'PointWeb\\AdminBundle\\Entity\\Menu' . "\0" . 'icon', '' . "\0" . 'PointWeb\\AdminBundle\\Entity\\Menu' . "\0" . 'lft', '' . "\0" . 'PointWeb\\AdminBundle\\Entity\\Menu' . "\0" . 'lvl', '' . "\0" . 'PointWeb\\AdminBundle\\Entity\\Menu' . "\0" . 'rgt', '' . "\0" . 'PointWeb\\AdminBundle\\Entity\\Menu' . "\0" . 'root', '' . "\0" . 'PointWeb\\AdminBundle\\Entity\\Menu' . "\0" . 'parent', '' . "\0" . 'PointWeb\\AdminBundle\\Entity\\Menu' . "\0" . 'children', '' . "\0" . 'PointWeb\\AdminBundle\\Entity\\Menu' . "\0" . 'description', 'pictures', '' . "\0" . 'PointWeb\\AdminBundle\\Entity\\Menu' . "\0" . 'online', '' . "\0" . 'PointWeb\\AdminBundle\\Entity\\Menu' . "\0" . 'mainMenu', '' . "\0" . 'PointWeb\\AdminBundle\\Entity\\Menu' . "\0" . 'path', '' . "\0" . 'PointWeb\\AdminBundle\\Entity\\Menu' . "\0" . 'pathId', '' . "\0" . 'PointWeb\\AdminBundle\\Entity\\Menu' . "\0" . 'pathTitle'];
        }

        return ['__isInitialized__', '' . "\0" . 'PointWeb\\AdminBundle\\Entity\\Menu' . "\0" . 'id', '' . "\0" . 'PointWeb\\AdminBundle\\Entity\\Menu' . "\0" . 'title', '' . "\0" . 'PointWeb\\AdminBundle\\Entity\\Menu' . "\0" . 'icon', '' . "\0" . 'PointWeb\\AdminBundle\\Entity\\Menu' . "\0" . 'lft', '' . "\0" . 'PointWeb\\AdminBundle\\Entity\\Menu' . "\0" . 'lvl', '' . "\0" . 'PointWeb\\AdminBundle\\Entity\\Menu' . "\0" . 'rgt', '' . "\0" . 'PointWeb\\AdminBundle\\Entity\\Menu' . "\0" . 'root', '' . "\0" . 'PointWeb\\AdminBundle\\Entity\\Menu' . "\0" . 'parent', '' . "\0" . 'PointWeb\\AdminBundle\\Entity\\Menu' . "\0" . 'children', '' . "\0" . 'PointWeb\\AdminBundle\\Entity\\Menu' . "\0" . 'description', '' . "\0" . 'PointWeb\\AdminBundle\\Entity\\Menu' . "\0" . 'online', '' . "\0" . 'PointWeb\\AdminBundle\\Entity\\Menu' . "\0" . 'mainMenu', '' . "\0" . 'PointWeb\\AdminBundle\\Entity\\Menu' . "\0" . 'path', '' . "\0" . 'PointWeb\\AdminBundle\\Entity\\Menu' . "\0" . 'pathId', '' . "\0" . 'PointWeb\\AdminBundle\\Entity\\Menu' . "\0" . 'pathTitle'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Menu $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

            unset($this->pictures);
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
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
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
    public function setTitle($title)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitle', [$title]);

        return parent::setTitle($title);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitle', []);

        return parent::getTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setIcon($icon)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIcon', [$icon]);

        return parent::setIcon($icon);
    }

    /**
     * {@inheritDoc}
     */
    public function getIcon()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIcon', []);

        return parent::getIcon();
    }

    /**
     * {@inheritDoc}
     */
    public function setPath($path)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPath', [$path]);

        return parent::setPath($path);
    }

    /**
     * {@inheritDoc}
     */
    public function getPath()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPath', []);

        return parent::getPath();
    }

    /**
     * {@inheritDoc}
     */
    public function setPathId($pathId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPathId', [$pathId]);

        return parent::setPathId($pathId);
    }

    /**
     * {@inheritDoc}
     */
    public function getPathId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPathId', []);

        return parent::getPathId();
    }

    /**
     * {@inheritDoc}
     */
    public function setPathTitle($pathTitle)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPathTitle', [$pathTitle]);

        return parent::setPathTitle($pathTitle);
    }

    /**
     * {@inheritDoc}
     */
    public function getPathTitle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPathTitle', []);

        return parent::getPathTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setParent(\PointWeb\AdminBundle\Entity\Menu $parent = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setParent', [$parent]);

        return parent::setParent($parent);
    }

    /**
     * {@inheritDoc}
     */
    public function getParent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getParent', []);

        return parent::getParent();
    }

    /**
     * {@inheritDoc}
     */
    public function getParentId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getParentId', []);

        return parent::getParentId();
    }

    /**
     * {@inheritDoc}
     */
    public function getChildren()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChildren', []);

        return parent::getChildren();
    }

    /**
     * {@inheritDoc}
     */
    public function getLvl()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLvl', []);

        return parent::getLvl();
    }

    /**
     * {@inheritDoc}
     */
    public function getRoot()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoot', []);

        return parent::getRoot();
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function addPicture(\PointWeb\AdminBundle\Entity\File $picture)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPicture', [$picture]);

        return parent::addPicture($picture);
    }

    /**
     * {@inheritDoc}
     */
    public function removePicture(\PointWeb\AdminBundle\Entity\File $picture)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePicture', [$picture]);

        return parent::removePicture($picture);
    }

    /**
     * {@inheritDoc}
     */
    public function getPictures()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPictures', []);

        return parent::getPictures();
    }

    /**
     * {@inheritDoc}
     */
    public function setOnline($online)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOnline', [$online]);

        return parent::setOnline($online);
    }

    /**
     * {@inheritDoc}
     */
    public function getOnline()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOnline', []);

        return parent::getOnline();
    }

    /**
     * {@inheritDoc}
     */
    public function setMainMenu($mainMenu)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMainMenu', [$mainMenu]);

        return parent::setMainMenu($mainMenu);
    }

    /**
     * {@inheritDoc}
     */
    public function getMainMenu()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMainMenu', []);

        return parent::getMainMenu();
    }

    /**
     * {@inheritDoc}
     */
    public function addChildren(\PointWeb\AdminBundle\Entity\Menu $children)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addChildren', [$children]);

        return parent::addChildren($children);
    }

    /**
     * {@inheritDoc}
     */
    public function getIndentedTitle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIndentedTitle', []);

        return parent::getIndentedTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function getLevel($id_search)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLevel', [$id_search]);

        return parent::getLevel($id_search);
    }

    /**
     * {@inheritDoc}
     */
    public function hasParent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasParent', []);

        return parent::hasParent();
    }

}
