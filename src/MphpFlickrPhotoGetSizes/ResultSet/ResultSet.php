<?php
/**
 * ResultSet.php
 *
 * PHP Version PHP 5.3.10
 *
 * @category    MphpFlickrPhotosGetSizes
 * @package     MphpFlickrPhotosGetSizes
 * @subpackage  MphpFlickrPhotosGetSizes\ResultSet
 * @author      David White [monkeyphp] <git@monkeyphp.com>
 */
namespace MphpFlickrPhotosGetSizes\ResultSet;

/**
 * ResultSet
 *
 * @category    MphpFlickrPhotosGetSizes
 * @package     MphpFlickrPhotosGetSizes
 * @subpackage  MphpFlickrPhotosGetSizes\ResultSet
 * @author      David White [monkeyphp] <git@monkeyphp.com>
 * 
 * @property-read \MphpFlickrPhotosGetSizes\Adapter\Interfaces\ResultSet\ResultSetAdapterInterface $adapter Adapter class
 */
class ResultSet extends \MphpFlickrBase\ResultSet\AbstractResultSet
{
    
    /**
     * 
     * @param \MphpFlickrPhotosGetSizes\Adapter\Interfaces\ResultSet\ResultSetAdapterInterface $adapter
     * 
     * @return \MphpFlickrPhotosGetSizes\ResultSet\ResultSet
     */
    public function setAdapter(\MphpFlickrPhotosGetSizes\Adapter\Interfaces\ResultSet\ResultSetAdapterInterface $adapter) {
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