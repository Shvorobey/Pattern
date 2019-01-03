<?php
/**
 * Created by PhpStorm.
 * User: Torvald
 * Date: 03.01.2019
 * Time: 22:53
 */

class WebMoneyPaymentAdapter implements PaymentInterface
{
    protected $paymentGateway;

    public function __construct(WebMoney $paymentGateway)
    {
        $this->paymentGateway = $paymentGateway;
    }

    public function pay($amount)
    {
        $this->paymentGateway->pay($amount);
    }
}