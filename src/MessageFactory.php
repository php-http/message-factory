<?php

/*
 * This file is part of the Http Message Factory package.
 *
 * (c) PHP HTTP Team
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code.
 */

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
     * @param string                               $protocolVersion
     * @param string[]                             $headers
     * @param resource|string|StreamInterface|null $body
     *
     * @return RequestInterface
     */
    public function createRequest(
        $method,
        $uri,
        $protocolVersion = '1.1',
        array $headers = [],
        $body = null
    );

    /**
     * Creates a response
     *
     * @param integer                              $statusCode
     * @param string|null                          $reasonPhrase
     * @param string                               $protocolVersion
     * @param string[]                             $headers
     * @param resource|string|StreamInterface|null $body
     *
     * @return ResponseInterface
     */
    public function createResponse(
        $statusCode = 200,
        $reasonPhrase = null
        $protocolVersion = '1.1',
        array $headers = [],
        $body = null
    );
}
