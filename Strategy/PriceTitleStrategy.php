<?php
/**
 * Created by PhpStorm.
 * User: Torvald
 * Date: 11.01.2019
 * Time: 00:09
 */

class PriceTitleStrategy implements TitleStrategyInterface
{
    public function modifyTitle($title)
    {
        return $title . '&#127379;';
    }
}