<?php

namespace RcmHtmlPurifier\Factory;

use Psr\Container\ContainerInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * HtmlPurifierFactory
 *
 * @category  Reliv
 * @package   RcmInstanceConfig\Factory
 * @author    Rod Mcnew <rmcnew@relivinc.com>
 * @copyright 2014 Reliv International
 * @license   License.txt New BSD License
 * @version   Release: <package_version>
 * @link      https://github.com/reliv
 */
class HtmlPurifierFactory
{
    /**
     * Creates this service
     *
     * @param ContainerInterface|ServiceLocatorInterface $serviceLocator
     *
     * @return \HTMLPurifier
     */
    public function __invoke($serviceLocator)
    {
        $config = \HTMLPurifier_Config::createDefault();
        $config->set('Cache.SerializerPath', getcwd() . '/data/HTMLPurifier');

        return new \HTMLPurifier($config);
    }
}
