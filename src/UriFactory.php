<?php

namespace Http\Message;

use Psr\Http\Message\UriInterface;

/**
 * Factory for PSR-7 URI.
 *
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 *
 * @deprecated Please use PSR-17 instead.
 */
interface UriFactory
{
    /**
     * Creates an PSR-7 URI.
     *
     * @param string|UriInterface $uri
     *
     * @return UriInterface
     *
     * @throws \InvalidArgumentException if the $uri argument can not be converted into a valid URI
     */
    public function createUri($uri);
}
