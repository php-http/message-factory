<?php

namespace Http\Message;

use Psr\Http\Message\UriInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;

/**
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
interface MessageFactory
{
    /**
     * Creates a new request
     *
     * @param string                               $method
     * @param string|UriInterface                  $uri
     * @param array                                $headers
     * @param resource|string|StreamInterface|null $body
     * @param string                               $protocolVersion
     *
     * @return RequestInterface
     */
    public function createRequest(
        $method,
        $uri,
        array $headers = [],
        $body = null,
        $protocolVersion = '1.1'
    );

    /**
     * Creates a response
     *
     * @param integer                              $statusCode
     * @param string|null                          $reasonPhrase
     * @param array                                $headers
     * @param resource|string|StreamInterface|null $body
     * @param string                               $protocolVersion
     *
     * @return ResponseInterface
     */
    public function createResponse(
        $statusCode = 200,
        $reasonPhrase = null,
        array $headers = [],
        $body = null,
        $protocolVersion = '1.1'
    );
}
