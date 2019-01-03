<?php
/**
 * Created by PhpStorm.
 * User: Torvald
 * Date: 03.01.2019
 * Time: 21:22
 */

class WebMoney
{
public function pay ($amount)
    {
        echo sprintf('Оплата через WebMoney: %s', $amount);
    }
}