<?php

namespace RcmHtmlPurifier\Api;

use RcmHtmlPurifier\Service\HtmlPurifier;

/**
 * @author James Jervis - https://github.com/jerv13
 */
class PurifyBasic implements Purify
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
     * @param string $html
     * @param null   $config
     *
     * @return string
     */
    public function __invoke(string $html, $config = null): string
    {
        return $this->htmlPurifier->purify($html, $config);
    }
}
