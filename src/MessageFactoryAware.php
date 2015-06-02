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

/**
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
interface MessageFactoryAware
{
    /**
     * @return MessageFactory
     */
    public function getMessageFactory();

    /**
     * @param MessageFactory $messageFactory
     */
    public function setMessageFactory(MessageFactory $messageFactory);
}
