<?php

namespace RcmHtmlPurifier\Api;

/**
 * @author James Jervis - https://github.com/jerv13
 */
interface PurifyArray
{
    /**
     * @param array $html
     * @param null  $config
     *
     * @return array
     */
    public function __invoke(array $html, $config = null): array;
}
