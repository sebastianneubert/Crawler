<?php

namespace whm\Crawler\PageContainer;

use Psr\Http\Message\UriInterface;

interface PageContainer
{
    /**
     * Returns all elements that where pushed
     *
     * @return UriInterface[]
     */
    public function getAllElements();

    /**
     * Adds an Uri to the container
     *
     * @param UriInterface $uri
     * @param boolean $atBeginning
     */
    public function push(UriInterface $uri, $atBeginning = false);

    /**
     * Returns a given number of Uris
     *
     * @param int $count
     * @return UriInterface[]
     */
    public function pop($count = 1);
}
