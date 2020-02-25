<?php
/**
 * OidcClientApi
 * PHP version 5
 *
 * @category Class
 * @package  Ale\Rainbow\S2S\Client\AuthPortal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Rainbow authentication portal
 *
 * # Rainbow authentication portal API guide  ## Preamble  [Download Postman collection][0]  ### Introduction  This guide describes list of API services that are provided by OT Rainbow authentication portal system. Services are used to manage OT Rainbow authentication.  ### Protocol  REST interface is used for sending/receiving OT rainbow API messages.   HTTP request GET is used. Standard HTTP responses are used to provide requested information or error status. There is no session notion in OT Rainbow system, so requests could be issued according stateless model, without transport conservation between them.   JSON is used as a main format for data encoding in message body part. Each request is started with the following pattern /{module}/{version}/ where {module} is a portal module name to address and {version} is a version of used API, par example, “v1.0”.  ### Security considerations  Each request should contain some credential information to authenticate itself. Standard HTTP authentication with basic/bearer modes is used. JSON Web Token mechanism is used to provide authentication information. JWT has a expire timeout that is controlled by OT Rainbow portal to prevent very long token usage. Also authentication with application token is used. The token must be provided in the request HTTP header, using a custom header: APIKey. At server side, token is verified, and if it doesn’t match, 403 Not Allowed response is sent. TLS is used as a transport protocol to support message exchanges between OT Rainbow portal and an application.    [0]: AuthenticationPortalServer_postman.json
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

namespace Ale\Rainbow\S2S\Client\AuthPortal\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Ale\Rainbow\S2S\Client\AuthPortal\ApiException;
use Ale\Rainbow\S2S\Client\AuthPortal\Configuration;
use Ale\Rainbow\S2S\Client\AuthPortal\HeaderSelector;
use Ale\Rainbow\S2S\Client\AuthPortal\ObjectSerializer;

/**
 * OidcClientApi Class Doc Comment
 *
 * @category Class
 * @package  Ale\Rainbow\S2S\Client\AuthPortal
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OidcClientApi
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
     * Operation getJwt
     *
     * Get a JWT from an id_token
     *
     * @param  string $content_type application/x-www-form-urlencoded (required)
     * @param  string $x_rainbow_app_auth Basic &lt;base64encode(appId:sha256(appSecretchallenge))&gt; &lt;br/&gt; Concatenation of appSecret and provided challenge, hashed with sha256. (required)
     * @param  string $accept application/json (required)
     * @param  string $id_token The id_token obtained from the OIDC provider (required)
     * @param  string $challenge challenge for application authentication. &lt;br/&gt; This value can be retrieve using GET /api/rainbow/authentication/v1.0/urls?uid&#x3D;user1@company.com, or be randomly generated by the application. (required)
     * @param  string $nonce If provided, the nonce value (provided by application to OIDC provider when requesting the id_token using implicit flow) is validated to have the same value in the decoded id_token (optional)
     *
     * @throws \Ale\Rainbow\S2S\Client\AuthPortal\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Ale\Rainbow\S2S\Client\AuthPortal\Model\GetJwtSuccess
     */
    public function getJwt($content_type, $x_rainbow_app_auth, $accept, $id_token, $challenge, $nonce = null)
    {
        list($response) = $this->getJwtWithHttpInfo($content_type, $x_rainbow_app_auth, $accept, $id_token, $challenge, $nonce);
        return $response;
    }

    /**
     * Operation getJwtWithHttpInfo
     *
     * Get a JWT from an id_token
     *
     * @param  string $content_type application/x-www-form-urlencoded (required)
     * @param  string $x_rainbow_app_auth Basic &lt;base64encode(appId:sha256(appSecretchallenge))&gt; &lt;br/&gt; Concatenation of appSecret and provided challenge, hashed with sha256. (required)
     * @param  string $accept application/json (required)
     * @param  string $id_token The id_token obtained from the OIDC provider (required)
     * @param  string $challenge challenge for application authentication. &lt;br/&gt; This value can be retrieve using GET /api/rainbow/authentication/v1.0/urls?uid&#x3D;user1@company.com, or be randomly generated by the application. (required)
     * @param  string $nonce If provided, the nonce value (provided by application to OIDC provider when requesting the id_token using implicit flow) is validated to have the same value in the decoded id_token (optional)
     *
     * @throws \Ale\Rainbow\S2S\Client\AuthPortal\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Ale\Rainbow\S2S\Client\AuthPortal\Model\GetJwtSuccess, HTTP status code, HTTP response headers (array of strings)
     */
    public function getJwtWithHttpInfo($content_type, $x_rainbow_app_auth, $accept, $id_token, $challenge, $nonce = null)
    {
        $request = $this->getJwtRequest($content_type, $x_rainbow_app_auth, $accept, $id_token, $challenge, $nonce);

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
                    if ('\Ale\Rainbow\S2S\Client\AuthPortal\Model\GetJwtSuccess' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Ale\Rainbow\S2S\Client\AuthPortal\Model\GetJwtSuccess', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Ale\Rainbow\S2S\Client\AuthPortal\Model\GetJwtSuccess';
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
                        '\Ale\Rainbow\S2S\Client\AuthPortal\Model\GetJwtSuccess',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getJwtAsync
     *
     * Get a JWT from an id_token
     *
     * @param  string $content_type application/x-www-form-urlencoded (required)
     * @param  string $x_rainbow_app_auth Basic &lt;base64encode(appId:sha256(appSecretchallenge))&gt; &lt;br/&gt; Concatenation of appSecret and provided challenge, hashed with sha256. (required)
     * @param  string $accept application/json (required)
     * @param  string $id_token The id_token obtained from the OIDC provider (required)
     * @param  string $challenge challenge for application authentication. &lt;br/&gt; This value can be retrieve using GET /api/rainbow/authentication/v1.0/urls?uid&#x3D;user1@company.com, or be randomly generated by the application. (required)
     * @param  string $nonce If provided, the nonce value (provided by application to OIDC provider when requesting the id_token using implicit flow) is validated to have the same value in the decoded id_token (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getJwtAsync($content_type, $x_rainbow_app_auth, $accept, $id_token, $challenge, $nonce = null)
    {
        return $this->getJwtAsyncWithHttpInfo($content_type, $x_rainbow_app_auth, $accept, $id_token, $challenge, $nonce)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getJwtAsyncWithHttpInfo
     *
     * Get a JWT from an id_token
     *
     * @param  string $content_type application/x-www-form-urlencoded (required)
     * @param  string $x_rainbow_app_auth Basic &lt;base64encode(appId:sha256(appSecretchallenge))&gt; &lt;br/&gt; Concatenation of appSecret and provided challenge, hashed with sha256. (required)
     * @param  string $accept application/json (required)
     * @param  string $id_token The id_token obtained from the OIDC provider (required)
     * @param  string $challenge challenge for application authentication. &lt;br/&gt; This value can be retrieve using GET /api/rainbow/authentication/v1.0/urls?uid&#x3D;user1@company.com, or be randomly generated by the application. (required)
     * @param  string $nonce If provided, the nonce value (provided by application to OIDC provider when requesting the id_token using implicit flow) is validated to have the same value in the decoded id_token (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getJwtAsyncWithHttpInfo($content_type, $x_rainbow_app_auth, $accept, $id_token, $challenge, $nonce = null)
    {
        $returnType = '\Ale\Rainbow\S2S\Client\AuthPortal\Model\GetJwtSuccess';
        $request = $this->getJwtRequest($content_type, $x_rainbow_app_auth, $accept, $id_token, $challenge, $nonce);

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
     * Create request for operation 'getJwt'
     *
     * @param  string $content_type application/x-www-form-urlencoded (required)
     * @param  string $x_rainbow_app_auth Basic &lt;base64encode(appId:sha256(appSecretchallenge))&gt; &lt;br/&gt; Concatenation of appSecret and provided challenge, hashed with sha256. (required)
     * @param  string $accept application/json (required)
     * @param  string $id_token The id_token obtained from the OIDC provider (required)
     * @param  string $challenge challenge for application authentication. &lt;br/&gt; This value can be retrieve using GET /api/rainbow/authentication/v1.0/urls?uid&#x3D;user1@company.com, or be randomly generated by the application. (required)
     * @param  string $nonce If provided, the nonce value (provided by application to OIDC provider when requesting the id_token using implicit flow) is validated to have the same value in the decoded id_token (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getJwtRequest($content_type, $x_rainbow_app_auth, $accept, $id_token, $challenge, $nonce = null)
    {
        // verify the required parameter 'content_type' is set
        if ($content_type === null || (is_array($content_type) && count($content_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_type when calling getJwt'
            );
        }
        // verify the required parameter 'x_rainbow_app_auth' is set
        if ($x_rainbow_app_auth === null || (is_array($x_rainbow_app_auth) && count($x_rainbow_app_auth) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $x_rainbow_app_auth when calling getJwt'
            );
        }
        // verify the required parameter 'accept' is set
        if ($accept === null || (is_array($accept) && count($accept) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $accept when calling getJwt'
            );
        }
        // verify the required parameter 'id_token' is set
        if ($id_token === null || (is_array($id_token) && count($id_token) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id_token when calling getJwt'
            );
        }
        // verify the required parameter 'challenge' is set
        if ($challenge === null || (is_array($challenge) && count($challenge) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $challenge when calling getJwt'
            );
        }

        $resourcePath = '/api/rainbow/authentication/v1.0/oidc-client/jwt';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($id_token !== null) {
            $queryParams['id_token'] = ObjectSerializer::toQueryValue($id_token);
        }
        // query params
        if ($nonce !== null) {
            $queryParams['nonce'] = ObjectSerializer::toQueryValue($nonce);
        }
        // query params
        if ($challenge !== null) {
            $queryParams['challenge'] = ObjectSerializer::toQueryValue($challenge);
        }
        // header params
        if ($content_type !== null) {
            $headerParams['content-type'] = ObjectSerializer::toHeaderValue($content_type);
        }
        // header params
        if ($x_rainbow_app_auth !== null) {
            $headerParams['x-rainbow-app-auth'] = ObjectSerializer::toHeaderValue($x_rainbow_app_auth);
        }
        // header params
        if ($accept !== null) {
            $headerParams['accept'] = ObjectSerializer::toHeaderValue($accept);
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
     * Operation getOidcLogin
     *
     * Initiate an OIDC authentication
     *
     * @param  string $company_id User company identifier &lt;br/&gt; This value is automatically set in the loginUrl which can be retrieved using [GET /api/rainbow/authentication/v1.0/urls?uid&#x3D;user1@company.com](#api-Authentication_Urls-GetLoginUrl) (required)
     * @param  string $challenge Challenge for application authentication &lt;br/&gt; This value can be retrieved using [GET /api/rainbow/authentication/v1.0/urls?uid&#x3D;user1@company.com](#api-Authentication_Urls-GetLoginUrl) (required)
     * @param  string $x_rainbow_app_auth Application authentication &lt;br/&gt; It has to be computed as follow: &lt;base64encode(appId:sha256(appSecretchallenge))&gt; (concatenation of appSecret and challenge, hashed with sha256). &lt;br/&gt; The challenge used to compute the &#x60;x-rainbow-app-auth&#x60; value must be the same than the one provided in query parameter &#x60;challenge&#x60;. (required)
     *
     * @throws \Ale\Rainbow\S2S\Client\AuthPortal\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Ale\Rainbow\S2S\Client\AuthPortal\Model\GetOidcLoginSuccess
     */
    public function getOidcLogin($company_id, $challenge, $x_rainbow_app_auth)
    {
        list($response) = $this->getOidcLoginWithHttpInfo($company_id, $challenge, $x_rainbow_app_auth);
        return $response;
    }

    /**
     * Operation getOidcLoginWithHttpInfo
     *
     * Initiate an OIDC authentication
     *
     * @param  string $company_id User company identifier &lt;br/&gt; This value is automatically set in the loginUrl which can be retrieved using [GET /api/rainbow/authentication/v1.0/urls?uid&#x3D;user1@company.com](#api-Authentication_Urls-GetLoginUrl) (required)
     * @param  string $challenge Challenge for application authentication &lt;br/&gt; This value can be retrieved using [GET /api/rainbow/authentication/v1.0/urls?uid&#x3D;user1@company.com](#api-Authentication_Urls-GetLoginUrl) (required)
     * @param  string $x_rainbow_app_auth Application authentication &lt;br/&gt; It has to be computed as follow: &lt;base64encode(appId:sha256(appSecretchallenge))&gt; (concatenation of appSecret and challenge, hashed with sha256). &lt;br/&gt; The challenge used to compute the &#x60;x-rainbow-app-auth&#x60; value must be the same than the one provided in query parameter &#x60;challenge&#x60;. (required)
     *
     * @throws \Ale\Rainbow\S2S\Client\AuthPortal\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Ale\Rainbow\S2S\Client\AuthPortal\Model\GetOidcLoginSuccess, HTTP status code, HTTP response headers (array of strings)
     */
    public function getOidcLoginWithHttpInfo($company_id, $challenge, $x_rainbow_app_auth)
    {
        $request = $this->getOidcLoginRequest($company_id, $challenge, $x_rainbow_app_auth);

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
                    if ('\Ale\Rainbow\S2S\Client\AuthPortal\Model\GetOidcLoginSuccess' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Ale\Rainbow\S2S\Client\AuthPortal\Model\GetOidcLoginSuccess', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Ale\Rainbow\S2S\Client\AuthPortal\Model\GetOidcLoginSuccess';
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
                        '\Ale\Rainbow\S2S\Client\AuthPortal\Model\GetOidcLoginSuccess',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getOidcLoginAsync
     *
     * Initiate an OIDC authentication
     *
     * @param  string $company_id User company identifier &lt;br/&gt; This value is automatically set in the loginUrl which can be retrieved using [GET /api/rainbow/authentication/v1.0/urls?uid&#x3D;user1@company.com](#api-Authentication_Urls-GetLoginUrl) (required)
     * @param  string $challenge Challenge for application authentication &lt;br/&gt; This value can be retrieved using [GET /api/rainbow/authentication/v1.0/urls?uid&#x3D;user1@company.com](#api-Authentication_Urls-GetLoginUrl) (required)
     * @param  string $x_rainbow_app_auth Application authentication &lt;br/&gt; It has to be computed as follow: &lt;base64encode(appId:sha256(appSecretchallenge))&gt; (concatenation of appSecret and challenge, hashed with sha256). &lt;br/&gt; The challenge used to compute the &#x60;x-rainbow-app-auth&#x60; value must be the same than the one provided in query parameter &#x60;challenge&#x60;. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOidcLoginAsync($company_id, $challenge, $x_rainbow_app_auth)
    {
        return $this->getOidcLoginAsyncWithHttpInfo($company_id, $challenge, $x_rainbow_app_auth)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getOidcLoginAsyncWithHttpInfo
     *
     * Initiate an OIDC authentication
     *
     * @param  string $company_id User company identifier &lt;br/&gt; This value is automatically set in the loginUrl which can be retrieved using [GET /api/rainbow/authentication/v1.0/urls?uid&#x3D;user1@company.com](#api-Authentication_Urls-GetLoginUrl) (required)
     * @param  string $challenge Challenge for application authentication &lt;br/&gt; This value can be retrieved using [GET /api/rainbow/authentication/v1.0/urls?uid&#x3D;user1@company.com](#api-Authentication_Urls-GetLoginUrl) (required)
     * @param  string $x_rainbow_app_auth Application authentication &lt;br/&gt; It has to be computed as follow: &lt;base64encode(appId:sha256(appSecretchallenge))&gt; (concatenation of appSecret and challenge, hashed with sha256). &lt;br/&gt; The challenge used to compute the &#x60;x-rainbow-app-auth&#x60; value must be the same than the one provided in query parameter &#x60;challenge&#x60;. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOidcLoginAsyncWithHttpInfo($company_id, $challenge, $x_rainbow_app_auth)
    {
        $returnType = '\Ale\Rainbow\S2S\Client\AuthPortal\Model\GetOidcLoginSuccess';
        $request = $this->getOidcLoginRequest($company_id, $challenge, $x_rainbow_app_auth);

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
     * Create request for operation 'getOidcLogin'
     *
     * @param  string $company_id User company identifier &lt;br/&gt; This value is automatically set in the loginUrl which can be retrieved using [GET /api/rainbow/authentication/v1.0/urls?uid&#x3D;user1@company.com](#api-Authentication_Urls-GetLoginUrl) (required)
     * @param  string $challenge Challenge for application authentication &lt;br/&gt; This value can be retrieved using [GET /api/rainbow/authentication/v1.0/urls?uid&#x3D;user1@company.com](#api-Authentication_Urls-GetLoginUrl) (required)
     * @param  string $x_rainbow_app_auth Application authentication &lt;br/&gt; It has to be computed as follow: &lt;base64encode(appId:sha256(appSecretchallenge))&gt; (concatenation of appSecret and challenge, hashed with sha256). &lt;br/&gt; The challenge used to compute the &#x60;x-rainbow-app-auth&#x60; value must be the same than the one provided in query parameter &#x60;challenge&#x60;. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getOidcLoginRequest($company_id, $challenge, $x_rainbow_app_auth)
    {
        // verify the required parameter 'company_id' is set
        if ($company_id === null || (is_array($company_id) && count($company_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $company_id when calling getOidcLogin'
            );
        }
        // verify the required parameter 'challenge' is set
        if ($challenge === null || (is_array($challenge) && count($challenge) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $challenge when calling getOidcLogin'
            );
        }
        // verify the required parameter 'x_rainbow_app_auth' is set
        if ($x_rainbow_app_auth === null || (is_array($x_rainbow_app_auth) && count($x_rainbow_app_auth) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $x_rainbow_app_auth when calling getOidcLogin'
            );
        }

        $resourcePath = '/api/rainbow/authentication/v1.0/oidc-client/login';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($company_id !== null) {
            $queryParams['companyId'] = ObjectSerializer::toQueryValue($company_id);
        }
        // query params
        if ($challenge !== null) {
            $queryParams['challenge'] = ObjectSerializer::toQueryValue($challenge);
        }
        // query params
        if ($x_rainbow_app_auth !== null) {
            $queryParams['x-rainbow-app-auth'] = ObjectSerializer::toQueryValue($x_rainbow_app_auth);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'application/unknown']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'application/unknown'],
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
