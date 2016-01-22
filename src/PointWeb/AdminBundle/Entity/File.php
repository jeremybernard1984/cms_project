<?php

namespace PointWeb\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * File
 *
 * @ORM\Table(name="file")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class File
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
     * @var string
     * @Assert\Length(
     *      max = "255",
     *      maxMessage = "Ce champs ne peut pas être plus long que {{ limit }} caractères"
     * )
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     * @Assert\NotBlank
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="position", type="integer", nullable=true)
     */
    private $position;

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=255, nullable=true)
     */
    private $path;

    private $tmpPath;


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
     * Set name
     *
     * @param string $name
     * @return File
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
     * Set description
     *
     * @param string $description
     * @return File
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
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
     * Set position
     *
     * @param integer $position
     * @return File
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return integer
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set path
     *
     * @param string $path
     * @return File
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Set tmpPath
     *
     * @param string $path
     * @return File
     */
    public function setTmpPath($path)
    {
        $this->tmpPath = $path;

        return $this;
    }

    /**
     * Get tmpPath
     *
     * @return string
     */
    public function getTmpPath()
    {
        return $this->tmpPath;
    }

    public function getAbsolutePath()
    {
        return null === $this->path ? null : $this->getUploadRootDir() . '/' . $this->path;
    }
    public function getAbsolutePathSmall()
    {
        return null === $this->path ? null : $this->getUploadRootDir() . '/small_' . $this->path;
    }

    public function getWebPath($base)
    {
        return $base . (null === $this->path ? null : $this->getUploadDir() . '/' . $this->path);
    }

    public function getWebPathSmall($base)
    {
        return $base . (null === $this->path ? null : $this->getUploadDir() . '/small_' . $this->path);
    }

    protected function getUploadRootDir()
    {
        return __DIR__ . '/../../../../' . $this->getUploadDir();
    }

    protected function getUploadDir()
    {
        return 'web/upload/documents';
    }

    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUpload()
    {
        if (null !== $this->tmpPath) {
            $extension = explode('.', $this->tmpPath);
            $extension = $extension[count($extension) - 1];
            $this->path = sha1(uniqid(mt_rand(), true)) . '.' . $extension;
        }
    }

    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function upload()
    {
        if (null === $this->tmpPath) {
            return;
        }
        $fileName = explode('/', $this->tmpPath);
        $fileName = $fileName[count($fileName) - 1];
        $file = new \Symfony\Component\HttpFoundation\File\File($this->tmpPath);
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
     * @ORM\PostRemove()
     */
    public function removeUpload()
    {
        if ($file = $this->getAbsolutePath()) {
            unlink($file);
            // supression miniature
            $file_small = $this->getAbsolutePathSmall();
            unlink($file_small);
        }
    }
}
