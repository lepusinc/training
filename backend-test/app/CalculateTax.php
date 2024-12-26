<?php

namespace App;

class CalculateTax implements CalculateTaxInterface
{
    /**
     * @inheritDoc
     */
    public static function calculate(float $price): float
    {
        return 0.0;
    }
}
