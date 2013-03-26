<?php
/**
 * ResultSetAdapter.php
 *
 * PHP Version PHP 5.3.10
 *
 * @category    MphpFlickrPhotosGetSizes
 * @package     MphpFlickrPhotosGetSizes
 * @subpackage  MphpFlickrPhotosGetSizes\Adapter\Xml\ResultSet
 * @author      David White [monkeyphp] <git@monkeyphp.com>
 */
namespace MphpFlickrPhotosGetSizes\Adapter\Xml\ResultSet;

/**
 * ResultSetAdapter
 *
 * @category    MphpFlickrPhotosGetSizes
 * @package     MphpFlickrPhotosGetSizes
 * @subpackage  MphpFlickrPhotosGetSizes\Adapter\Xml\ResultSet
 * @author      David White [monkeyphp] <git@monkeyphp.com>
 */
class ResultSetAdapter extends \MphpFlickrBase\Adapter\Xml\ResultSet\AbstractResultSetAdapter implements \MphpFlickrPhotosGetSizes\Adapter\Interfaces\ResultSet\ResultSetAdapterInterface
{

    /**
     * The can blog value
     *
     * @var string|null
     */
    protected $canBlog;

    /**
     * DOMXPath query string used to retrieve the can blog value from the
     * results
     *
     * @var string
     */
    protected $canBlogQuery = '/rsp/sizes/@canblog';

    /**
     * Can download value
     *
     * @var string|null
     */
    protected $canDownload;

    /**
     * DOMXPath query string used to retrieve the can download value from the
     * results
     *
     * @var string
     */
    protected $canDownloadQuery = '/rsp/sizes/@candownload';

    /**
     * Can print value
     *
     * @var string|null
     */
    protected $canPrint;

    /**
     * DOMXPath query string used to retrieve the can print value from the
     * results
     *
     * @var string
     */
    protected $canPrintQuery  = '/rsp/sizes/@canprint';

    /**
     * DOMXPath query string used to retrieve the data for each ResultAdapter
     *
     * @var string
     */
    protected $resultDomNodeListQuery = '/rsp/sizes/size';

    /**
     * The class returned during each iteration of the ResultSet
     *
     * @var string
     */
    protected $resultAdapterClass = 'MphpFlickrPhotosGetSizes\Adapter\Xml\Result\ResultAdapter';

    /**
     * Return the can blog value from the results
     *
     * @return string|null
     */
    public function getCanBlog()
    {
        if (! isset($this->canBlog)) {
            $this->canBlog = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getCanBlogQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->canBlog;
    }

    /**
     * Return the DOMXPath query string used to retrieve the can blog value from
     * the results
     *
     * @return string
     */
    protected function getCanBlogQuery()
    {
        return $this->canBlogQuery;
    }

    /**
     * Return the can download value from the results
     *
     * @return string|null
     */
    public function getCanDownload()
    {
        if (! isset($this->canDownload)) {
            $this->canDownload = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getCanDownloadQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->canDownload;
    }

    /**
     * DOMXPath query string used to retrieve the can download value from the
     * results
     *
     * @return string
     */
    protected function getCanDownloadQuery()
    {
        return $this->canDownloadQuery;
    }

    /**
     * Return the can print value from the results
     *
     * @return string|null
     */
    public function getCanPrint()
    {
        if (! isset($this->canPrint)) {
            $this->canPrint = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getCanPrintQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->canPrint;
    }

    /**
     * Return the DOMXPath query string used to retrieve the can print value
     * from the results
     *
     * @return string
     */
    protected function getCanPrintQuery()
    {
        return $this->canPrintQuery;
    }

}