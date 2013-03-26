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
    
}