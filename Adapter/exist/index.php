<?php
/**
 * Created by PhpStorm.
 * User: Torvald
 * Date: 03.01.2019
 * Time: 22:21
 */

switch ($_GET['payment']) {
    case '1':
        $adapter = new WebMoneyPaymentAdapter(new WebMoney());
        break;

    case '2':
        $adapter = new YandexDengiPaymentAdapter(new YandexDengi());
        break;

        default:
        echo 'Укажите систему оплаты.';
        exit;
}

$service = new PaymentService();
$service->execute($adapter);