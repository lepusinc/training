<?php

namespace App;

use PHPUnit\Framework\TestCase;

class CalculateTaxTest extends TestCase
{
    /**
     * @dataProvider data_calculate
     */
    public function test_calculate($price, $percentage, $expect)
    {
        $this->assertEquals(
            $expect,
            CalculateTax::calculate($price, $percentage)
        );
    }

    public function data_calculate()
    {
        return [
            [
                'price' => 3000,
                'percentage' => 10,
                'expect' => 3300,
            ],
        ];
    }
}

