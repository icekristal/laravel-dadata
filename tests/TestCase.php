<?php

namespace Icekristal\DaData\Tests;

class TestCase extends \Orchestra\Testbench\TestCase
{

    protected function getPackageProviders($app)
    {
        return [
            'Icekristal\DaData\DaDataServiceProvider'
        ];
    }

    protected function getPackageAliases($app)
    {
        return [
            'DaDataAddress'    => 'Icekristal\DaData\Facades\DaDataAddress',
            'DaDataName'       => 'Icekristal\DaData\Facades\DaDataName',
            'DaDataEmail'      => 'Icekristal\DaData\Facades\DaDataEmail',
            'DaDataPhone'      => 'Icekristal\DaData\Facades\DaDataPhone',
            'DaDataCompany'    => 'Icekristal\DaData\Facades\DaDataCompany',
            'DaDataBank'       => 'Icekristal\DaData\Facades\DaDataBank',
            'DaDataPassport'   => 'Icekristal\DaData\Facades\DaDataPassport',
        ];
    }

}
