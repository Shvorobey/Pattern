<?php
/**
 * Created by PhpStorm.
 * User: Torvald
 * Date: 11.01.2019
 * Time: 00:04
 */

require_once 'ConversionTitleStrategy.php';
require_once 'PriceTitleStrategy.php';
require_once 'RatingTitleStrategy.php';
require_once 'TitleStrategyInterface.php';

$applications = [
    ['id' => '422138104', 'title' => 'Pool Break 3D Billiards 8 Ball, 9 Ball, Snooker', 'rating' => 4.50, 'price' => 1.99, 'conversion' => 51],
    ['id' => '1031013627', 'title' => 'Sea of Squares', 'rating' => 3.00, 'price' => 0.99, 'conversion' => 33],
    ['id' => '364726781', 'title' => 'Jumpy Horse', 'rating' => 4.00, 'price' => 0.99, 'conversion' => 15],
    ['id' => '871610532', 'title' => 'Alphabet Gaga', 'rating' => 3.50, 'price' => 0.99, 'conversion' => 3],
    ['id' => '783228889', 'title' => 'Air Hockey - Style & Fun', 'rating' => 0.00, 'price' => 0.00, 'conversion' => 0],
];
//foreach ($applications as $application) {
//    $title = $application['title'];
//
//    if ($application['price'] == 0) {
//        $title .= '&#127379;';
//    }
//
//    if ($application['conversion'] > 15) {
//        $title .= '&#128077;';
//    }
//
//    if ($application['rating'] > 3.5) {
//        $title .= '&#9733;';
//    }
//
//    echo $title . '<br/>';
//}

$rating = new RatingTitleStrategy();
$price = new PriceTitleStrategy();
$conversion = new ConversionTitleStrategy();

foreach ($applications as $application) {
    $title = $application['title'];

    if ($application['rating'] > 3.5) {
        $title = $rating->modifyTitle($title);
    }

    if ($application['price'] == 0) {
        $title = $price->modifyTitle($title);
    }

    if ($application['conversion'] > 15) {
        $title = $conversion->modifyTitle($title);
    }

    echo $title . '<br/>';
}