<?php
/**
 * SizesResultSetAdapterTest.php
 *
 * PHP Version PHP 5.3.10
 *
 * @category    MphpFlickrPhotosGetSizesTest
 * @package     MphpFlickrPhotosGetSizesTest
 * @subpackage  MphpFlickrPhotosGetSizesTest\Adapter\Json\ResultSet
 * @author      David White [monkeyphp] <git@monkeyphp.com>
 */
namespace MphpFlickrPhotosGetSizesTest\Adapter\Json\ResultSet;

use PHPUnit_Framework_TestCase;

/**
 * SizesResultSetAdapterTest
 *
 * @category    MphpFlickrPhotosGetSizesTest
 * @package     MphpFlickrPhotosGetSizesTest
 * @subpackage  MphpFlickrPhotosGetSizesTest\Adapter\Json\ResultSet
 * @author      David White [monkeyphp] <git@monkeyphp.com>
 */
class SizesResultSetAdapterTest extends PHPUnit_Framework_TestCase
{

    /**
     * Test that we can construct an instance
     */
    public function test__construct()
    {
        $results = $this->getResults();
        $parameters = $this->getParameters();
        $jsonResultSetAdapter = new \MphpFlickrPhotosGetSizes\Adapter\Json\ResultSet\SizesResultSetAdapter($results, $parameters);

        $this->assertSame($results, $jsonResultSetAdapter->getResults());
        $this->assertSame($parameters, $jsonResultSetAdapter->getParameters());
    }

    /**
     * Test that we can retrieve the canBlog value
     */
    public function testGetCanBlog()
    {
        $results = $this->getResults();
        $parameters = $this->getParameters();
        $jsonResultSetAdapter = new \MphpFlickrPhotosGetSizes\Adapter\Json\ResultSet\SizesResultSetAdapter($results, $parameters);

        $this->assertEquals('0', $jsonResultSetAdapter->getCanBlog());
    }

    /**
     * Test that we can retrieve the canDownload value
     */
    public function testCanDownload()
    {
        $results = $this->getResults();
        $parameters = $this->getParameters();
        $jsonResultSetAdapter = new \MphpFlickrPhotosGetSizes\Adapter\Json\ResultSet\SizesResultSetAdapter($results, $parameters);

        $this->assertEquals('1', $jsonResultSetAdapter->getCanDownload());
    }

    /**
     * Test that we can retrieve the canPrint value
     */
    public function testCanPrint()
    {
        $results = $this->getResults();
        $parameters = $this->getParameters();
        $jsonResultSetAdapter = new \MphpFlickrPhotosGetSizes\Adapter\Json\ResultSet\SizesResultSetAdapter($results, $parameters);

        $this->assertEquals('0', $jsonResultSetAdapter->getCanPrint());
    }

    public function testIterate()
    {
        $results = $this->getResults();
        $parameters = $this->getParameters();
        $jsonResultSetAdapter = new \MphpFlickrPhotosGetSizes\Adapter\Json\ResultSet\SizesResultSetAdapter($results, $parameters);

        foreach ($jsonResultSetAdapter as $jsonResultAdapter) {
            $this->assertInstanceOf('MphpFlickrPhotosGetSizes\Adapter\Json\Result\SizeResultAdapter', $jsonResultAdapter);
        }
    }

    /**
     * Helper method
     *
     * @return array
     */
    protected function getParameters()
    {
        return array(
            'photo_id' => '8558949624',
            'method'   => 'photos.flickr.getSizes',
            'api_key'  => '0123456789',
        );
    }

    /**
     * Helper method
     *
     * @return string
     */
    protected function getResults()
    {
        return file_get_contents('data/resultset.json');
    }

}