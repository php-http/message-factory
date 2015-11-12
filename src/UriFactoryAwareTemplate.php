<?php

namespace Http\Message;

/**
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
trait UriFactoryAwareTemplate
{
    /**
     * @var UriFactory
     */
    protected $uriFactory;

    /**
     * {@inheritdoc}
     */
    public function getUriFactory()
    {
        return $this->uriFactory;
    }

    /**
     * {@inheritdoc}
     */
    public function setUriFactory(UriFactory $uriFactory)
    {
        $this->uriFactory = $uriFactory;
    }
}
