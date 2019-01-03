<?php
/**
 * Created by PhpStorm.
 * User: Torvald
 * Date: 03.01.2019
 * Time: 23:28
 */

class HtmlConverterFactory implements ConverterFactoryInterface
{
    const TYPE_BBCODE   = 1;
    const TYPE_MARKDOWN = 2;

    public static function get($type)
    {
        switch ($type) {
            case self::TYPE_BBCODE:
                return new HtmlToBBCodeConverter();

            case self::TYPE_MARKDOWN:
                return new HtmlToMarkdownConverter();

            default:
                echo "Unknown converter"; exit;
        }
    }
}