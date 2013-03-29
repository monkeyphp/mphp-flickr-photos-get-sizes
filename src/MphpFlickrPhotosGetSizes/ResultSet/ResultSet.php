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
     * @param \MphpFlickrBase\Adapter\Interfaces\ResultSet\ResultSetAdapterInterface $adapter
     *
     * @throws \InvalidArgumentException
     * @return type
     */
    public function setAdapter(\MphpFlickrBase\Adapter\Interfaces\ResultSet\ResultSetAdapterInterface $adapter)
    {
        if ($adapter instanceof \MphpFlickrPhotosGetSizes\Adapter\Interfaces\ResultSet\ResultSetAdapterInterface ) {
            return parent::setAdapter($adapter);
        }
        throw new \InvalidArgumentException('Invalid adapter supplied');
    }

    /**
     * Return if the Photo can be blogged
     *
     * @return boolean|null
     */
    public function getCanBlog()
    {
        return (null !== ($canBlog = $this->getAdapter()->getCanBlog()))
            ? (boolean)$canBlog
            : null;
    }

    /**
     * Return if the Photo can be printed
     *
     * @return boolean|null
     */
    public function getCanPrint()
    {
        return (null !== ($canPrint = $this->getAdapter()->getCanPrint()))
            ? (boolean)$canPrint
            : null;
    }

    /**
     * Return if the Photo can be downloaded
     *
     * @return boolean|null
     */
    public function getCanDownload()
    {
        return (null !== ($canDownload = $this->getAdapter()->getCanDownload()))
            ? (boolean)$canDownload
            : null;
    }

}