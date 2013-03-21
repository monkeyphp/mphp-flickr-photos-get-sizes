<?php
/**
 * ResultSet.php
 *
 * PHP Version PHP 5.3.10
 *
 * @category    MphpFlickrPhotosGetSizes
 * @package     MphpFlickrPhotosGetSizes
 * @subpackage  MphpFlickrPhotosGetSizes\Result
 * @author      David White [monkeyphp] <git@monkeyphp.com>
 */
namespace MphpFlickrPhotosGetSizes\Result;

/**
 * Result
 *
 * @category    MphpFlickrPhotosGetSizes
 * @package     MphpFlickrPhotosGetSizes
 * @subpackage  MphpFlickrPhotosGetSizes\Result
 * @author      David White [monkeyphp] <git@monkeyphp.com>
 */
class Result extends \MphpFlickrBase\Result\AbstractResult
{
    
    /**
     * 
     * @param \MphpFlickrPhotosGetSizes\Adapter\Interfaces\Result\ResultAdapterInterface $adapter
     * @return \MphpFlickrPhotosGetSizes\Result\Result
     */
    public function setAdapter(\MphpFlickrPhotosGetSizes\Adapter\Interfaces\Result\ResultAdapterInterface $adapter) {
        parent::setAdapter($adapter);
        return $this;
    }
    
    /**
     * Return the label
     *
     * @return string|null
     */
    public function getLabel()
    {
        return $this->getAdapter()->getLabel();
    }

    /**
     * Return the width
     *
     * @return string|null
     */
    public function getWidth()
    {
        return $this->getAdapter()->getWidth();
    }

    /**
     * Return the height
     *
     * @return string|null
     */
    public function getHeight()
    {
        return $this->getAdapter()->getHeight();
    }

    /**
     * Return the source
     *
     * @return string|null
     */
    public function getSource()
    {
        return $this->getAdapter()->getSource();
    }

    /**
     * Return the url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->getAdapter()->getUrl();
    }

    /**
     * Return media type
     *
     * @return string|null
     */
    public function getMedia()
    {
        return $this->getAdapter()->getMedia();
    }
    
}