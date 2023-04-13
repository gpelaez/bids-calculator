<?php

namespace App\Tests;

use App\Service\Calculator;
use PHPUnit\Framework\TestCase;

final class CalculatorTest extends TestCase
{
    /**
     * @inheritdoc
     */
    protected function setUp(): void
    {
        parent::setUp();
    }

    /**
     * @inheritdoc
     */
    protected function tearDown(): void
    {
        parent::tearDown();
    }

    /**
     * @dataProvider totalPriceDataProvider
     */
    public function testFeesCalculator(int|float $price, string $type, int|float $basic, int|float $special, int|float $association, int|float $storage, int|float $total_expected)
    {
        $calculator = Calculator::getInstance();
        $fees = $calculator->calculateFees($price, $type);
        $total = $calculator->calculateTotal($price, $fees);
        $this->assertEquals($basic, $fees['basic']['value']);
        $this->assertEquals($special, $fees['special']['value']);
        $this->assertEquals($association, $fees['association']['value']);
        $this->assertEquals($storage, $fees['storage']['value']);
        $this->assertEquals($total_expected, $total);
    }

    public static function totalPriceDataProvider()
    {
        return [
            [398, 'common', 39.80, 7.96, 5, 100, 550.76],
            [501, 'common', 50, 10.02, 10, 100, 671.02],
            [57, 'common', 10, 1.14, 5, 100, 173.14],
            [1800, 'luxury', 180, 72, 15, 100, 2167],
            [1100, 'common', 50, 22, 15, 100, 1287],
            [1000000, 'luxury', 200, 40000, 20, 100, 1040320],
        ];
    }
}