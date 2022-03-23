<?php

namespace RoRdb;

if (\class_exists('RoRdb\\Google_Client', \false)) {
    // Prevent error with preloading in PHP 7.4
    // @see https://github.com/googleapis/google-api-php-client/issues/1976
    return;
}
$classMap = ['RoRdb\\Google\\Client' => 'Google_Client', 'RoRdb\\Google\\Service' => 'Google_Service', 'RoRdb\\Google\\AccessToken\\Revoke' => 'Google_AccessToken_Revoke', 'RoRdb\\Google\\AccessToken\\Verify' => 'Google_AccessToken_Verify', 'RoRdb\\Google\\Model' => 'Google_Model', 'RoRdb\\Google\\Utils\\UriTemplate' => 'Google_Utils_UriTemplate', 'RoRdb\\Google\\AuthHandler\\Guzzle6AuthHandler' => 'Google_AuthHandler_Guzzle6AuthHandler', 'RoRdb\\Google\\AuthHandler\\Guzzle7AuthHandler' => 'Google_AuthHandler_Guzzle7AuthHandler', 'RoRdb\\Google\\AuthHandler\\Guzzle5AuthHandler' => 'Google_AuthHandler_Guzzle5AuthHandler', 'RoRdb\\Google\\AuthHandler\\AuthHandlerFactory' => 'Google_AuthHandler_AuthHandlerFactory', 'RoRdb\\Google\\Http\\Batch' => 'Google_Http_Batch', 'RoRdb\\Google\\Http\\MediaFileUpload' => 'Google_Http_MediaFileUpload', 'RoRdb\\Google\\Http\\REST' => 'Google_Http_REST', 'RoRdb\\Google\\Task\\Retryable' => 'Google_Task_Retryable', 'RoRdb\\Google\\Task\\Exception' => 'Google_Task_Exception', 'RoRdb\\Google\\Task\\Runner' => 'Google_Task_Runner', 'RoRdb\\Google\\Collection' => 'Google_Collection', 'RoRdb\\Google\\Service\\Exception' => 'Google_Service_Exception', 'RoRdb\\Google\\Service\\Resource' => 'Google_Service_Resource', 'RoRdb\\Google\\Exception' => 'Google_Exception'];
foreach ($classMap as $class => $alias) {
    \class_alias($class, $alias);
}
/**
 * This class needs to be defined explicitly as scripts must be recognized by
 * the autoloader.
 */
class Google_Task_Composer extends \RoRdb\Google\Task\Composer
{
}
if (\false) {
    class Google_AccessToken_Revoke extends \RoRdb\Google\AccessToken\Revoke
    {
    }
    class Google_AccessToken_Verify extends \RoRdb\Google\AccessToken\Verify
    {
    }
    class Google_AuthHandler_AuthHandlerFactory extends \RoRdb\Google\AuthHandler\AuthHandlerFactory
    {
    }
    class Google_AuthHandler_Guzzle5AuthHandler extends \RoRdb\Google\AuthHandler\Guzzle5AuthHandler
    {
    }
    class Google_AuthHandler_Guzzle6AuthHandler extends \RoRdb\Google\AuthHandler\Guzzle6AuthHandler
    {
    }
    class Google_AuthHandler_Guzzle7AuthHandler extends \RoRdb\Google\AuthHandler\Guzzle7AuthHandler
    {
    }
    class Google_Client extends \RoRdb\Google\Client
    {
    }
    class Google_Collection extends \RoRdb\Google\Collection
    {
    }
    class Google_Exception extends \RoRdb\Google\Exception
    {
    }
    class Google_Http_Batch extends \RoRdb\Google\Http\Batch
    {
    }
    class Google_Http_MediaFileUpload extends \RoRdb\Google\Http\MediaFileUpload
    {
    }
    class Google_Http_REST extends \RoRdb\Google\Http\REST
    {
    }
    class Google_Model extends \RoRdb\Google\Model
    {
    }
    class Google_Service extends \RoRdb\Google\Service
    {
    }
    class Google_Service_Exception extends \RoRdb\Google\Service\Exception
    {
    }
    class Google_Service_Resource extends \RoRdb\Google\Service\Resource
    {
    }
    class Google_Task_Exception extends \RoRdb\Google\Task\Exception
    {
    }
    interface Google_Task_Retryable extends \RoRdb\Google\Task\Retryable
    {
    }
    class Google_Task_Runner extends \RoRdb\Google\Task\Runner
    {
    }
    class Google_Utils_UriTemplate extends \RoRdb\Google\Utils\UriTemplate
    {
    }
}
