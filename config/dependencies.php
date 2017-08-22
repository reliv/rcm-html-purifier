<?php
/**
 * dependencies.php
 */
return [
    'factories' => [
        \RcmHtmlPurifier\Api\Purify::class
        => \RcmHtmlPurifier\Api\PurifyBasicFactory::class,

        \RcmHtmlPurifier\Api\PurifyArray::class
        => \RcmHtmlPurifier\Api\PurifyArrayBasicFactory::class,

        'RcmHtmlPurifier'
        => \RcmHtmlPurifier\Factory\HtmlPurifierFactory::class,

        \RcmHtmlPurifier\Service\HtmlPurifier::class
        => \RcmHtmlPurifier\Service\HtmlPurifierFactory::class,
    ]
];
