<?php
/**
 * SizeResultAdapterInterface.php
 *
 * PHP Version PHP 5.3.10
 *
 * @category    MphpFlickrPhotosGetSizes
 * @package     MphpFlickrPhotosGetSizes
 * @subpackage  MphpFlickrPhotosGetSizes\Adapter\Interfaces\Result
 * @author      David White [monkeyphp] <git@monkeyphp.com>
 */
namespace MphpFlickrPhotosGetSizes\Adapter\Interfaces\Result;

/**
 * SizeResultAdapterInterface
 *
 * @category    MphpFlickrPhotosGetSizes
 * @package     MphpFlickrPhotosGetSizes
 * @subpackage  MphpFlickrPhotosGetSizes\Adapter\Interfaces\Result
 * @author      David White [monkeyphp] <git@monkeyphp.com>
 */
interface SizeResultAdapterInterface
{

    /**
     * Return the label
     *
     * @return string|null
     */
    public function getLabel();

    /**
     * Return the width
     *
     * @return string|null
     */
    public function getWidth();

    /**
     * Return the height
     *
     * @return string|null
     */
    public function getHeight();

    /**
     * Return the source
     *
     * @return string|null
     */
    public function getSource();

    /**
     * Return the url
     *
     * @return string|null
     */
    public function getUrl();

    /**
     * Return media type
     *
     * @return string|null
     */
    public function getMedia();

}