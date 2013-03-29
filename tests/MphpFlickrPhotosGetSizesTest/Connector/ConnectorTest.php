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

}