<?php
/**
 * ResultSetAdapterTest.php
 *
 * PHP Version PHP 5.3.10
 *
 * @category    MphpFlickrPhotosGetSizesTest
 * @package     MphpFlickrPhotosGetSizesTest
 * @subpackage  MphpFlickrPhotosGetSizesTest\Adapter\Xml\ResultSet
 * @author      David White [monkeyphp] <git@monkeyphp.com>
 */
namespace MphpFlickrPhotosGetSizesTest\Adapter\Xml\ResultSet;

use PHPUnit_Framework_TestCase;

/**
 * ResultSetAdapterTest
 *
 * @category    MphpFlickrPhotosGetSizesTest
 * @package     MphpFlickrPhotosGetSizesTest
 * @subpackage  MphpFlickrPhotosGetSizesTest\Adapter\Xml\ResultSet
 * @author      David White [monkeyphp] <git@monkeyphp.com>
 */
class SizesResultSetAdapterTest extends PHPUnit_Framework_TestCase
{

    public function test__construct()
    {
        $results = $this->getResults();
        $parameters = $this->getParameters();

        $resultSetAdapter = new \MphpFlickrPhotosGetSizes\Adapter\Xml\ResultSet\SizesResultSetAdapter($results, $parameters);

        $this->assertSame($results, $resultSetAdapter->getResults());
        $this->assertSame($parameters, $resultSetAdapter->getParameters());
    }

    public function testCanBlog()
    {
        $results = $this->getResults();
        $parameters = $this->getParameters();

        $resultSetAdapter = new \MphpFlickrPhotosGetSizes\Adapter\Xml\ResultSet\SizesResultSetAdapter($results, $parameters);

        $this->assertSame('0', $resultSetAdapter->getCanBlog());
    }

    public function testCanDownload()
    {
        $results = $this->getResults();
        $parameters = $this->getParameters();

        $resultSetAdapter = new \MphpFlickrPhotosGetSizes\Adapter\Xml\ResultSet\SizesResultSetAdapter($results, $parameters);

        $this->assertSame('1', $resultSetAdapter->getCanDownload());
    }


    public function testIterate()
    {
        $results = $this->getResults();
        $parameters = $this->getParameters();

        $resultSetAdapter = new \MphpFlickrPhotosGetSizes\Adapter\Xml\ResultSet\SizesResultSetAdapter($results, $parameters);

        foreach ($resultSetAdapter as $resultAdapter) {
            $this->assertInstanceOf('MphpFlickrPhotosGetSizes\Adapter\Xml\Result\SizeResultAdapter', $resultAdapter);
        }
    }

    public function testCanPrint()
    {
        $results = $this->getResults();
        $parameters = $this->getParameters();

        $resultSetAdapter = new \MphpFlickrPhotosGetSizes\Adapter\Xml\ResultSet\SizesResultSetAdapter($results, $parameters);

        $this->assertSame('0', $resultSetAdapter->getCanPrint());
    }

    protected function getParameters()
    {
        return array(
            'api_key'  => '0123456789',
            'photo_id' => '123451234',
            'method'   => 'photos.flickr.getSizes'
        );
    }

    /**
     * Helper method to load results from file
     *
     * @return string
     */
    protected function getResults()
    {
        $results = file_get_contents('data/resultset.xml');
        return $results;
    }
}