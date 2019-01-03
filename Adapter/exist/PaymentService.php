<?php
/**
 * Created by PhpStorm.
 * User: Torvald
 * Date: 03.01.2019
 * Time: 22:58
 */

class PaymentService
{
    public function execute(PaymentInterface $paymentAdapter)
    {
        $paymentAdapter->pay(100);
    }
}