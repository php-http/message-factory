<?php

namespace Http\Message\Psr17;

use Psr\Http\Message\StreamFactoryInterface;
use Psr\Http\Message\StreamInterface;

/**
 * Compatibility layer for PSR-17 stream factory.
 *
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
final class StreamFactory implements \Http\Message\StreamFactory
{
    /**
     * @var StreamFactoryInterface
     */
    private $streamFactory;

    public function __construct(StreamFactoryInterface $streamFactory)
    {
        $this->streamFactory = $streamFactory;
    }

    /**
     * {@inheritdoc}
     */
    public function createStream($body = null)
    {
        if ($body instanceof StreamInterface) {
            return $body;
        }

        if (is_resource($body)) {
            return $this->streamFactory->createStreamFromResource($body);
        }

        return $this->streamFactory->createStream((string) $body);
    }
}
