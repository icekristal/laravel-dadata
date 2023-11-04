<?php

namespace Icekristal\DaData\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class DaDataName
 * @package Icekristal\DaData\Facades
 * @method \Icekristal\DaData\DaDataName standardization(string $name)
 * @method \Icekristal\DaData\DaDataName prompt(string $name, int $count, int $gender, array $parts)
 */
class DaDataName extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() : string
    {
        return 'da_data_name';
    }

}
