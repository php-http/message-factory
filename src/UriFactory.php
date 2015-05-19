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
    public function createUri($uri = null);
}
