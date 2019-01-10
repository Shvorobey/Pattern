<?php
/**
 * Created by PhpStorm.
 * User: Torvald
 * Date: 10.01.2019
 * Time: 23:50
 */

class TextileToMarkdownConverter implements Converter

{
    public function convert($html)
    {
        $search = ['**', '**', '__', '__'];
        $replace = ['**', '**', '*', '*',];

        return str_replace($search, $replace, $html);
    }
}