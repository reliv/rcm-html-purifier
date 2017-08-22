<?php

namespace RcmHtmlPurifier;

/**
 * @author James Jervis - https://github.com/jerv13
 */
class ModuleConfig
{
    /**
     * __invoke
     *
     * @return array
     */
    public function __invoke()
    {
        return [
            'dependencies' => include __DIR__ . '/../config/dependencies.php'
        ];
    }
}
