<?php
/**
 * Created by PhpStorm.
 * User: Torvald
 * Date: 03.01.2019
 * Time: 21:34
 */

class Qiwi
{
public function payment ($amount)
    {
        echo sprintf('Оплата через Qiwi: %s', $amount);
    }
}