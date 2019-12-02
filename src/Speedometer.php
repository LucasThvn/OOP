<?php


namespace App;


class Speedometer
{
    const CONVERTOR = 1.609;

    public static function convertKmToMiles($distance)
    {
        return round($distance / self::CONVERTOR,2);
    }

    public static function convertMilesToKm($distance)
    {
        return round($distance * self::CONVERTOR,2);
    }
}