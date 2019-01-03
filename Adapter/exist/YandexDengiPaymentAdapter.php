<?php
/**
 * Created by PhpStorm.
 * User: Torvald
 * Date: 03.01.2019
 * Time: 22:54
 */

class YandexDengiPaymentAdapter implements PaymentInterface
{
    protected $paymentGateway;

    public function __construct(YandexDengi $paymentGateway)
    {
        $this->paymentGateway = $paymentGateway;
    }

    public function pay($amount)
    {
        $this->paymentGateway->sendPayment($amount);
    }
}