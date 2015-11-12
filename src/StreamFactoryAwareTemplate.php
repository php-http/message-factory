<?php

namespace Http\Message;

/**
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
trait StreamFactoryAwareTemplate
{
    /**
     * @var StreamFactory
     */
    protected $streamFactory;

    /**
     * {@inheritdoc}
     */
    public function getStreamFactory()
    {
        return $this->streamFactory;
    }

    /**
     * {@inheritdoc}
     */
    public function setStreamFactory(StreamFactory $streamFactory)
    {
        $this->streamFactory = $streamFactory;
    }
}
