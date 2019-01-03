<?php
/**
 * Created by PhpStorm.
 * User: Torvald
 * Date: 03.01.2019
 * Time: 23:30
 */

class HtmlToBBCodeConverter implements Converter
{
    public function convert($html)
    {
        $search = ['<b>', '</b>', '<i>', '</i>', '<u>', '</u>'];
        $replace = ['[b]', '[/b]', '[i]', '[/i]', '[u]', '[/u]'];

        return str_replace($search, $replace, $html);
    }
}