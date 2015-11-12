<?php

namespace Http\Message;

use Psr\Http\Message\StreamInterface;

/**
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
interface StreamFactory
{
    /**
     * Creates a stream
     *
     * @param string|resource|StreamInterface|null $body
     *
     * @return StreamInterface
     *
     * @throws \InvalidArgumentException If the stream body is invalid
     */
    public function createStream($body = null);
}
