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
