<?php
/**
 * ResultSetAdapterInterface.php
 *
 * PHP Version PHP 5.3.10
 *
 * @category    MphpFlickrPhotosGetSizes
 * @package     MphpFlickrPhotosGetSizes
 * @subpackage  MphpFlickrPhotosGetSizes\Adapter\Interfaces\ResultSet
 * @author      David White [monkeyphp] <git@monkeyphp.com>
 */
namespace MphpFlickrPhotosGetSizes\Adapter\Interfaces\ResultSet;

/**
 * ResultSetAdapterInterface
 *
 * @category    MphpFlickrPhotosGetSizes
 * @package     MphpFlickrPhotosGetSizes
 * @subpackage  MphpFlickrPhotosGetSizes\Adapter\Interfaces\ResultSet
 * @author      David White [monkeyphp] <git@monkeyphp.com>
 */
interface ResultSetAdapterInterface 
{
    
    /**
     * Return if the Photo can be blogged
     *
     * @return string|null
     */
    public function getCanBlog();

    /**
     * Return if the Photo can be printed
     *
     * @return string|null
     */
    public function getCanPrint();

    /**
     * Return if the Photo can be downloaded
     *
     * @return string|null
     */
    public function getCanDownload();
    
}