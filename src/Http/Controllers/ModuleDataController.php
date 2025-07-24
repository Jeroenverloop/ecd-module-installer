<?php

namespace Jeroenv\EcdModuleInstaller\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Jeroenv\EcdModuleInstaller\ExtendedComposer\Composer;

class ModuleDataController extends Controller
{
    public function getModuleData(Request $request)
    {

        $data = new \stdClass;
        $data->name = 'Client module';


        app()->make(Composer::class)->run(['require', 'some-package']);

        return json_encode($data);

    }
}
