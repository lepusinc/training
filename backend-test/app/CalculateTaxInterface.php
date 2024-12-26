<?php

namespace App;

interface CalculateTaxInterface
{
    /**
     * @param float $price
     * @return float
     */
    public static function calculate(float $price): float;
}
