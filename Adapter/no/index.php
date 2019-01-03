<?php
/**
 * Created by PhpStorm.
 * User: Torvald
 * Date: 03.01.2019
 * Time: 21:21
 */


require_once 'WebMoney.php';
require_once 'YandexDengi.php';
require_once 'Qiwi.php';
require_once 'PaymentService.php';

switch ($_GET['payment']) {
    case '1':
        $payment = new WebMoney();

        break;

    case '2':
        $payment = new YandexDengi();

        break;

    case '3':
        $payment = new Qiwi();

        break;

    default:
        echo 'Укажите систему оплаты.';
}

$service = new PaymentService();
$service->execute($payment);