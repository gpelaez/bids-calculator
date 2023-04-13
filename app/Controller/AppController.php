<?php

namespace App\Controller;

use App\Service\Calculator;
use Core\View;
use Money\Currencies\ISOCurrencies;

class AppController extends BaseController
{

    private Calculator $calculator;

    public function __construct(?Calculator $calculator = null)
    {
        if ($calculator == null) {
            $this->calculator = Calculator::getInstance();
        } else {
            $this->calculator = $calculator;
        }
    }

    public static function create()
    {
        return new self(
            Calculator::getInstance()
        );
    }

    public function app()
    {
        $vehiclePrice = isset($_GET['vehicle_price']) ? floatval($_GET['vehicle_price']) : 0;
        $vehicleType = isset($_GET['is_luxury']) && $_GET['is_luxury']== 'true' ? 'luxury' : 'common';

        if ($vehiclePrice > 0) {
            $fees = $this->calculator->calculateFees($vehiclePrice, $vehicleType);
            $total = $this->calculator->calculateTotal($vehiclePrice, $fees);
        }

        $data = compact('vehiclePrice', 'vehicleType', 'fees', 'total');

        $this->render('home', $data);
    }
}
