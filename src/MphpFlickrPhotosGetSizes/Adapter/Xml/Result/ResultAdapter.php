<?php
/**
 * ResultAdapter.php
 *
 * PHP Version PHP 5.3.10
 *
 * @category    MphpFlickrPhotosGetSizes
 * @package     MphpFlickrPhotosGetSizes
 * @subpackage  MphpFlickrPhotosGetSizes\Adapter\Xml\Result
 * @author      David White [monkeyphp] <git@monkeyphp.com>
 */
namespace MphpFlickrPhotosGetSizes\Adapter\Xml\Result;

use MphpFlickrBase\Adapter\Xml\Result\AbstractResultAdapter;
use MphpFlickrPhotosGetSizes\Adapter\Interfaces\Result\ResultAdapterInterface;

/**
 * ResultAdapter
 *
 * @category    MphpFlickrPhotosGetSizes
 * @package     MphpFlickrPhotosGetSizes
 * @subpackage  MphpFlickrPhotosGetSizes\Adapter\Xml\Result
 * @author      David White [monkeyphp] <git@monkeyphp.com>
 */
class ResultAdapter extends AbstractResultAdapter implements ResultAdapterInterface
{

    /**
     * The height of the Size
     *
     * @var string|null
     */
    protected $height;

    /**
     * DOMXPath query string used to retrieve the height value from
     * the results
     *
     * @var string
     */
    protected $heightQuery = '/size/@height';

    /**
     * The label of the Size
     *
     * @var string|null
     */
    protected $label;

    /**
     * DOMXPath query string used to retrieve the label value from the
     * results
     *
     * @var string
     */
    protected $labelQuery = '/size/@label';

    /**
     * The medai of the Size
     *
     * @var string|null
     */
    protected $media;

    /**
     * DOMXPath query string used to retrieve the media value from
     * the results
     *
     * @var string
     */
    protected $mediaQuery = '/size/@media';

    /**
     * The source of the Size
     *
     * @var string|null
     */
    protected $source;

    /**
     * DOMXPath query string used to retrieve the source value
     * from the results
     *
     * @var string
     */
    protected $sourceQuery = '/size/@source';

    /**
     * The url of the Size
     *
     * @var string|null
     */
    protected $url;

    /**
     * DOMXPath query string used to retrieve the url value from
     * the results
     *
     * @var string
     */
    protected $urlQuery = '/size/@url';

    /**
     * The width of the Size
     *
     * @var string|null
     */
    protected $width;

    /**
     * DOMXPath query string used to retrieve the width value from
     * the results
     *
     * @var string
     */
    protected $widthQuery = '/size/@width';







    const ATTRIBUTE_HEIGHT = 'height';

    const ATTRIBUTE_WIDTH = 'width';

    const ATTRIBUTE_LABEL = 'label';

    const ATTRIBUTE_MEDIA = 'media';

    const ATTRIBUTE_SOURCE = 'source';

    const ATTRIBUTE_URL = 'url';

    /**
     * Return the height of the Size
     *
     * @return string|null
     */
    public function getHeight()
    {
        if (! isset($this->height)) {
            $this->height = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getHeightQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->height;
    }

    protected function getHeightQuery()
    {
        return $this->heightQuery;
    }

    /**
     * Return the label of the Size
     *
     * @return string|null
     */
    public function getLabel()
    {
      if (! isset($this->label)) {
            $this->label = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getLabelQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->label;
    }

    protected function getLabelQuery()
    {
        return $this->labelQuery;
    }

    /**
     * Return the media of the Size
     *
     * @return string|null
     */
    public function getMedia()
    {
        if (! isset($this->media)) {
            $this->media = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getMediaQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->media;
    }

    protected function getMediaQuery()
    {
        return $this->mediaQuery;
    }

    /**
     * Return the source of the Size
     *
     * @return string|null
     */
    public function getSource()
    {
        if (! isset($this->source)) {
            $this->source = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getSourceQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->source;
    }

    protected function getSourceQuery()
    {
        return $this->sourceQuery;
    }


    /**
     * Return the url of the Size
     *
     * @return string|null
     */
    public function getUrl()
    {
      if (! isset($this->url)) {
            $this->url = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getUrlQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->url;
    }

    protected function getUrlQuery()
    {
        return $this->urlQuery;
    }


    /**
     * Return the width of the Size
     *
     * @return string|null
     */
    public function getWidth()
    {
        if (! isset($this->width)) {
            $this->width = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getWidthQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->width;
    }

    protected function getWidthQuery()
    {
        return $this->widthQuery;
    }

}