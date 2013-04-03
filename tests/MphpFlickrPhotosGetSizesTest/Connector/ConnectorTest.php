<?php
/**
 * ConnectorTest.php
 *
 * PHP Version PHP 5.3.10
 *
 * @category    MphpFlickrPhotosGetSizesTest
 * @package     MphpFlickrPhotosGetSizesTest
 * @subpackage  MphpFlickrPhotosGetSizesTest\Connector
 * @author      David White [monkeyphp] <git@monkeyphp.com>
 */
namespace MphpFlickrPhotosGetSizesTest\Connector;

/**
 * ConnectorTest
 *
 * @category    MphpFlickrPhotosGetSizesTest
 * @package     MphpFlickrPhotosGetSizesTest
 * @subpackage  MphpFlickrPhotosGetSizesTest\Connector
 * @author      David White [monkeyphp] <git@monkeyphp.com>
 */
class ConnectorTest extends \PHPUnit_Framework_TestCase
{

    public function test__construct()
    {
        $connector = new \MphpFlickrPhotosGetSizes\Connector\Connector('01423');
    }

    public function testPrepareParameters()
    {
        $connector = new \MphpFlickrPhotosGetSizes\Connector\Connector('01423');
        $parameters = array('photo_id' => '1234567890');

        $reflectionObject = new \ReflectionObject($connector);
        $reflectionMethod = $reflectionObject->getMethod('prepareParameters');
        $reflectionMethod->setAccessible(true);

        $preparedParameters = $reflectionMethod->invoke($connector, $parameters);
        $this->assertInternalType('array', $preparedParameters);
    }

    /**
     * @expectedException \MphpFlickrBase\Exception\MissingParameterException
     */
    public function testPrepareParametersNoPhotoIdThrowsMissingParameterException()
    {
        $connector = new \MphpFlickrPhotosGetSizes\Connector\Connector('01423');
        $parameters = array();

        $reflectionObject = new \ReflectionObject($connector);
        $reflectionMethod = $reflectionObject->getMethod('prepareParameters');
        $reflectionMethod->setAccessible(true);

        $reflectionMethod->invoke($connector, $parameters);
    }

    /**
     * @expectedException \MphpFlickrBase\Exception\InvalidParameterException
     */
    public function testPrepareParametersInvalidPhotoIdThrowsInvalidParameterException()
    {
        $connector = new \MphpFlickrPhotosGetSizes\Connector\Connector('01423');
        $parameters = array('photo_id' => new \stdClass());

        $reflectionObject = new \ReflectionObject($connector);
        $reflectionMethod = $reflectionObject->getMethod('prepareParameters');
        $reflectionMethod->setAccessible(true);

        $reflectionMethod->invoke($connector, $parameters);
    }

    /**
     * @group dispatch
     */
    public function testDispatch()
    {
        $body = $this->getBody();

        // create a mock http response
        $mockHttpResponse = $this->getMock('Zend\Http\Response', array('getBody'));
        $mockHttpResponse->expects($this->once())
                ->method('getBody')
                ->will($this->returnValue($body));

        // create a mock http client
        $mockHttpClient = $this->getMock('Zend\Http\Client', array('dispatch'));
        $mockHttpClient->expects($this->once())
                ->method('dispatch')
                ->with($this->anything())
                ->will($this->returnValue($mockHttpResponse));

        $connector = new \MphpFlickrPhotosGetSizes\Connector\Connector('01423', $mockHttpClient);
        $parameters = array('photo_id' => '8558949624');

        $adapter = $connector->dispatch($parameters);

        $this->assertInstanceOf('MphpFlickrPhotosGetSizes\Adapter\Xml\ResultSet\SizesResultSetAdapter', $adapter);

        $this->assertSame('0', $adapter->getCanBlog());
        $this->assertSame('0', $adapter->getCanPrint());
        $this->assertSame('1', $adapter->getCanDownload());

        foreach ($adapter as $sizeResultAdapter) {
            $this->assertInstanceOf('MphpFlickrPhotosGetSizes\Adapter\Xml\Result\SizeResultAdapter', $sizeResultAdapter);
//            print $sizeResultAdapter->getLabel();
//            print $sizeResultAdapter->getMedia();
//            print $sizeResultAdapter->getHeight();
//            print $sizeResultAdapter->getSource();
//            print $sizeResultAdapter->getUrl();
//            print $sizeResultAdapter->getWidth();
        }
    }

    protected function getBody()
    {
        return file_get_contents('data/resultset.xml');
    }

}