<?php

namespace App;

class CalculateTax implements CalculateTaxInterface
{
    /**
     * @inheritDoc
     */
    public static function calculate(
        int $price,
        int $percentage
    ): int
    {
        return 0;
    }
}

