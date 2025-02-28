<?php

namespace Icekristal\DaData\Tests;

use Icekristal\DaData\Enums\Gender;
use Icekristal\DaData\Enums\Parts;
use Icekristal\DaData\Facades\DaDataName;
use Icekristal\DaData\Facades\DaDataPassport;

/**
 * Class DaDataPassportTest
 * @package Icekristal\DaData\Tests
 */
class DaDataPassportTest extends TestCase
{

    /**
     * @test
     */
    public function testStandardizationPassportString()
    {
        $this->assertSame(
            DaDataPassport::standardization('4509 235857'),
            $this->PassportProvider()
        );
    }

    /**
     * @test
     */
    public function testDefineFmsUnitByPassportCode()
    {
        $this->assertSame(
            DaDataPassport::fms('772 053', 2),
            $this->FmsProvider()
        );
    }

    /**
     * @return array|array[]
     */
    public function PassportProvider() : array
    {
        return [
            [
                "source" => "4509 235857",
                "series" => "45 09",
                "number" => "235857",
                "qc" => 0
            ]
        ];
    }

    /**
     * @return array|\array[][]
     */
    public function FmsProvider() : array
    {
        return [
            "suggestions" => [
                [
                    "value" => "ОВД ЗЮЗИНО Г. МОСКВЫ",
                    "unrestricted_value" => "ОВД ЗЮЗИНО Г. МОСКВЫ",
                    "data" => [
                        "code" => "772-053",
                        "name" => "ОВД ЗЮЗИНО Г. МОСКВЫ",
                        "region_code" => "77",
                        "type" => "2",
                    ],
                ], [
                    "value" => "ОВД ЗЮЗИНО Г. МОСКВЫ ПАСПОРТНЫЙ СТОЛ 1",
                    "unrestricted_value" => "ОВД ЗЮЗИНО Г. МОСКВЫ ПАСПОРТНЫЙ СТОЛ 1",
                    "data" => [
                        "code" => "772-053",
                        "name" => "ОВД ЗЮЗИНО Г. МОСКВЫ ПАСПОРТНЫЙ СТОЛ 1",
                        "region_code" => "77",
                        "type" => "2",
                    ],
                ],
            ]
        ];
    }

}
