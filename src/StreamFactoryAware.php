<?php

namespace Http\Message;

/**
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
interface StreamFactoryAware
{
    /**
     * @return StreamFactory
     */
    public function getStreamFactory();

    /**
     * @param StreamFactory $streamFactory
     */
    public function setStreamFactory(StreamFactory $streamFactory);
}
