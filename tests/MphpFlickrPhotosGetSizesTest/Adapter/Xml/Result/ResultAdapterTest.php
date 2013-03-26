<?php
/**
 * ResultAdapterTest.php
 *
 * PHP Version PHP 5.3.10
 *
 * @category    MphpFlickrPhotosGetSizesTest
 * @package     MphpFlickrPhotosGetSizesTest
 * @subpackage  MphpFlickrPhotosGetSizesTest\Adapter\Xml\Result
 * @author      David White [monkeyphp] <git@monkeyphp.com>
 */
namespace MphpFlickrPhotosGetSizesTest\Adapter\Xml\Result;

/**
 * ResultAdapterTest
 *
 * @category    MphpFlickrPhotosGetSizesTest
 * @package     MphpFlickrPhotosGetSizesTest
 * @subpackage  MphpFlickrPhotosGetSizesTest\Adapter\Xml\Result
 * @author      David White [monkeyphp] <git@monkeyphp.com>
 */
class ResultAdapterTest extends \PHPUnit_Framework_TestCase
{

    public function test__construct()
    {
        $results = $this->getResults();
        $parameters = $this->getParameters();
        $resultAdapter = new \MphpFlickrPhotosGetSizes\Adapter\Xml\Result\ResultAdapter($results, $parameters);
    }

    public function testGetHeight()
    {
        $resultAdapter = new \MphpFlickrPhotosGetSizes\Adapter\Xml\Result\ResultAdapter($this->getResults(), $this->getParameters());
        $this->assertSame('75', $resultAdapter->getHeight());
    }

    public function testGetLabel()
    {
        $resultAdapter = new \MphpFlickrPhotosGetSizes\Adapter\Xml\Result\ResultAdapter($this->getResults(), $this->getParameters());
        $this->assertSame('Square', $resultAdapter->getLabel());
    }

    public function testGetMedia()
    {
        $resultAdapter = new \MphpFlickrPhotosGetSizes\Adapter\Xml\Result\ResultAdapter($this->getResults(), $this->getParameters());
        $this->assertSame('photo', $resultAdapter->getMedia());
    }

    public function testGetSource()
    {
        $resultAdapter = new \MphpFlickrPhotosGetSizes\Adapter\Xml\Result\ResultAdapter($this->getResults(), $this->getParameters());
        $this->assertSame('http://farm9.staticflickr.com/8530/8558949624_5d509a7677_s.jpg', $resultAdapter->getSource());
    }

    public function testGetUrl()
    {
        $resultAdapter = new \MphpFlickrPhotosGetSizes\Adapter\Xml\Result\ResultAdapter($this->getResults(), $this->getParameters());
        $this->assertSame('http://www.flickr.com/photos/65448995@N05/8558949624/sizes/sq/', $resultAdapter->getUrl());
    }

    public function testGetWidth()
    {
        $resultAdapter = new \MphpFlickrPhotosGetSizes\Adapter\Xml\Result\ResultAdapter($this->getResults(), $this->getParameters());
        $this->assertSame('75', $resultAdapter->getWidth());
    }


    protected function getParameters()
    {
        return array();
    }

    protected function getResults()
    {
        return '<size label="Square"
          width="75"
          height="75"
          source="http://farm9.staticflickr.com/8530/8558949624_5d509a7677_s.jpg"
          url="http://www.flickr.com/photos/65448995@N05/8558949624/sizes/sq/"
          media="photo"
        />';
    }
}