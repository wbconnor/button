<?php

/*
 * This class attempts to discover whether white or black text
 * would be more appropriate for the background color
 *
 * inspired by: http://www.splitbrain.org/blog/2008-09/18-calculating_color_contrast_with_php#comment-492069048
 *
 */

namespace App;

class TextColorPicker {

    public function __construct()
    {

    }

    public static function textColorFor($color_string)
    {
        $color = Static::colorHexToDec($color_string);
        $black = [0, 0, 0];
        $white = [256, 256, 256];

        $blackTextPoints = 0;
        $whiteTextPoints = 0;

        (Static::colorDiff($color, $black) == 'true') ? ++$blackTextPoints : --$blackTextPoints;
        (Static::colorDiff($color, $white) == 'true') ? ++$whiteTextPoints : --$whiteTextPoints;

        (Static::brightDiff($color, $black) == 'true') ? ++$blackTextPoints : --$blackTextPoints;
        (Static::brightDiff($color, $white) == 'true') ? ++$whiteTextPoints : --$whiteTextPoints;

        (Static::lumDiff($color, $black) == 'true') ? ++$blackTextPoints : --$blackTextPoints;
        (Static::lumDiff($color, $white) == 'true') ? ++$whiteTextPoints : --$whiteTextPoints;

        (Static::pythDiff($color, $black) == 'true') ? ++$blackTextPoints : --$blackTextPoints;
        (Static::pythDiff($color, $white) == 'true') ? ++$whiteTextPoints : --$whiteTextPoints;

        return ($blackTextPoints > $whiteTextPoints) ? "black" : "white";

    }

    private static function colorHexToDec($color)
    {
        // remove pound sign, if it exists
        if($color[0] == '#')
        {
            $color = substr($color, 1);
        }

        // create RGB array from 6 or 3 digit hex
        if(strlen($color) == 6)
        {
            list($r, $g, $b) = [
                $color[0].$color[1],
                $color[2].$color[3],
                $color[4].$color[5]
            ];
        }
        elseif (strlen($color) == 3)
        {
            list($r, $g, $b) = [
                $color[0].$color[0],
                $color[1].$color[1],
                $color[2].$color[2]
            ];
        }
        else
        {
            // TODO: change this to try/catch ??
            return null;
        }

        // convert hex to dec
        $r = hexdec($r);
        $g = hexdec($g);
        $b = hexdec($b);

        return [$r, $g, $b];
    }

    private static function colorDiff($c1, $c2)
    {
        $diff = max($c1[0],$c2[0]) - min($c1[0],$c2[0]) +
            max($c1[1],$c2[1]) - min($c1[1],$c2[1]) +
            max($c1[2],$c2[2]) - min($c1[2],$c2[2]);

        // Color Difference should be > 500
        return  ($diff > 500)  ? "true" : "false";
    }

    private static function brightDiff($c1, $c2)
    {
        $BR1 = (299 * $c1[0] + 587 * $c1[1] + 114 * $c1[2]) / 1000;
        $BR2 = (299 * $c2[0] + 587 * $c2[1] + 114 * $c2[2]) / 1000;

        // Brightness Difference should be > 125
        return (abs($BR1-$BR2) > 125) ? "true" : "false";
    }

    private static function lumDiff($c1, $c2)
    {
        $L1 = 0.2126 * pow($c1[0]/255, 2.2) +
            0.7152 * pow($c1[1]/255, 2.2) +
            0.0722 * pow($c1[2]/255, 2.2);

        $L2 = 0.2126 * pow($c2[0]/255, 2.2) +
            0.7152 * pow($c2[1]/255, 2.2) +
            0.0722 * pow($c2[2]/255, 2.2);

        // Luminosity Contrast should be > 5
        if($L1 > $L2)
        {
            return (($L1+0.05) / ($L2+0.05) > 5) ? "true" : "false";
        }
        else
        {
            return (($L2+0.05) / ($L1+0.05) > 5) ? "true" : "false";
        }
    }

    private static function pythDiff($c1, $c2)
    {
        $RD = $c1[0] - $c2[0];
        $GD = $c1[1] - $c2[1];
        $BD = $c1[2] - $c2[2];

        // Pythagorean Distance should be > 250
        return (sqrt($RD * $RD + $GD * $GD + $BD * $BD) > 250) ? "true" : "false";
    }
}