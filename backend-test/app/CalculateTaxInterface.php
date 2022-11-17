<?php

namespace App;

interface CalculateTaxInterface
{
    /**
     * @param integer $price
     * @param integer $percentage
     * @return integer
     */
    public static function calculate(
        int $price,
        int $percentage
    ): int;
}
