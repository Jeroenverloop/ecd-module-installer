<?php

namespace Jeroenv\EcdModuleInstaller\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Jeroenv\EcdModuleInstaller\ExtendedComposer\Composer;
use Jeroenv\EcdModuleInstaller\Models\Data\Modules\Module;
use Jeroenv\EcdModuleInstaller\Models\Data\Modules\ModuleSettings;

class ModuleDataController extends Controller
{
    public function getModuleData(Request $request)
    {

        $data = new \stdClass;
        $data->modules = [

        ];

        return json_encode($data);

    }


    public function createFakeModuleData() : array {
        $modules = [];

        $modules []= new Module('jeroenverloop/ecd-module-installer', new ModuleSettings());
        $modules []= new Module('jeroenverloop/test-package', new ModuleSettings());

        return $modules;
    }
}
