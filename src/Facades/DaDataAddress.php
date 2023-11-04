<?php

namespace Icekristal\DaData\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class DaDataAddress
 * @package Icekristal\DaData\Facades
 * @method \Icekristal\DaData\DaDataAddress standardization(string $address)
 * @method \Icekristal\DaData\DaDataAddress prompt(string $query, int $count, int $language, array $locations, array $locations_geo, array $locations_boost, array $from_bound, array $to_bound)
 * @method \Icekristal\DaData\DaDataAddress geolocate(float $lat, float $lon, int $count, int $radius_meters, int $language)
 * @method \Icekristal\DaData\DaDataAddress iplocate(string $ip, int $count, int $language)
 * @method \Icekristal\DaData\DaDataAddress id(string $id, int $count, int $language)
 * @method \Icekristal\DaData\DaDataAddress postalUnitByAddress(string $address, int $count, int $language)
 * @method \Icekristal\DaData\DaDataAddress postalUnitById(int $code, int $count, int $language)
 * @method \Icekristal\DaData\DaDataAddress postalUnitByGeoLocate(float $lat, float $lon, int $radius_meters, int $count, int $language)
 * @method \Icekristal\DaData\DaDataAddress delivery(string $code)
 * @method \Icekristal\DaData\DaDataAddress fias(string $code)
 */
class DaDataAddress extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'da_data_address';
    }
}

