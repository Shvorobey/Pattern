<?php
/**
 * Created by PhpStorm.
 * User: Torvald
 * Date: 10.01.2019
 * Time: 23:56
 */

class TextileConverterFactory implements ConverterFactoryInterface
{
    const TYPE_MARKDOWN = 1;

    public static function get($type)
    {
        switch ($type) {
            case self::TYPE_MARKDOWN:
                return new TextileToMarkdownConverter();

            default:
                echo "Unknown converter";
                exit;
        }
    }
}