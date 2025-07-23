<?php

namespace Jeroenv\EcdModuleInstaller\ExtendedComposer;

class Composer extends \Illuminate\Support\Composer
{

    public function run(array $command){

        $command = array_merge($this->findComposer(), $command);

        $this->getProcess($command)->run(function ($type, $data) {
            // $type can be 'err' or 'out'
            // 'err' when there is an error
            // 'out' is stdout from the command

            // $data is the command output
            // ie whatever composer spits out when the command runs.
            echo $data;
        }, [
            // we can pass in env var to the process instance here
            // setting any additional environmental variable to the process
            'COMPOSER_HOME' => '$HOME/.config/composer'
        ]);

    }


}
