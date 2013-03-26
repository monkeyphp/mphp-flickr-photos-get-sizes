<?php
/**
 * Connector.php
 *
 * PHP Version  PHP 5.3.10
 *
 * @category   MphpFlickrPhotosGetSizes
 * @package    MphpFlickrPhotosGetSizes
 * @subpackage MphpFlickrPhotosGetSizes\Connector
 * @author     David White [monkeyphp] <git@monkeyphp.com>
 */
namespace MphpFlickrPhotosGetSizes\Connector;

/**
 * Connector
 *
 * @category   MphpFlickrPhotosGetSizes
 * @package    MphpFlickrPhotosGetSizes
 * @subpackage MphpFlickrPhotosGetSizes\Connector
 * @author     David White [monkeyphp] <git@monkeyphp.com>
 */
class Connector extends \MphpFlickrBase\Connector\AbstractConnector
{

    /**
     * The method name that this Connector will connect to
     *
     * @var string
     */
    protected $method = 'flickr.photos.getSizes';

    /**
     * The name of the adapter class that a call to dispatch should return
     *
     * @var string
     */
    protected $resultAdapterClass = 'MphpFlickrPhotosGetSizes\Adapter\ResultSet\ResultSet';

    /**
     *
     * @param array $parameters The array of parameters to call the Flickr api
     *
     * @return array
     */
    protected function prepareParameters($parameters = array())
    {
        $parameters = parent::prepareParameters($parameters);

        return $parameters;
    }
    
}