<?php

namespace Http\Message\Psr17;

use Psr\Http\Message\ResponseFactoryInterface;
use Psr\Http\Message\StreamFactoryInterface;

/**
 * Compatibility layer for PSR-17 response factory.
 *
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
final class ResponseFactory implements \Http\Message\ResponseFactory
{
    /**
     * @var ResponseFactoryInterface
     */
    private $responseFactory;

    /**
     * @var \Http\Message\StreamFactory
     */
    private $streamFactory;

    public function __construct(ResponseFactoryInterface $responseFactory, StreamFactoryInterface $streamFactory)
    {
        $this->responseFactory = $responseFactory;
        $this->streamFactory = new StreamFactory($streamFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function createResponse($statusCode = 200, $reasonPhrase = null, array $headers = [], $body = null, $protocolVersion = '1.1')
    {
        $response = $this->responseFactory
            ->createResponse($statusCode, (string) $reasonPhrase)
            ->withBody($this->streamFactory->createStream($body))
            ->withProtocolVersion($protocolVersion)
        ;

        foreach ($headers as $name => $value) {
            $response = $response->withHeader($name, $value);
        }

        return $response;
    }
}
