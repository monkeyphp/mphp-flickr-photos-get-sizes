<?php
/**
 * SizesResultSetAdapter.php
 *
 * PHP Version PHP 5.3.10
 *
 * @category    MphpFlickrPhotosGetSizes
 * @package     MphpFlickrPhotosGetSizes
 * @subpackage  MphpFlickrPhotosGetSizes\Adapter\Json\ResultSet
 * @author      David White [monkeyphp] <git@monkeyphp.com>
 */
namespace MphpFlickrPhotosGetSizes\Adapter\Json\ResultSet;

/**
 * SizesResultSetAdapter
 *
 * http://api.flickr.com/services/rest/?method=flickr.photos.getSizes&api_key=c8b09f96a6cce39e2d5e5b62eb9ddeb5&photo_id=8558949624&format=json&nojsoncallback=1
 *
 * @category    MphpFlickrPhotosGetSizes
 * @package     MphpFlickrPhotosGetSizes
 * @subpackage  MphpFlickrPhotosGetSizes\Adapter\Json\ResultSet
 * @author      David White [monkeyphp] <git@monkeyphp.com>
 */
class SizesResultSetAdapter extends \MphpFlickrBase\Adapter\Json\ResultSet\AbstractResultSetAdapter implements \MphpFlickrPhotosGetSizes\Adapter\Interfaces\ResultSet\SizesResultSetAdapterInterface
{

    /**
     * The can blog value
     *
     * @var string|null
     */
    protected $canBlog;

    /**
     * Can download value
     *
     * @var string|null
     */
    protected $canDownload;

    /**
     * Can print value
     *
     * @var string|null
     */
    protected $canPrint;

    /**
     * The class returned during each iteration of the ResultSet
     *
     * @var string
     */
    protected $resultAdapterClass = 'MphpFlickrPhotosGetSizes\Adapter\Json\Result\SizeResultAdapter';

    /**
     * Return the can blog value from the results
     *
     * @return string|int|null
     */
    public function getCanBlog()
    {
        if (! isset($this->canBlog)) {

            $this->canBlog = null;

            $decodedResults = $this->getDecodedResults();

            if (array_key_exists('sizes', $decodedResults) && ((boolean)$sizes = $decodedResults['sizes']) && (is_array($sizes))) {
                $this->canBlog = ( array_key_exists('canblog', $sizes) && (is_string($sizes['canblog']) || is_int($sizes['canblog'])) )
                    ? $sizes['canblog']
                    : null;
            }
        }
        return $this->canBlog;
    }

    /**
     * Return the can download value from the results
     *
     * @return string|int|null
     */
    public function getCanDownload()
    {
        if (! isset($this->canDownload)) {
            $this->canDownload = null;

            $decodedResults = $this->getDecodedResults();

            if (array_key_exists('sizes', $decodedResults) && ((boolean)$sizes = $decodedResults['sizes']) && (is_array($sizes))) {
                $this->canDownload = ( array_key_exists('candownload', $sizes) && (is_string($sizes['candownload']) || is_int($sizes['candownload'])) )
                    ? $sizes['candownload']
                    : null;
            }
        }
        return $this->canDownload;
    }

    /**
     * Return the can print value from the results
     *
     * @return string|int|null
     */
    public function getCanPrint()
    {
        if (! isset($this->canPrint)) {
            $this->canPrint = null;

            $decodedResults = $this->getDecodedResults();

            if (array_key_exists('sizes', $decodedResults) && ((boolean)$sizes = $decodedResults['sizes']) && (is_array($sizes))) {
                $this->canPrint = ( array_key_exists('canprint', $sizes) && (is_string($sizes['canprint']) || is_int($sizes['canprint'])) )
                    ? $sizes['canprint']
                    : null;
            }
        }
        return $this->canPrint;
    }

    protected function getResultList()
    {

    }

}