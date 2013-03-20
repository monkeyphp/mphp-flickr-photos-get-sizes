<?php
/**
 * ResultSetAdapterInterface.php
 *
 * PHP Version PHP 5.3.10
 *
 * @category    MphpFlickrPhotoGetSizes
 * @package     MphpFlickrPhotoGetSizes
 * @subpackage  MphpFlickrPhotoGetSizes\Adapter\Interfaces\ResultSet
 * @author      David White [monkeyphp] <git@monkeyphp.com>
 */
namespace MphpFlickrPhotoGetSizes\Adapter\Interfaces\ResultSet;

/**
 * ResultSetAdapterInterface
 *
 * @category    MphpFlickrPhotoGetSizes
 * @package     MphpFlickrPhotoGetSizes
 * @subpackage  MphpFlickrPhotoGetSizes\Adapter\Interfaces\ResultSet
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