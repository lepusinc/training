<?php
declare(strict_types=1);

$arg = $argv[1] ?? null;

/**
 * @param string|null $status
 * @return void
 */
function label(?string $status) {
    return match ($status) {
        'pending' => '審査中',
        'approved' => '承認済み',
        default => '不明',
    };
}

echo label($arg) . PHP_EOL;

// 呼び出し例
// $ php php8_match.php pending