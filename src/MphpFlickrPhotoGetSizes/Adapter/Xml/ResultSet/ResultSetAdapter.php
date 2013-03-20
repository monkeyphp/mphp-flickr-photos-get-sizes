<?php
/**
 * ResultSetAdapter.php
 *
 * PHP Version PHP 5.3.10
 *
 * @category    MphpFlickrPhotoGetSizes
 * @package     MphpFlickrPhotoGetSizes
 * @subpackage  MphpFlickrPhotoGetSizes\Adapter\Xml\ResultSet
 * @author      David White [monkeyphp] <git@monkeyphp.com>
 */
namespace MphpFlickrPhotoGetSizes\Adapter\Xml\ResultSet;

/**
 * ResultSetAdapter
 *
 * @category    MphpFlickrPhotoGetSizes
 * @package     MphpFlickrPhotoGetSizes
 * @subpackage  MphpFlickrPhotoGetSizes\Adapter\Xml\ResultSet
 * @author      David White [monkeyphp] <git@monkeyphp.com>
 */
class ResultSetAdapter extends \MphpFlickrBase\Adapter\Xml\ResultSet\AbstractResultSetAdapter implements \MphpFlickrPhotoGetSizes\Adapter\Interfaces\ResultSet\ResultSetAdapterInterface
{
    
    protected $canBlog;

    protected $canDownload;

    protected $canDownloadQuery = '/rsp/sizes/@candownload';

    protected $domNodeListQuery = '/rsp/sizes/size';
    
    protected function getCanDownloadQuery()
    {
        return $this->canDownloadQuery;
    }
    
    protected $canPrint;

    protected $canPrintQuery  = '/rsp/sizes/@canprint';

    protected function getCanPrintQuery()
    {
        return $this->canPrintQuery;
    }

    protected $canBlogQuery = '/rsp/sizes/@canblog';

    protected function getCanBlogQuery()
    {
        return $this->canBlogQuery;
    }

    public function getCanBlog()
    {
        if (! isset($this->canBlog)) {
            $this->canBlog = $this->getDomXPath($this->getDomDocument())->query($this->getCanBlogQuery())->item(0)->value;
        }
        return $this->canBlog;
    }

    public function getCanDownload()
    {
        if (! isset($this->canDownload)) {
            $this->canDownload = $this->getDomXPath($this->getDomDocument())->query($this->getCanDownloadQuery())->item(0)->value;
        }
        return $this->canDownload;
    }

    public function getCanPrint()
    {
        if (! isset($this->canPrint)) {
            $this->canPrint = $this->getDomXPath($this->getDomDocument())->query($this->getCanPrintQuery())->item(0)->value;
        }
        return $this->canPrint;
    }
    
}