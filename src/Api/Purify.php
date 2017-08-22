<?php

namespace RcmHtmlPurifier\Api;

/**
 * @author James Jervis - https://github.com/jerv13
 */
interface Purify
{
    /**
     * @param string $html
     * @param null   $config
     *
     * @return string
     */
    public function __invoke(string $html, $config = null): string;
}
