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
     * @param \MphpFlickrBase\Adapter\Interfaces\Result\ResultAdapterInterface $adapter
     *
     * @throws \InvalidArgumentException
     * @return type
     */
    public function setAdapter(\MphpFlickrBase\Adapter\Interfaces\Result\ResultAdapterInterface $adapter)
    {
        if ($adapter instanceof \MphpFlickrPhotosGetSizes\Adapter\Interfaces\Result\ResultAdapterInterface) {
            return parent::setAdapter($adapter);
        }
        throw new \InvalidArgumentException('Invalid adapter supplied');
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
        return ($width = $this->getAdapter()->getWidth())
            ? (integer)$width
            : null;
    }

    /**
     * Return the height
     *
     * @return string|null
     */
    public function getHeight()
    {
        return ($height = $this->getAdapter()->getHeight())
            ? (integer)$height
            : null;
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