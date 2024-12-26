<?php

namespace App;

use PHPUnit\Framework\TestCase;

class CalculateTaxTest extends TestCase
{
    /**
     * @dataProvider data_calculate
     */
    public function test_calculate($price, $expectedPrice)
    {
        $this->assertEquals(
            $expectedPrice,
            CalculateTax::calculate($price)
        );
    }

    public function data_calculate()
    {
        return [
            // 税率は10%
            [
                'price' => 3000.0,
                'expectedPrice' => 3300.0,
            ],
        ];
    }
}
