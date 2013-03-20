<?php
/**
 * ResultAdapter.php
 *
 * PHP Version PHP 5.3.10
 *
 * @category    MphpFlickrPhotoGetSizes
 * @package     MphpFlickrPhotoGetSizes
 * @subpackage  MphpFlickrPhotoGetSizes\Adapter\Xml\Result
 * @author      David White [monkeyphp] <git@monkeyphp.com>
 */
namespace MphpFlickrPhotoGetSizes\Adapter\Xml\Result;

use MphpFlickrBase\Adapter\Xml\Result\AbstractResultAdapter;
use MphpFlickrPhotoGetSizes\Adapter\Interfaces\Result\ResultAdapterInterface;

/**
 * ResultAdapter
 *
 * @category    MphpFlickrPhotoGetSizes
 * @package     MphpFlickrPhotoGetSizes
 * @subpackage  MphpFlickrPhotoGetSizes\Adapter\Xml\Result
 * @author      David White [monkeyphp] <git@monkeyphp.com>
 */
class ResultAdapter extends AbstractResultAdapter implements ResultAdapterInterface
{
    
    /**
     * The label of the Size
     *
     * @var string|null
     */
    protected $label;

    /**
     * The width of the Size
     *
     * @var string|null
     */
    protected $width;

    /**
     * The height of the Size
     *
     * @var string|null
     */
    protected $height;

    /**
     * The source of the Size
     *
     * @var string|null
     */
    protected $source;

    /**
     * The url of the Size
     *
     * @var string|null
     */
    protected $url;

    /**
     * The medai of the Size
     *
     * @var string|null
     */
    protected $media;

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
            $this->height = ($this->getDomElement()->getAttribute(self::ATTRIBUTE_HEIGHT));
        }
        return $this->height;
    }

    /**
     * Return the label of the Size
     *
     * @return string|null
     */
    public function getLabel()
    {
      if (! isset($this->label)) {
            $this->label = ($this->getDomElement()->getAttribute(self::ATTRIBUTE_LABEL));
        }
        return $this->label;
    }

    /**
     * Return the media of the Size
     *
     * @return string|null
     */
    public function getMedia()
    {
        if (! isset($this->media)) {
            $this->media = ($this->getDomElement()->getAttribute(self::ATTRIBUTE_MEDIA));
        }
        return $this->media;
    }

    /**
     * Return the source of the Size
     *
     * @return string|null
     */
    public function getSource()
    {
        if (! isset($this->source)) {
            $this->source = ($this->getDomElement()->getAttribute(self::ATTRIBUTE_SOURCE));
        }
        return $this->source;
    }

    /**
     * Return the url of the Size
     *
     * @return string|null
     */
    public function getUrl()
    {
      if (! isset($this->url)) {
            $this->url = ($this->getDomElement()->getAttribute(self::ATTRIBUTE_URL));
        }
        return $this->url;
    }

    /**
     * Return the width of the Size
     *
     * @return string|null
     */
    public function getWidth()
    {
        if (! isset($this->width)) {
            $this->width = ($this->getDomElement()->getAttribute(self::ATTRIBUTE_WIDTH));
        }
        return $this->width;
    }
    
}