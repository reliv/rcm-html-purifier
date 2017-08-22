<?php

namespace RcmHtmlPurifier\Api;

use RcmHtmlPurifier\Service\HtmlPurifier;

/**
 * @author James Jervis - https://github.com/jerv13
 */
class PurifyArrayBasic implements PurifyArray
{
    /**
     * @var HtmlPurifier
     */
    protected $htmlPurifier;

    /**
     * @param HtmlPurifier $htmlPurifier
     */
    public function __construct(HtmlPurifier $htmlPurifier)
    {
        $this->htmlPurifier = $htmlPurifier;
    }

    /**
     * @param array $html
     * @param null  $config
     *
     * @return array
     */
    public function __invoke(array $html, $config = null): array
    {
        return $this->htmlPurifier->purifyArray($html, $config);
    }
}
