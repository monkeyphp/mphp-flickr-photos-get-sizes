<?php
/**
 * ResultSet.php
 *
 * PHP Version PHP 5.3.10
 *
 * @category    MphpFlickrPhotoGetSizes
 * @package     MphpFlickrPhotoGetSizes
 * @subpackage  MphpFlickrPhotoGetSizes\Result
 * @author      David White [monkeyphp] <git@monkeyphp.com>
 */
namespace MphpFlickrPhotoGetSizes\Result;

/**
 * Result
 *
 * @category    MphpFlickrPhotoGetSizes
 * @package     MphpFlickrPhotoGetSizes
 * @subpackage  MphpFlickrPhotoGetSizes\Result
 * @author      David White [monkeyphp] <git@monkeyphp.com>
 */
class Result extends \MphpFlickrBase\Result\AbstractResult
{
    
    /**
     * 
     * @param \MphpFlickrPhotoGetSizes\Adapter\Interfaces\Result\ResultAdapterInterface $adapter
     * @return \MphpFlickrPhotoGetSizes\Result\Result
     */
    public function setAdapter(\MphpFlickrPhotoGetSizes\Adapter\Interfaces\Result\ResultAdapterInterface $adapter) {
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