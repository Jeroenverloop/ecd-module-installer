<?php

namespace Jeroenv\EcdModuleInstaller\Models\Data\Modules;

use Jeroenv\EcdModuleInstaller\Models\Data\DataModel;

class Module extends DataModel
{
    private ModuleSettings $_settings;

    public function __construct($name, $settings)
    {
        parent::__construct($name);

        $this->_settings = $settings;
    }

    public function getSettingsAsJson(): string
    {
        return json_encode($this->_settings);
    }
}
