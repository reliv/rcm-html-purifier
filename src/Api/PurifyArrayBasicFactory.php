<?php

namespace RcmHtmlPurifier\Api;

use Psr\Container\ContainerInterface;
use RcmHtmlPurifier\Service\HtmlPurifier;

/**
 * @author James Jervis - https://github.com/jerv13
 */
class PurifyArrayBasicFactory
{
    /**
     * Creates this service
     *
     * @param ContainerInterface $serviceContainer
     *
     * @return PurifyArrayBasic
     */
    public function __invoke($serviceContainer)
    {
        return new PurifyArrayBasic(
            $serviceContainer->get(HtmlPurifier::class)
        );
    }
}
