<?php

class DataApiNasa
{
    public static function callApiNasaDailyImage()
    {
        $url = "https://api.nasa.gov/planetary/apod?api_key=j5TOKWerAentpnYvfgovTVsNLcqQ8Ow85Lgp2V5g";

        $raw = file_get_contents($url);

        $json = json_decode($raw, true);
        return $json;
    }
    public static function callApiNasaMarsImage()
    {
        $url = "https://api.nasa.gov/mars-photos/api/v1/rovers/curiosity/?api_key=j5TOKWerAentpnYvfgovTVsNLcqQ8Ow85Lgp2V5g";

        $raw = file_get_contents($url);

        $json = json_decode($raw, true);
        return $json;
    }
}
