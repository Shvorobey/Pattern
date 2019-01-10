<?php
/**
 * Created by PhpStorm.
 * User: Torvald
 * Date: 03.01.2019
 * Time: 23:03
 */

class QiwiPaymentAdapter implements PaymentInterface
{
    protected $paymentGateway;

    public function __construct(Qiwi $paymentGateway)
    {
        $this->paymentGateway = $paymentGateway;
    }

    public function pay($amount)
    {
        $this->paymentGateway->payment($amount);
    }
}