<?php

namespace App\Service;

use Money\Number;

class Calculator
{
    private static $instances = [];

    private function __construct()
    {
    }

    protected function __clone()
    {
    }

    public static function getInstance(): Calculator
    {
        $cls = static::class;
        if (!isset(self::$instances[$cls])) {
            self::$instances[$cls] = new static();
        }

        return self::$instances[$cls];
    }

    private function basicFee(int|float $price, string $type): int|float
    {
        $fee = 10 * $price / 100;
        if ($type == 'luxury' && $fee > 200) {
            $fee = 200;
        } elseif ($type == 'luxury' && $fee < 25) {
            $fee = 25;
        } elseif ($type == 'common' && $fee > 50) {
            $fee = 50;
        } elseif ($type == 'common' && $fee < 10) {
            $fee = 10;
        }
        return $fee;
    }

    private function sellerSpecialFee(int|float $price, string $type): int|float
    {
        if ($type === 'luxury') {
            return $price * 4 / 100;
        }
        return $price * 2 / 100;
    }

    private function associationCost(int|float $price): int|float
    {
        if ($price >= 0 && $price <= 500) {
            return 5;
        }
        if ($price > 500 && $price <= 1000) {
            return 10;
        }
        if ($price > 1000 && $price <= 3000) {
            return 15;
        }
        if ($price > 3000) {
            return 20;
        }
        return 0;
    }

    private function storageCost(): int|float
    {
        return 100;
    }

    public function calculateFees(int|float $price, string $type): array
    {
        $fees = [
            'basic' => [
                'value' => $this->basicFee($price, $type),
                'label' => 'Basic Fee',
            ],
            'special' => [
                'value' => $this->sellerSpecialFee($price, $type),
                'label' => 'Seller\'s Special Fee',
            ],
            'association' => [
                'value' => $this->associationCost($price, $type),
                'label' => 'Association Cost',
            ],
            'storage' => [
                'value' => $this->storageCost($price, $type),
                'label' => 'Storage Cost',
            ]
        ];
        return $fees;
    }

    public function calculateTotal(int|float $price, array $fees): int|float
    {
        return array_reduce($fees, function ($carry, $item) {
            return $carry += $item['value'];
        }, $price);
    }
}
