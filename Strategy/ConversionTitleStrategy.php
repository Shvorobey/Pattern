<?php
/**
 * Created by PhpStorm.
 * User: Torvald
 * Date: 11.01.2019
 * Time: 00:11
 */

class ConversionTitleStrategy implements TitleStrategyInterface
{
    public function modifyTitle($title)
    {
        return $title . '&#128077;';
    }
}