<?php
/**
 * Created by PhpStorm.
 * User: Torvald
 * Date: 11.01.2019
 * Time: 00:12
 */

class RatingTitleStrategy implements TitleStrategyInterface
{
    public function modifyTitle($title)
    {
        return $title . '&#9733;';
    }
}