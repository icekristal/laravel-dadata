<?php

namespace Icekristal\DaData\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class DaDataCompany
 * @package Icekristal\DaData\Facades
 * @method \Icekristal\DaData\DaDataCompany id(string $id, int $count, string $kpp, int $branch_type, int $type)
 * @method \Icekristal\DaData\DaDataCompany prompt(string $company, int $count, array $status, int $type, string $locations, string $locations_boost)
 * @method \Icekristal\DaData\DaDataCompany affiliated(string $id, int $count, array $scope)
 *
 */
class DaDataCompany extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() : string
    {
        return 'da_data_company';
    }

}
