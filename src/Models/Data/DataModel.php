<?php

namespace Jeroenv\EcdModuleInstaller\Models\Data;

class DataModel
{

    public string $name;


    public function __construct($name)
    {
        $this->name = $name;
    }

}
