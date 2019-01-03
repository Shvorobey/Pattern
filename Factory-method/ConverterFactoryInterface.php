<?php
/**
 * Created by PhpStorm.
 * User: Torvald
 * Date: 03.01.2019
 * Time: 23:26
 */

interface ConverterFactoryInterface
{
    public static function get($type);
}