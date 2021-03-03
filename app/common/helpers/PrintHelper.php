<?php

namespace app\common\helpers;

/**
 * Class PrintHelper
 */
class PrintHelper {
    /**
     * @param string $text
     *
     * @return void
     */
    public static function newLine(string $text): void
    {
        echo $text, PHP_EOL;
    }

    /**
     * @param array $lines
     *
     * @return void
     */
    public static function newLines(array $lines): void
    {
        foreach ($lines as $line) {
            self::newLine($line);
        }
    }
}