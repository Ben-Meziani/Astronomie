<?php

class DataApiNasa
{
    public static function callApiNasaDailyImage()
    {
        $url = "https://api.nasa.gov/planetary/apod?api_key=j5TOKWerAentpnYvfgovTVsNLcqQ8Ow85Lgp2V5g";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);

        $json = json_decode($result, true);

        return $json;
    }
    public static function callApiNasaMarsImage()
    {
        $url = "https://api.nasa.gov/mars-photos/api/v1/rovers/curiosity/latest_photos?api_key=j5TOKWerAentpnYvfgovTVsNLcqQ8Ow85Lgp2V5g";

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);

        $json = json_decode($result, true);
        return $json;
    }
}
