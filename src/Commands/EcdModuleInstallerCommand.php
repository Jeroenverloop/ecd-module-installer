<?php

namespace Jeroenv\EcdModuleInstaller\Commands;

use Illuminate\Console\Command;
use Jeroenv\EcdModuleInstaller\ExtendedComposer\Composer;

class EcdModuleInstallerCommand extends Command
{
    public $signature = 'ecd:test-composer';

    public $description = 'My command';

    public function handle(): int
    {
        app()->make(Composer::class)->run(['update']);

        $this->comment('All done');

        return self::SUCCESS;
    }
}
