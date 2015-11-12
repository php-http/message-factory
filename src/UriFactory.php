<?php

namespace Http\Message;

use Psr\Http\Message\UriInterface;

/**
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
interface UriFactory
{
    /**
     * Creates an URI
     *
     * @param mixed $uri
     *
     * @return UriInterface
     *
     * @throws \InvalidArgumentException If the URI is invalid
     */
    public function createUri($uri);
}
