<?php
/**
 * ResultSetTest.php
 *
 * PHP Version PHP 5.3.10
 *
 * @category    MphpFlickrPhotosGetSizesTest
 * @package     MphpFlickrPhotosGetSizesTest
 * @subpackage  MphpFlickrPhotosGetSizesTest\ResultSet
 * @author      David White [monkeyphp] <git@monkeyphp.com>
 */
namespace MphpFlickrPhotosGetSizesTest\ResultSet;

use PHPUnit_Framework_TestCase;

/**
 * ResultSetTest
 *
 * @category    MphpFlickrPhotosGetSizesTest
 * @package     MphpFlickrPhotosGetSizesTest
 * @subpackage  MphpFlickrPhotosGetSizesTest\ResultSet
 * @author      David White [monkeyphp] <git@monkeyphp.com>
 */
class ResultSetTest extends PHPUnit_Framework_TestCase
{

    public function test__construct()
    {
        $resultSet = new \MphpFlickrPhotosGetSizes\ResultSet\ResultSet($this->getResultSetAdapter());
    }
    
    /**
     * @expectedException InvalidArgumentException
     */
    public function testInvalidAdapterThrowsException()
    {
        $adapter = $this->getMock('\MphpFlickrBase\Adapter\Interfaces\ResultSet\ResultSetAdapterInterface');
        $this->assertInstanceOf('\MphpFlickrBase\Adapter\Interfaces\ResultSet\ResultSetAdapterInterface', $adapter);
        $this->assertNotInstanceOf('\MphpFlickrPhotosGetSizes\Adapter\Interfaces\ResultSet\ResultSetAdapterInterface', $adapter);

        $resultSet = new \MphpFlickrPhotosGetSizes\ResultSet\ResultSet($adapter);
    }

    public function testGetCanBlog()
    {
        $resultSet = new \MphpFlickrPhotosGetSizes\ResultSet\ResultSet($this->getResultSetAdapter());
        $this->assertFalse($resultSet->getCanBlog());
    }

    public function testGetCanPrint()
    {
        $resultSet = new \MphpFlickrPhotosGetSizes\ResultSet\ResultSet($this->getResultSetAdapter());
        $this->assertFalse($resultSet->getCanPrint());
    }

    public function testGetCanDownload()
    {
        $resultSet = new \MphpFlickrPhotosGetSizes\ResultSet\ResultSet($this->getResultSetAdapter());
        $this->assertTrue($resultSet->getCanDownload());
    }

    /**
     * Helper method to create a ResultSetAdapter
     */
    protected function getResultSetAdapter()
    {
        $resultSetAdapter = new \MphpFlickrPhotosGetSizes\Adapter\Xml\ResultSet\ResultSetAdapter($this->getResults(), $this->getParameters());
        return $resultSetAdapter;
    }

    /**
     * Helper method
     *
     * @return array
     */
    protected function getParameters()
    {
        return array(
            'method'   => 'flickr.photos.search',
            'photo_id' => '8558949624'
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