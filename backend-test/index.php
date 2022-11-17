<?php

use App\CalculateTax;

require_once 'vendor/autoload.php';

// 3,000円の10%税込金額を計算する。
echo CalculateTax::calculate(3000, 10);