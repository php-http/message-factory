<?php

namespace Http\Message;

use Psr\Http\Message\StreamInterface;

/**
 * Factory for creating Multipart Streams.
 *
 * @author Robert Schönthal <robert.schoenthal@gmail.com>
 */
interface MultiPartStreamFactory extends StreamFactory
{
    /**
     * Creates a Multipart Stream from parameters and/or files.
     *
     * @param array $parameters
     * @param array $files
     *
     * @return StreamInterface
     *
     * @throws \InvalidArgumentException If the $parameters or $files are invalid.
     * @throws \RuntimeException         If creating the stream fails.
     */
    public function createMultiPartStream(array $parameters = [], array $files = []);
}
