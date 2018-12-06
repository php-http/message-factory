<?php

namespace Http\Message\Psr17;

use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\ResponseFactoryInterface;
use Psr\Http\Message\StreamFactoryInterface;

/**
 * Compatibility layer for PSR-17 reqeust and response factory.
 *
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
final class MessageFactory implements \Http\Message\MessageFactory
{
    /**
     * @var \Http\Message\ResponseFactory
     */
    private $requestFactory;

    /**
     * @var \Http\Message\ResponseFactory
     */
    private $responseFactory;

    public function __construct(
        RequestFactoryInterface $requestFactory,
        ResponseFactoryInterface $responseFactory,
        StreamFactoryInterface $streamFactory
    ) {
        $this->requestFactory = new RequestFactory($requestFactory, $streamFactory);
        $this->responseFactory = new ResponseFactory($responseFactory, $streamFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function createRequest($method, $uri, array $headers = [], $body = null, $protocolVersion = '1.1')
    {
        return $this->requestFactory->createRequest($method, $uri, $headers, $body, $protocolVersion);
    }

    /**
     * {@inheritdoc}
     */
    public function createResponse($statusCode = 200, $reasonPhrase = null, array $headers = [], $body = null, $protocolVersion = '1.1')
    {
        return $this->responseFactory->createResponse($statusCode, $reasonPhrase, $headers, $body, $protocolVersion);
    }
}
