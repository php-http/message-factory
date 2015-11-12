<?php

namespace Http\Message;

/**
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
trait MessageFactoryAwareTemplate
{
    /**
     * @var MessageFactory
     */
    protected $messageFactory;

    /**
     * {@inheritdoc}
     */
    public function getMessageFactory()
    {
        return $this->messageFactory;
    }

    /**
     * {@inheritdoc}
     */
    public function setMessageFactory(MessageFactory $messageFactory)
    {
        $this->messageFactory = $messageFactory;
    }
}
