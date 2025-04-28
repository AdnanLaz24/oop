<?php

class ContohStatic
{
    public static $angka = 1;

    public static function halo()
    {
        return "Halo.";
    }
}

echo ContohStatic::$angka;
echo ContohStatic::halo();

echo "<hr>";
