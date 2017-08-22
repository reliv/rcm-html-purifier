<?php

namespace RcmHtmlPurifier\Service;

use Psr\Container\ContainerInterface;

/**
 * @author James Jervis - https://github.com/jerv13
 */
class HtmlPurifierFactory
{
    /**
     * Creates this service
     *
     * @param ContainerInterface $serviceContainer
     *
     * @return HtmlPurifier
     */
    public function __invoke($serviceContainer)
    {
        $config = \HTMLPurifier_Config::createDefault();
        $config->set('Cache.SerializerPath', getcwd() . '/data/HTMLPurifier');

        return new HtmlPurifier($config);
    }
}
