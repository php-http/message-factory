<?php

namespace Http\Message\Psr17;

use Psr\Http\Message\UriFactoryInterface;

/**
 * Compatibility layer for PSR-17 URI factory.
 *
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
final class UriFactory implements \Http\Message\UriFactory
{
    /**
     * @var UriFactoryInterface
     */
    private $uriFactory;

    public function __construct(UriFactoryInterface $uriFactory)
    {
        $this->uriFactory = $uriFactory;
    }

    /**
     * {@inheritdoc}
     */
    public function createUri($uri)
    {
        return $this->uriFactory->createUri($uri);
    }
}
