<?php
/**
 * AdapterFactory.php
 *
 * PHP Version  PHP 5.3.10
 *
 * @category   MphpFlickrPhotosGetSizes
 * @package    MphpFlickrPhotosGetSizes
 * @subpackage MphpFlickrPhotosGetSizes\Adapter\Factory
 * @author     David White [monkeyphp] <git@monkeyphp.com>
 */
namespace MphpFlickrPhotosGetSizes\Adapter\Factory;

/**
 * AdapterFactory
 *
 * @category   MphpFlickrPhotosGetSizes
 * @package    MphpFlickrPhotosGetSizes
 * @subpackage MphpFlickrPhotosGetSizes\Adapter\Factory
 * @author     David White [monkeyphp] <git@monkeyphp.com>
 */
class AdapterFactory implements \MphpFlickrBase\Adapter\Factory\AdapterFactoryInterface
{

    /**
     * An array of formats that this AdapterFactory supports
     *
     * @var array
     */
    protected $formats = array('rest');

    /**
     * The default format
     *
     * @return string
     */
    public function getDefaultFormat()
    {
        return 'rest';
    }

    /**
     * Return an array of available formats that this AdapterFactory supports
     *
     * @return array
     */
    public function getFormats()
    {
        return $this->formats;
    }

    /**
     * Return an AdapterInterface instance
     *
     * @param string $format
     * @param mixed  $results
     * @param array  $parameters
     *
     * @throws \MphpFlickrBase\Exception\UnknownResponseFormatException
     * @return \MphpFlickrPhotosGetSizes\Adapter\Xml\Result\SizesResultAdapter
     */
    public function makeAdapter($format, $results, $parameters)
    {
        switch($format) {
            case 'rest':
                return new \MphpFlickrPhotosGetSizes\Adapter\Xml\ResultSet\SizesResultSetAdapter($results, $parameters);
            default:
                throw new \MphpFlickrBase\Exception\UnknownResponseFormatException();
        }
    }

}