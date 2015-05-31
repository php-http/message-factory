<?php

/*
 * This file is part of the Http Message Factory package.
 *
 * (c) PHP HTTP Team
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code.
 */

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
