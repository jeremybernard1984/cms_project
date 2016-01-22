<?php

namespace PointWeb\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\validator\Constraints as Assert;

/**
 * Image
 *
 * @ORM\Table("image")
 * @ORM\Entity(repositoryClass="PointWeb\AdminBundle\Repository\ImageRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Image
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
     * @var \DateTime
     *
     * @ORM\COlumn(name="updated_at",type="datetime", nullable=true)
     */
    private $updateAt;

    /**
     * @ORM\PostLoad()
     */
    public function postLoad()
    {
        $this->updateAt = new \DateTime();
    }

    /**
     * @ORM\Column(type="string",length=255, nullable=true)
     */
    private $name;

    /**
     * @ORM\Column(type="string",length=255, nullable=true)
     */
    private $path;

    public $file;

    public function getUploadRootDir()
    {
        return __dir__.'/../../../../web/upload/images';
    }

    public function getAbsolutePath()
    {
        return null === $this->path ? null : $this->getUploadRootDir().'/'.$this->path;
    }
    public function getWebPath($base)
    {
        return $base . (null === $this->path ? null : $this->getUploadDir() . '/' . $this->path);
    }

    public function getWebPathSmall($base)
    {
        return $base . (null === $this->path ? null : $this->getUploadDir() . '/small_' . $this->path);
    }
    protected function getUploadDir()
    {
        return 'web/upload/images';
    }
    public function getAssetPath()
    {
        return 'upload/images/'.$this->path;
    }

    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUpload()
    {
        $this->tempFile = $this->getAbsolutePath();
        $this->oldFile = $this->getPath();
        $this->updateAt = new \DateTime();

        if (null !== $this->file)
            $this->path = sha1(uniqid(mt_rand(),true)).'.'.$this->file->guessExtension();
    }

    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    /*
    public function upload()
    {
        if (null !== $this->file) {
            $this->file->move($this->getUploadRootDir(),$this->path);
            unset($this->file);

            if ($this->oldFile != null) unlink($this->tempFile);
        }
    }
    */
    public function upload()
    {
        if (null === $this->file) {
            return;
        }
        $fileName = explode('/', $this->file);
        $fileName = $fileName[count($fileName) - 1];
        $file = new \Symfony\Component\HttpFoundation\File\File($this->file);
        $src = $this->getUploadRootDir().'/'.$this->path;
        $file->move($this->getUploadRootDir(), $this->path);
        // redimension de l'image original avec enregistrement au même endroit
        $this->RedimImage($src, $src, 1900, 1080);
        // thumbnail
        $dest = $this->getUploadRootDir().'/small_'.$this->path;
        $this->RedimImage($src, $dest, 250, 250);
    }
    public function  RedimImage($src, $dist, $max_width, $max_height ){
        $image = '';
        $extension = strtolower(strrchr($src, '.'));
        switch($extension)
        {
            case '.jpg':
            case '.jpeg':
                $image = @imagecreatefromjpeg($src);
                break;
            case '.gif':
                $image = @imagecreatefromgif($src);
                break;
            case '.png':
                $image = @imagecreatefrompng($src);
                break;
        }
        $old_width = imagesx($image);
        $old_height = imagesy($image);
        if ($old_width > $max_width or $old_height > $max_height or preg_match("/small_/", $dist)){
            // Calculate the scaling
            $scale = min($max_width/$old_width, $max_height/$old_height);
            // Get the new dimensions
            $new_width  = ceil($scale*$old_width);
            $new_height = ceil($scale*$old_height);
            $new_image = imagecreatetruecolor($new_width, $new_height);
            imagecopyresampled($new_image, $image, 0, 0, 0, 0, $new_width, $new_height, $old_width, $old_height);
            $imageQuality = 90;
            switch($extension)
            {
                case '.jpg':
                case '.jpeg':
                    if (imagetypes() & IMG_JPG) {
                        imagejpeg($new_image, $dist, $imageQuality);
                    }
                    break;

                case '.gif':
                    if (imagetypes() & IMG_GIF) {
                        imagegif($new_image, $dist);
                    }
                    break;

                case '.png':
                    $scaleQuality = round(($imageQuality/100) * 9);
                    $invertScaleQuality = 9 - $scaleQuality;

                    if (imagetypes() & IMG_PNG) {
                        imagepng($new_image, $dist, $invertScaleQuality);
                    }
                    break;
            }
            imagedestroy($new_image);
            //imagedestroy($image);
        }
    }

    /**
     * @ORM\PreRemove()
     */
    public function preRemoveUpload()
    {
        $this->tempFile = $this->getAbsolutePath();
    }

    /**
     * @ORM\PostRemove()
     */
    public function removeUpload()
    {
        if (file_exists($this->tempFile)) unlink($this->tempFile);
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

    /**
     * Set path
     *
     * @param string $path
     * @return Image
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    public function getPath()
    {
        return $this->path;
    }



    /**
     * Set name
     *
     * @param string $name
     * @return Image
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * toString
     * @return string
     */
    public function __toString()
    {
        return (string) $this->getPath();
    }


}
