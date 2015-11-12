<?php

namespace Http\Message;

/**
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
interface UriFactoryAware
{
    /**
     * @return UriFactory
     */
    public function getUriFactory();

    /**
     * @param UriFactory $uriFactory
     */
    public function setUriFactory(UriFactory $uriFactory);
}
