<?php
declare(strict_types=1);

/**
 * Class Db
 */
class Db
{
    public static function getDepositAccount(): ?DepositAccount
    {
        // DBから取得できた場合
        // return new DepositAccount(1000);

        // DBから取得できなかった場合。NULL安全がないとエラーになる
        return null;
    }
}

/**
 * Class DepositAccount
 */
class DepositAccount
{
    public function __construct(private ?float $balance) {}

    public function getBalance(): ?float
    {
        return $this->balance;
    }
}

/**
 * Class Investor
 */
class Investor
{
    public function getDepositAccount(): ?DepositAccount
    {
        return Db::getDepositAccount();
    }
}

$investor = new Investor();

// 従来：NULL安全演算子なし
echo $investor->getDepositAccount()->getBalance() . PHP_EOL;

// 従来：別の書き方
echo !is_null($investor->getDepositAccount()) ?
    $investor->getDepositAccount()->getBalance() :
    0
;

// PHP8：NULL安全演算子あり
// echo $investor->getDepositAccount()?->getBalance() . PHP_EOL;
