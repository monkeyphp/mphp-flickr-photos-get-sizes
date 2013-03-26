<?php
/**
 * ResultSet.php
 *
 * PHP Version PHP 5.3.10
 *
 * @category    MphpFlickrPhotosGetSizesTest
 * @package     MphpFlickrPhotosGetSizesTest
 * @subpackage  MphpFlickrPhotosGetSizesTest\Result
 * @author      David White [monkeyphp] <git@monkeyphp.com>
 */
namespace MphpFlickrPhotosGetSizesTest\Result;

use PHPUnit_Framework_TestCase;

/**
 * ResultTest
 *
 * @category    MphpFlickrPhotosGetSizesTest
 * @package     MphpFlickrPhotosGetSizesTest
 * @subpackage  MphpFlickrPhotosGetSizesTest\Result
 * @author      David White [monkeyphp] <git@monkeyphp.com>
 */
class ResultTest extends PHPUnit_Framework_TestCase
{

    /**
     * Test that we can construct an instance of Result
     */
    public function test__construct()
    {
        $resultAdapter = $this->getResultAdapter();
        $result = new \MphpFlickrPhotosGetSizes\Result\Result($resultAdapter);

        $this->assertSame($resultAdapter, $result->getAdapter());
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function test__constructThrowsInvalidArgumentException()
    {
        $mockAdapter = $this->getMock('MphpFlickrBase\Adapter\Interfaces\Result\ResultAdapterInterface');
        $result = new \MphpFlickrPhotosGetSizes\Result\Result($mockAdapter);
    }

    public function testGetLabel()
    {
        $resultAdapter = $this->getResultAdapter();
        $result = new \MphpFlickrPhotosGetSizes\Result\Result($resultAdapter);

        $this->assertSame($result->getLabel(), $resultAdapter->getLabel());
    }

    public function testGetWidth()
    {
        $resultAdapter = $this->getResultAdapter();
        $result = new \MphpFlickrPhotosGetSizes\Result\Result($resultAdapter);

        $this->assertEquals($result->getWidth(), $resultAdapter->getWidth());
    }

    public function testGetHeight()
    {
        $resultAdapter = $this->getResultAdapter();
        $result = new \MphpFlickrPhotosGetSizes\Result\Result($resultAdapter);

        $this->assertEquals($result->getHeight(), $resultAdapter->getHeight());
    }

    public function testGetMedia()
    {
        $resultAdapter = $this->getResultAdapter();
        $result = new \MphpFlickrPhotosGetSizes\Result\Result($resultAdapter);

        $this->assertSame($result->getMedia(), $resultAdapter->getMedia());
    }

    public function testGetSource()
    {
        $resultAdapter = $this->getResultAdapter();
        $result = new \MphpFlickrPhotosGetSizes\Result\Result($resultAdapter);

        $this->assertSame($result->getSource(), $resultAdapter->getSource());
    }

    public function testGetUrl()
    {
        $resultAdapter = $this->getResultAdapter();
        $result = new \MphpFlickrPhotosGetSizes\Result\Result($resultAdapter);

        $this->assertSame($result->getUrl(), $resultAdapter->getUrl());
    }

    protected function getResultAdapter()
    {
        $resultAdapter = new \MphpFlickrPhotosGetSizes\Adapter\Xml\Result\ResultAdapter($this->getResults(), $this->getParameters());
        return $resultAdapter;
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