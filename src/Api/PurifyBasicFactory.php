<?php

namespace RcmHtmlPurifier\Api;

use Psr\Container\ContainerInterface;
use RcmHtmlPurifier\Service\HtmlPurifier;

/**
 * @author James Jervis - https://github.com/jerv13
 */
class PurifyBasicFactory
{
    /**
     * Creates this service
     *
     * @param ContainerInterface $serviceContainer
     *
     * @return PurifyBasic
     */
    public function __invoke($serviceContainer)
    {
        return new PurifyBasic(
            $serviceContainer->get(HtmlPurifier::class)
        );
    }
}
