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
     * The url parameter for photo id
     *
     * @var string
     */
    protected $argumentPhotoId = 'photo_id';

    /**
     * Return the photo argument string
     *
     * @return string
     */
    protected function getArgumentPhotoId()
    {
        return $this->argumentPhotoId;
    }

    /**
     * The flickr.photos.getSizes method required an api_key, a method and a photo_id
     * value.
     *
     * {@link http://www.flickr.com/services/api/flickr.photos.getSizes.html}
     *
     * @param array $parameters The array of parameters to call the Flickr api with
     *
     * @throws \MphpFlickrBase\Exception\MissingParameterException
     * @return array
     */
    protected function prepareParameters($parameters = array())
    {
        // call parent prepare parameters
        $parameters = parent::prepareParameters($parameters);

        // validate the photo_id value
        if (empty($parameters[$this->getArgumentPhotoId()])) {
            throw new \MphpFlickrBase\Exception\MissingParameterException($this->getArgumentPhotoId() . ' parameter is required');
        }
        if (false === $this->validatePhotoId($parameters[$this->getArgumentPhotoId()])) {
            throw new \MphpFlickrBase\Exception\InvalidParameterException();
        }

        // return the parameters
        return $parameters;
    }

    /**
     * Validate the supplied photo id value
     *
     * @param mixed $photoId
     *
     * @return boolean
     */
    protected function validatePhotoId($value)
    {
        return (is_string($value));
    }

}