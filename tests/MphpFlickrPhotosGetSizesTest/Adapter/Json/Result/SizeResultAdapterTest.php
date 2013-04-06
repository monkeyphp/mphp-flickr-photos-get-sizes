<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
namespace MphpFlickrPhotosGetSizesTest\Adapter\Json\Result;

/**
 * Description of SizeResultAdapterTest
 *
 * @author David White [monkeyphp] <david@monkeyphp.com>
 */
class SizeResultAdapterTest extends \PHPUnit_Framework_TestCase
{

    public function test__construct()
    {
        $jsonSizeResultAdapter = new \MphpFlickrPhotosGetSizes\Adapter\Json\Result\SizeResultAdapter($this->getResults(), $this->getParameters());
        $this->assertSame($this->getResults(), $jsonSizeResultAdapter->getResults());
        $this->assertSame($this->getParameters(), $jsonSizeResultAdapter->getParameters());
    }

    public function testGetHeight()
    {
        $jsonSizeResultAdapter = new \MphpFlickrPhotosGetSizes\Adapter\Json\Result\SizeResultAdapter($this->getResults(), $this->getParameters());
        $this->assertEquals('75', $jsonSizeResultAdapter->getHeight());
    }

    public function testGetLabel()
    {
        $jsonSizeResultAdapter = new \MphpFlickrPhotosGetSizes\Adapter\Json\Result\SizeResultAdapter($this->getResults(), $this->getParameters());
        $this->assertEquals('Square', $jsonSizeResultAdapter->getLabel());
    }

    public function testGetMedia()
    {
        $jsonSizeResultAdapter = new \MphpFlickrPhotosGetSizes\Adapter\Json\Result\SizeResultAdapter($this->getResults(), $this->getParameters());
        $this->assertEquals('photo', $jsonSizeResultAdapter->getMedia());
    }

    protected function getParameters()
    {
        return array();
    }

    protected function getResults()
    {
        return '{"label":"Square", "width":75, "height":75, "source":"http:\/\/farm9.staticflickr.com\/8530\/8558949624_5d509a7677_s.jpg", "url":"http:\/\/www.flickr.com\/photos\/65448995@N05\/8558949624\/sizes\/sq\/", "media":"photo"}';
    }
}