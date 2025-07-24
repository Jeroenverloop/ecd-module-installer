<?php

namespace Jeroenv\EcdModuleInstaller;

use Jeroenv\EcdModuleInstaller\Commands\EcdModuleInstallerCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class EcdModuleInstallerServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('ecd-module-installer')
            //->hasConfigFile()
            //->hasViews()
            //->hasMigration('create_ecd_module_installer_table')
            ->hasCommand(EcdModuleInstallerCommand::class)
            ->hasRoute('web');
    }
}
