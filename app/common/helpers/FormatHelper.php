<?php

namespace app\common\helpers;

/**
 * Class FormatHelper
 */
class FormatHelper
{
    /**
     * @param array $lines
     *
     * @return array
     */
    public static function setOneLengthForLines(array $lines): array
    {
        $maxLength = 0;

        foreach ($lines as $line) {
            $lineLength = strlen((string) $line);

            if ($lineLength > $maxLength) {
                $maxLength = $lineLength;
            }
        }

        foreach ($lines as $key => $line) {
            $lines[$key] = str_pad($line, $maxLength, ' ');
        }

        return $lines;
    }

    /**
     * @param array ...$arrays
     *
     * @return array
     */
    public static function arrayRightJoin(array ...$arrays): array
    {
        if (count($arrays) < 2) {
            return $arrays[0];
        }

        $leftArray = array_shift($arrays);

        while ($rightArray = array_shift($arrays)) {
            foreach ($leftArray as $key => $value) {
                $leftArray[$key] .= $rightArray[$key];
            }
        }

        return $leftArray;
    }
}