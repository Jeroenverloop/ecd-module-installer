<?php

namespace Jeroenv\EcdModuleInstaller\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Jeroenv\EcdModuleInstaller\EcdModuleInstaller
 */
class EcdModuleInstaller extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Jeroenv\EcdModuleInstaller\EcdModuleInstaller::class;
    }
}
