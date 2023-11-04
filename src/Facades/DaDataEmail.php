<?php

namespace Icekristal\DaData\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class DaDataEmail
 * @package Icekristal\DaData\Facades
 * @method \Icekristal\DaData\DaDataEmail standardization(string $email)
 * @method \Icekristal\DaData\DaDataEmail prompt(string $email, int $count)
 */
class DaDataEmail extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() : string
    {
        return 'da_data_email';
    }

}
