<?php

namespace Jeroenv\EcdModuleInstaller\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ModuleDataController extends Controller
{
    public function getModuleData(Request $request)
    {

        $data = new \stdClass;
        $data->name = 'Client module';

        return json_encode($data);

    }
}
