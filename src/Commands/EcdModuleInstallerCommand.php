<?php

namespace Jeroenv\EcdModuleInstaller\Commands;

use Illuminate\Console\Command;

class EcdModuleInstallerCommand extends Command
{
    public $signature = 'ecd-module-installer';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
