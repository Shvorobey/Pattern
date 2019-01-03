<?php
/**
 * Created by PhpStorm.
 * User: Torvald
 * Date: 03.01.2019
 * Time: 22:24
 */

interface PaymentInterface
{
    public function pay($amount);
}