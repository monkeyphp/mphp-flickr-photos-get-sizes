<?php
/**
 * SizeResultAdapter.php
 *
 * PHP Version PHP 5.3.10
 *
 * @category    MphpFlickrPhotosGetSizes
 * @package     MphpFlickrPhotosGetSizes
 * @subpackage  MphpFlickrPhotosGetSizes\Adapter\Json\Result
 * @author      David White [monkeyphp] <git@monkeyphp.com>
 */
namespace MphpFlickrPhotosGetSizes\Adapter\Json\Result;

/**
 * SizeResultAdapter
 *
 * @category    MphpFlickrPhotosGetSizes
 * @package     MphpFlickrPhotosGetSizes
 * @subpackage  MphpFlickrPhotosGetSizes\Adapter\Json\Result
 * @author      David White [monkeyphp] <git@monkeyphp.com>
 */
class SizeResultAdapter extends \MphpFlickrBase\Adapter\Json\Result\AbstractResultAdapter implements \MphpFlickrPhotosGetSizes\Adapter\Interfaces\Result\SizeResultAdapterInterface
{

    public function getHeight()
    {
        if (! isset($this->height)) {
            $decodedResults = $this->getDecodedResults();
            $this->height = (array_key_exists('height', $decodedResults) && ( is_string($decodedResults['height']) || is_integer($decodedResults['height'])))
                ? $decodedResults['height']
                : null;
        }
        return $this->height;
    }

    public function getLabel()
    {
        if (! isset($this->label)) {
            $decodedResults = $this->getDecodedResults();
            $this->label = (array_key_exists('label', $decodedResults) && ( is_string($decodedResults['label']) || is_integer($decodedResults['label'])))
                ? $decodedResults['label']
                : null;
        }
        return $this->label;
    }

    public function getMedia()
    {
        if (! isset($this->media)) {
            $decodedResults = $this->getDecodedResults();
            $this->media = (array_key_exists('media', $decodedResults) && is_string($decodedResults['media']))
                ? $decodedResults['media']
                : null;
        }
        return $this->media;
    }

    public function getSource()
    {
        if (! isset($this->source)) {
            $decodedResults = $this->getDecodedResults();
            $this->source = (array_key_exists('source', $decodedResults) && is_string($decodedResults['source']))
                ? $decodedResults['source']
                : null;
        }
        return $this->source;
    }

    public function getUrl()
    {
        if (! isset($this->url)) {
            $decodedResults = $this->getDecodedResults();
            $this->url = (array_key_exists('url', $decodedResults) && is_string($decodedResults['url']))
                ? $decodedResults['url']
                : null;
        }
        return $this->url;
    }

    public function getWidth()
    {
        if (! isset($this->width)) {
            $decodedResults = $this->getDecodedResults();
            $this->width = (array_key_exists('width', $decodedResults) && (is_string($decodedResults['width'])) || is_int($decodedResults['width']))
                ? $decodedResults['width']
                : null;
        }
        return $this->width;
    }

}