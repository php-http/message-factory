<?php

namespace Http\Message;

/**
 * Factory for PSR-7 Request and Response.
 *
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 *
 * @deprecated Please use PSR-17 instead.
 */
interface MessageFactory extends RequestFactory, ResponseFactory
{
}
