# Lepus Inc. Technical Training

## 概要

株式会社レプスによる、バックエンドエンジニア向けソフトウェアテスト研修の資料です。

1. ソフトウェアテストの概要

2. テストコード演習

## ソフトウェアテストの概要

* ソフトウェアテストの目的
  1. 破壊的変更 (Breaking change) からソフトウェアを保護する
  2. 開発者がデグレードの心配なくリファクタリングを行える 
  3. ソフトウェア仕様を開発者に示す

## テストコード演習

* 金額と税（％）を受け取って、税込み金額を計算するメソッド `calculate` を実装する。

* `calculate` のテストを実装する。

* `calculate` メソッドの仕様を、金額が100万円以上の場合には税額が15%で固定されるよう改良する。
  * ソフトウェアテストの目的 1 に注目

* 改良仕様をもとにしてテストコードを変更する。

* `calculate` の実装をリファクタリングする。
  * ソフトウェアテストの目的 2 に注目


## Installation

### Requirements
* PHP 8.0+

### Install composer packages
```
$ cd training/backend-test
$ composer install
```

### Run program
```
$ php index.php
```

### Run phpUnit
```
$ vendor/phpunit/phpunit/phpunit tests
```
