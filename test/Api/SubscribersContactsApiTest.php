<?php
/**
 * SubscribersContactsApiTest
 * PHP version 7.4
 *
 * @category Class
 * @package  Segnivo\SDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Segnivo Developer API
 *
 * **API Version**: 1.7  **Date**: 9th July, 2024  ## 📄 Getting Started  This API is based on the REST API architecture, allowing the user to easily manage their data with this resource-based approach.  Every API call is established on which specific request type (GET, POST, PUT, DELETE) will be used.  The API must not be abused and should be used within acceptable limits.  To start using this API, you will need not create or access an existing Segnivo account to obtain your API key ([retrievable from your account settings](https://messaging.segnivo.com/account/api)).  - You must use a valid API Key to send requests to the API endpoints.      - The API only responds to HTTPS-secured communications. Any requests sent via HTTP return an HTTP 301 redirect to the corresponding HTTPS resources.      - The API returns request responses in JSON format. When an API request returns an error, it is sent in the JSON response as an error key or with details in the message key.       ### 🔖 **Need some help?**  In case you have questions or need clarity with interacting with some endpoints feel free to create a support ticket on your account or you can send an email ([<i>developers@segnivo.com</i>](https://mailto:developers@segnivo.com)) directly and we would be happy to help.  ---  ## Authentication  As noted earlier, this API uses API keys for authentication. You can generate a Segnivo API key in the [API](https://messaging.segnivo.com/account/api) section of your account settings.  You must include an API key in each request to this API with the `X-API-KEY` request header.  ### Authentication error response  If an API key is missing, malformed, or invalid, you will receive an HTTP 401 Unauthorized response code.  ## Rate and usage limits  API access rate limits apply on a per-API endpoint basis in unit time. The limit is 10k requests per hour for most endpoints and 1m requests per hour for transactional/relay email-sending endpoints. Also, depending on your plan, you may have usage limits. If you exceed either limit, your request will return an HTTP 429 Too Many Requests status code or HTTP 403 if sending credits have been exhausted.  ### 503 response  An HTTP `503` response from our servers may indicate there is an unexpected spike in API access traffic, while this rarely happens, we ensure the server is usually operational within the next two to five minutes. If the outage persists or you receive any other form of an HTTP `5XX` error, contact support ([<i>developers@segnivo.com</i>](https://mailto:developers@segnivo.com)).  ### Request headers  To make a successful request, some or all of the following headers must be passed with the request.  | **Header** | **Description** | | --- | --- | | Content-Type | Required and should be `application/json` in most cases. | | Accept | Required and should be `application/json` in most cases | | Content-Length | Required for `POST`, `PATCH`, and `PUT` requests containing a request body. The value must be the number of bytes rather than the number of characters in the request body. | | X-API-KEY | Required. Specifies the API key used for authorization. |  ##### 🔖 Note with example requests and code snippets  If/when you use the code snippets used as example requests, remember to calculate and add the `Content-Length` header. Some request libraries, frameworks, and tools automatically add this header for you while a few do not. Kindly check and ensure yours does or add it yourself.
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.10.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the endpoint.
 */

namespace Segnivo\SDK\Test\Api;

use \Segnivo\SDK\Configuration;
use \Segnivo\SDK\ApiException;
use \Segnivo\SDK\ObjectSerializer;
use PHPUnit\Framework\TestCase;

/**
 * SubscribersContactsApiTest Class Doc Comment
 *
 * @category Class
 * @package  Segnivo\SDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SubscribersContactsApiTest extends TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test case for contactsGet
     *
     * Get contacts.
     *
     */
    public function testContactsGet()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for contactsPost
     *
     * Add a Contact.
     *
     */
    public function testContactsPost()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for contactsUidAddTagPost
     *
     * Add tags to a contact.
     *
     */
    public function testContactsUidAddTagPost()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for contactsUidDeletePost
     *
     * Delete a contact.
     *
     */
    public function testContactsUidDeletePost()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for contactsUidGet
     *
     * Get a contact.
     *
     */
    public function testContactsUidGet()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for contactsUidPatch
     *
     * Update Contact.
     *
     */
    public function testContactsUidPatch()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for contactsUidSubscribePatch
     *
     * Subscribe a contact.
     *
     */
    public function testContactsUidSubscribePatch()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test case for contactsUidUnsubscribePatch
     *
     * Unsubscribe a contact.
     *
     */
    public function testContactsUidUnsubscribePatch()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }
}
