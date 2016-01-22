<?php

namespace PointWeb\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reglage
 *
 * @ORM\Table(name="reglage")
 * @ORM\Entity
 */
class Reglage
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     * @ORM\Column(name="menu_products", type="boolean", nullable=true)
     */
    private $menuProduct;
    /**
     * @var integer
     * @ORM\Column(name="menu_product", type="boolean", nullable=true)
     */
    private $menuNews;
    /**
     * @var integer
     * @ORM\Column(name="menu_partner", type="boolean", nullable=true)
     */
    private $menuPartner;
    /**
     * @var integer
     * @ORM\Column(name="menu_guestbook", type="boolean", nullable=true)
     */
    private $menuGuestBook;
    /**
     * @var integer
     * @ORM\Column(name="menu_faq", type="boolean", nullable=true)
     */
    private $menuFaq;
    /**
     * @var integer
     * @ORM\Column(name="menu_gallery", type="boolean", nullable=true)
     */
    private $menuGallery;
    /**
     * @var integer
     * @ORM\Column(name="menu_folder", type="boolean", nullable=true)
     */
    private $menuFolder;
    /**
     * @var integer
     * @ORM\Column(name="menu_map", type="boolean", nullable=true)
     */
    private $menuMap;
    /**
     * @var integer
     * @ORM\Column(name="menu_page", type="boolean", nullable=true)
     */
    private $menuPage;

    /**
     * @var string
     *
     * @ORM\Column(name="client_name", type="string", length=255)
     */
    private $clientName;

    /**
     * @ORM\OneToOne(targetEntity="PointWeb\AdminBundle\Entity\Image", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $logo;

    /**
     * @var string
     *
     * @ORM\Column(name="keyword", type="text", nullable=true)
     */
    private $keyword;

    /**
     * @var string
     *
     * @ORM\Column(name="background_style", type="string", length=255, nullable=true)
     */
    private $backgroundStyle;


    /**
     * @var string
     *
     * @ORM\Column(name="googleplus_link", type="string", length=255, nullable=true)
     */
    private $googleplusLink;

    /**
     * @var string
     *
     * @ORM\Column(name="facebook_link", type="string", length=255, nullable=true)
     */
    private $facebookLink;

    /**
     * @var string
     *
     * @ORM\Column(name="metadescription", type="string", length=255, nullable=true)
     */
    private $metadescription;

    /**
     * @var string
     *
     * @ORM\Column(name="langue", type="string", length=55, nullable=true)
     */
    private $langue;

    /**
     * @var string
     *
     * @ORM\Column(name="googleanalitics", type="text", nullable=true)
     */
    private $googleanalitics;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }


    public function setMenuProduct($menuProduct){ $this->menuProduct = $menuProduct; return $this; }
    public function getMenuProduct(){ return $this->menuProduct; }

    public function setMenuNews($menuNews){ $this->menuNews = $menuNews; return $this; }
    public function getMenuNews(){ return $this->menuNews; }

    public function setMenuPartner($menuPartner){ $this->menuPartner = $menuPartner; return $this; }
    public function getMenuPartner(){ return $this->menuPartner; }

    public function setMenuGuestBook($menuGuestBook){ $this->menuGuestBook = $menuGuestBook; return $this; }
    public function getMenuGuestBook(){ return $this->menuGuestBook; }

    public function setMenuFaq($menuFaq){ $this->menuFaq = $menuFaq; return $this; }
    public function getMenuFaq(){ return $this->menuFaq; }

    public function setMenuGallery($menuGallery){ $this->menuGallery = $menuGallery; return $this; }
    public function getMenuGallery(){ return $this->menuGallery; }

    public function setMenuFolder($menuFolder){ $this->menuFolder = $menuFolder; return $this; }
    public function getMenuFolder(){ return $this->menuFolder; }

    public function setMenuMap($menuMap){ $this->menuMap = $menuMap; return $this; }
    public function getMenuMap(){ return $this->menuMap; }

    public function setMenuPage($menuPage){ $this->menuPage = $menuPage; return $this; }
    public function getMenuPage(){ return $this->menuPage; }
    /**
     * Set clientName
     *
     * @param string $clientName
     * @return Reglage
     */
    public function setClientName($clientName)
    {
        $this->clientName = $clientName;

        return $this;
    }

    /**
     * Get clientName
     *
     * @return string 
     */
    public function getClientName()
    {
        return $this->clientName;
    }

    public function setBackgroundStyle($backgroundStyle)
    {
        $this->backgroundStyle = $backgroundStyle;
        return $this;
    }

    public function getBackgroundStyle()
    {
        return $this->backgroundStyle;
    }

    /**
     * Set logo
     *
     * @param \PointWeb\AdminBundle\Entity\Image $logo
     * @return Reglage
     */
    public function setLogo(\PointWeb\AdminBundle\Entity\Image $logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return \PointWeb\AdminBundle\Entity\Image
     */
    public function getLogo()
    {
        return $this->logo;
    }

    public function setKeyword($keyword)
    {
        $this->keyword = $keyword;

        return $this;
    }
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * Set googleplusLink
     *
     * @param string $googleplusLink
     * @return Reglage
     */
    public function setGoogleplusLink($googleplusLink)
    {
        $this->googleplusLink = $googleplusLink;

        return $this;
    }

    /**
     * Get googleplusLink
     *
     * @return string 
     */
    public function getGoogleplusLink()
    {
        return $this->googleplusLink;
    }

    /**
     * Set facebookLink
     *
     * @param string $facebookLink
     * @return Reglage
     */
    public function setFacebookLink($facebookLink)
    {
        $this->facebookLink = $facebookLink;

        return $this;
    }

    /**
     * Get facebookLink
     *
     * @return string 
     */
    public function getFacebookLink()
    {
        return $this->facebookLink;
    }

    /**
     * Set metadescription
     *
     * @param string $metadescription
     * @return Reglage
     */
    public function setMetadescription($metadescription)
    {
        $this->metadescription = $metadescription;

        return $this;
    }

    /**
     * Get metadescription
     *
     * @return string 
     */
    public function getMetadescription()
    {
        return $this->metadescription;
    }

    /**
     * Set langue
     *
     * @param string $langue
     * @return Reglage
     */
    public function setLangue($langue)
    {
        $this->langue = $langue;

        return $this;
    }

    /**
     * Get langue
     *
     * @return string 
     */
    public function getLangue()
    {
        return $this->langue;
    }

    /**
     * Set googleanalitics
     *
     * @param string $googleanalitics
     * @return Reglage
     */
    public function setGoogleanalitics($googleanalitics)
    {
        $this->googleanalitics = $googleanalitics;

        return $this;
    }

    /**
     * Get googleanalitics
     *
     * @return string 
     */
    public function getGoogleanalitics()
    {
        return $this->googleanalitics;
    }
}
