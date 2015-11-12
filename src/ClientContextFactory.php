<?php

namespace Http\Message;

use Psr\Http\Message\UriInterface;

/**
 * All the factory components that could be used in client context (like an HTTP Client).
 *
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
interface ClientContextFactory extends MessageFactory, StreamFactory, UriFactory
{
}
