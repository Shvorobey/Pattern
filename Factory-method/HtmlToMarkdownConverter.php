<?php
/**
 * Created by PhpStorm.
 * User: Torvald
 * Date: 03.01.2019
 * Time: 23:30
 */

class HtmlToMarkdownConverter implements Converter
{
    public function convert($html)
    {
        $search = ['<b>', '</b>', '<i>', '</i>', '<u>', '</u>'];
        $replace = ['**', '**', '__', '__', '+', '+'];

        return str_replace($search, $replace, $html);
    }
}