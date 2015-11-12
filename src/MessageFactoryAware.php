<?php

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
