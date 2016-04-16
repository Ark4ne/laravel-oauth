<?php namespace Jenssegers\OAuth\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class OAuth
 *
 * @package Jenssegers\OAuth\Facades
 *          
 * @see \Jenssegers\OAuth\OAuth 
 * @method static \OAuth\Common\Service\AbstractService consumer($service, $url = null, $scope = null, $baseUri = null, $version = null)
 * @method static \OAuth\Common\Service\AbstractService service($service, $url = null, $scope = null, $baseUri = null, $version = null)
 * @method static setHttpClient($client)
 */
class OAuth extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'oauth'; }

}
