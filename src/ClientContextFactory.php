<?php

/*
 * This file is part of the Http Message Factory package.
 *
 * (c) PHP HTTP Team <team@php-http.org>
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code.
 */

namespace Http\Message;

use Psr\Http\Message\UriInterface;

/**
 * All the factory components that could be used in client context (like an HTTP Client)
 *
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
interface ClientContextFactory extends MessageFactory, StreamFactory, UriFactory
{

}
