<?php

namespace Http\Message\Psr17;

use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\StreamFactoryInterface;

/**
 * Compatibility layer for PSR-17 request factory.
 *
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
final class RequestFactory implements \Http\Message\RequestFactory
{
    /**
     * @var RequestFactoryInterface
     */
    private $requestFactory;

    /**
     * @var \Http\Message\StreamFactory
     */
    private $streamFactory;

    public function __construct(RequestFactoryInterface $requestFactory, StreamFactoryInterface $streamFactory)
    {
        $this->requestFactory = $requestFactory;
        $this->streamFactory = new StreamFactory($streamFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function createRequest($method, $uri, array $headers = [], $body = null, $protocolVersion = '1.1')
    {
        $request = $this->requestFactory
            ->createRequest($method, $uri)
            ->withBody($this->streamFactory->createStream($body))
            ->withProtocolVersion($protocolVersion)
        ;

        foreach ($headers as $name => $value) {
            $request = $request->withHeader($name, $value);
        }

        return $request;
    }
}
