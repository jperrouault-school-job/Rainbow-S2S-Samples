<?php
/**
 * PresenceApi
 * PHP version 5
 *
 * @category Class
 * @package  Ale\Rainbow\S2S\Client\S2S
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * S2S api
 *
 * # Rainbow S2S API guide  ## Preamble  ### Introduction  This guide describes a list of API services that are provided by the OT Rainbow S2S portal. This portal is dedicated to S2S features, providing a full REST API for Rainbow features.  ### Protocol  REST interface is used for sending/receiving OT rainbow API messages. HTTP verbs GET, DELETE, POST, PUT, etc. are used. Standard HTTP responses are used to provide requested information or error status. There is no session notion in OT Rainbow system, so requests could be issued according to the stateless model, without transport conservation between them. Additional data could be provided in message body. JSON is used as a main format for data encoding in message body part. Each request is started with the following pattern /{module}/{version}/ where {module} is a portal module name to address and {version} is a version of used API, e.g. “v1.0”.  ### Security considerations  Each request should contain some credential information to authenticate itself. Standard HTTP authentication with basic/bearer modes is used. JSON Web Token mechanism is used to provide authentication information. JWT has a expire timeout that is controlled by OT Rainbow portal to prevent very long token usage. Also authentication with application token is used. The token must be provided in the request HTTP header, using a custom header: APIKey. At server side, token is verified, and if it doesn’t match, 403 Not Allowed response is sent. TLS is used as a transport protocol to support message exchanges between OT Rainbow portal and an application.
 *
 * The version of the OpenAPI document: 1.104.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.2
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Ale\Rainbow\S2S\Client\S2S\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Ale\Rainbow\S2S\Client\S2S\ApiException;
use Ale\Rainbow\S2S\Client\S2S\Configuration;
use Ale\Rainbow\S2S\Client\S2S\HeaderSelector;
use Ale\Rainbow\S2S\Client\S2S\ObjectSerializer;

/**
 * PresenceApi Class Doc Comment
 *
 * @category Class
 * @package  Ale\Rainbow\S2S\Client\S2S
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PresenceApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $host_index (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $host_index = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $host_index;
    }

    /**
     * Set the host index
     *
     * @param  int Host index (required)
     */
    public function setHostIndex($host_index)
    {
        $this->hostIndex = $host_index;
    }

    /**
     * Get the host index
     *
     * @return Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation presenceShow
     *
     * Probe a user's presence
     *
     * @param  string $cnx_id Connection id (required)
     * @param  string $user_id User id (required)
     *
     * @throws \Ale\Rainbow\S2S\Client\S2S\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Ale\Rainbow\S2S\Client\S2S\Model\Presence
     */
    public function presenceShow($cnx_id, $user_id)
    {
        list($response) = $this->presenceShowWithHttpInfo($cnx_id, $user_id);
        return $response;
    }

    /**
     * Operation presenceShowWithHttpInfo
     *
     * Probe a user's presence
     *
     * @param  string $cnx_id Connection id (required)
     * @param  string $user_id User id (required)
     *
     * @throws \Ale\Rainbow\S2S\Client\S2S\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Ale\Rainbow\S2S\Client\S2S\Model\Presence, HTTP status code, HTTP response headers (array of strings)
     */
    public function presenceShowWithHttpInfo($cnx_id, $user_id)
    {
        $request = $this->presenceShowRequest($cnx_id, $user_id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\Ale\Rainbow\S2S\Client\S2S\Model\Presence' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Ale\Rainbow\S2S\Client\S2S\Model\Presence', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Ale\Rainbow\S2S\Client\S2S\Model\Presence';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Ale\Rainbow\S2S\Client\S2S\Model\Presence',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation presenceShowAsync
     *
     * Probe a user's presence
     *
     * @param  string $cnx_id Connection id (required)
     * @param  string $user_id User id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function presenceShowAsync($cnx_id, $user_id)
    {
        return $this->presenceShowAsyncWithHttpInfo($cnx_id, $user_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation presenceShowAsyncWithHttpInfo
     *
     * Probe a user's presence
     *
     * @param  string $cnx_id Connection id (required)
     * @param  string $user_id User id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function presenceShowAsyncWithHttpInfo($cnx_id, $user_id)
    {
        $returnType = '\Ale\Rainbow\S2S\Client\S2S\Model\Presence';
        $request = $this->presenceShowRequest($cnx_id, $user_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'presenceShow'
     *
     * @param  string $cnx_id Connection id (required)
     * @param  string $user_id User id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function presenceShowRequest($cnx_id, $user_id)
    {
        // verify the required parameter 'cnx_id' is set
        if ($cnx_id === null || (is_array($cnx_id) && count($cnx_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $cnx_id when calling presenceShow'
            );
        }
        // verify the required parameter 'user_id' is set
        if ($user_id === null || (is_array($user_id) && count($user_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $user_id when calling presenceShow'
            );
        }

        $resourcePath = '/api/rainbow/ucs/v1.0/connections/{cnxId}/presences/{userId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($cnx_id !== null) {
            $resourcePath = str_replace(
                '{' . 'cnxId' . '}',
                ObjectSerializer::toPathValue($cnx_id),
                $resourcePath
            );
        }
        // path params
        if ($user_id !== null) {
            $resourcePath = str_replace(
                '{' . 'userId' . '}',
                ObjectSerializer::toPathValue($user_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation presenceUpdate
     *
     * Set the user's presence
     *
     * @param  string $cnx_id Connection id (required)
     * @param  \Ale\Rainbow\S2S\Client\S2S\Model\PresenceUpdate $presence_update Presence data (optional)
     *
     * @throws \Ale\Rainbow\S2S\Client\S2S\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function presenceUpdate($cnx_id, $presence_update = null)
    {
        $this->presenceUpdateWithHttpInfo($cnx_id, $presence_update);
    }

    /**
     * Operation presenceUpdateWithHttpInfo
     *
     * Set the user's presence
     *
     * @param  string $cnx_id Connection id (required)
     * @param  \Ale\Rainbow\S2S\Client\S2S\Model\PresenceUpdate $presence_update Presence data (optional)
     *
     * @throws \Ale\Rainbow\S2S\Client\S2S\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function presenceUpdateWithHttpInfo($cnx_id, $presence_update = null)
    {
        $request = $this->presenceUpdateRequest($cnx_id, $presence_update);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation presenceUpdateAsync
     *
     * Set the user's presence
     *
     * @param  string $cnx_id Connection id (required)
     * @param  \Ale\Rainbow\S2S\Client\S2S\Model\PresenceUpdate $presence_update Presence data (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function presenceUpdateAsync($cnx_id, $presence_update = null)
    {
        return $this->presenceUpdateAsyncWithHttpInfo($cnx_id, $presence_update)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation presenceUpdateAsyncWithHttpInfo
     *
     * Set the user's presence
     *
     * @param  string $cnx_id Connection id (required)
     * @param  \Ale\Rainbow\S2S\Client\S2S\Model\PresenceUpdate $presence_update Presence data (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function presenceUpdateAsyncWithHttpInfo($cnx_id, $presence_update = null)
    {
        $returnType = '';
        $request = $this->presenceUpdateRequest($cnx_id, $presence_update);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'presenceUpdate'
     *
     * @param  string $cnx_id Connection id (required)
     * @param  \Ale\Rainbow\S2S\Client\S2S\Model\PresenceUpdate $presence_update Presence data (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function presenceUpdateRequest($cnx_id, $presence_update = null)
    {
        // verify the required parameter 'cnx_id' is set
        if ($cnx_id === null || (is_array($cnx_id) && count($cnx_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $cnx_id when calling presenceUpdate'
            );
        }

        $resourcePath = '/api/rainbow/ucs/v1.0/connections/{cnxId}/presences';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($cnx_id !== null) {
            $resourcePath = str_replace(
                '{' . 'cnxId' . '}',
                ObjectSerializer::toPathValue($cnx_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($presence_update)) {
            $_tempBody = $presence_update;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'PUT',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
