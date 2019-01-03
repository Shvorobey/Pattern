<?php
/**
 * Created by PhpStorm.
 * User: Torvald
 * Date: 03.01.2019
 * Time: 22:21
 */

require_once 'PaymentInterface.php';
require_once 'PaymentService.php';
require_once 'WebMoney.php';
require_once 'WebMoneyPaymentAdapter.php';
require_once 'YandexDengi.php';
require_once 'YandexDengiPaymentAdapter.php';
require_once 'Qiwi.php';
require_once 'QiwiPaymentAdapter.php';

switch ($_GET['payment']) {
    case '1':
        $adapter = new WebMoneyPaymentAdapter(new WebMoney());
        break;

    case '2':
        $adapter = new YandexDengiPaymentAdapter(new YandexDengi());
        break;

    case '3':
        $adapter = new QiwiPaymentAdapter(new Qiwi());
        break;

        default:
        echo 'Укажите систему оплаты.';
        exit;
}

$service = new PaymentService();
$service->execute($adapter);