<?php
/**
 * Created by PhpStorm.
 * User: Torvald
 * Date: 03.01.2019
 * Time: 21:56
 */

class PaymentService
{
    public function execute($payment)
    {
        if ($payment instanceof WebMoney) {
            $payment->pay(100);
        } else if ($payment instanceof YandexDengi) {
            $payment->sendPayment(100);
        } else if ($payment instanceof Qiwi) {
            $payment->payment(100);
        } else {
            echo 'Неизвестный способ оплаты.';
        }
    }
}