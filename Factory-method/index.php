<?php
/**
 * Created by PhpStorm.
 * User: Torvald
 * Date: 03.01.2019
 * Time: 23:14
 */

//function htmlToBBCode($html)
//{
//    $search = ['<b>', '</b>', '<i>', '</i>', '<u>', '</u>'];
//    $replace = ['[b]', '[/b]', '[i]', '[/i]', '[u]', '[/u]'];
//
//    return str_replace($search, $replace, $html);
//}

//function htmlToMarkdown($html)
//{
//    $search = ['<b>', '</b>', '<i>', '</i>', '<u>', '</u>'];
//    $replace = ['**', '**', '__', '__', '+', '+'];
//
//    return str_replace($search, $replace, $html);
//}

$html = '<b>Полужирный</b>. <i>Курсив</i>.';

echo htmlToBBCode($html) . '</br></br>';
echo htmlToMarkdown($html) . '</br></br>';