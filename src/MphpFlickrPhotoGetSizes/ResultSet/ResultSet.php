<?php
/**
 * ResultSet.php
 *
 * PHP Version PHP 5.3.10
 *
 * @category    MphpFlickrPhotoGetSizes
 * @package     MphpFlickrPhotoGetSizes
 * @subpackage  MphpFlickrPhotoGetSizes\ResultSet
 * @author      David White [monkeyphp] <git@monkeyphp.com>
 */
namespace MphpFlickrPhotoGetSizes\ResultSet;

/**
 * ResultSet
 *
 * @category    MphpFlickrPhotoGetSizes
 * @package     MphpFlickrPhotoGetSizes
 * @subpackage  MphpFlickrPhotoGetSizes\ResultSet
 * @author      David White [monkeyphp] <git@monkeyphp.com>
 * 
 * @property-read \MphpFlickrPhotoGetSizes\Adapter\Interfaces\ResultSet\ResultSetAdapterInterface $adapter Adapter class
 */
class ResultSet extends \MphpFlickrBase\ResultSet\AbstractResultSet
{
    
    /**
     * 
     * @param \MphpFlickrPhotoGetSizes\Adapter\Interfaces\ResultSet\ResultSetAdapterInterface $adapter
     * 
     * @return \MphpFlickrPhotoGetSizes\ResultSet\ResultSet
     */
    public function setAdapter(\MphpFlickrPhotoGetSizes\Adapter\Interfaces\ResultSet\ResultSetAdapterInterface $adapter) {
        parent::setAdapter($adapter);
        return $this;
    }
    
    /**
     * Return if the Photo can be blogged
     *
     * @return string|null
     */
    public function getCanBlog()
    {
        return $this->getAdapter()->getCanBlog();
    }

    /**
     * Return if the Photo can be printed
     *
     * @return string|null
     */
    public function getCanPrint()
    {
        return $this->getAdapter()->getCanPrint();
    }

    /**
     * Return if the Photo can be downloaded
     *
     * @return string|null
     */
    public function getCanDownload()
    {
        return $this->getAdapter()->getCanDownload();
    }
    
}