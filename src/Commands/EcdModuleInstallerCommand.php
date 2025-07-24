<?php

namespace Jeroenv\EcdModuleInstaller\Commands;

use Illuminate\Console\Command;
use Illuminate\Contracts\Container\BindingResolutionException;
use Jeroenv\EcdModuleInstaller\ExtendedComposer\Composer;
use Jeroenv\EcdModuleInstaller\Http\Controllers\ModuleDataController;

class EcdModuleInstallerCommand extends Command
{
    public $signature = 'ecd:test-composer';

    public $description = 'My command';

    public function handle(): int
    {
        $moduleDataController = new ModuleDataController;

        $modules = $moduleDataController->createFakeModuleData();

        try {
            $composer = app()->make(Composer::class);
        } catch (BindingResolutionException $e) {
            echo $e->getMessage();

            return self::FAILURE;
        }

        foreach ($modules as $module) {
            $composer->run(['require', $module->name]);
        }

        $this->comment('All done');

        return self::SUCCESS;
    }
}
