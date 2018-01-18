<?php

namespace WCS\CoavBundle\Service;

use Doctrine\ORM\Mapping as ORM;


class FlightInfos
{
    /**
    *@var string
    */
    private $unit;

    public function __construct($unit)
    {
        $this->unit=$unit;
    }

    /**
    * Distance calculation between latitude/longitude based on Harnive's formula
    * http://www.codecodex.com/wiki/Calculate_Distance_Between_Two_Points_on_a_Globe#PHP
    *
    * @param float $latitudeFrom  Departure
    * @param float $longitudeFrom Departure
    * @param float $latitudeTo    Arrival
    * @param float $longitudeTo   Arrival
    *
    * @return float
    */
    public function getDistance($latitudeFrom, $longitudeFrom, $latitudeTo, $longitudeTo)
    {
        $d = 0;
        $earth_radius = 6371;
        $dLat = deg2rad($latitudeTo - $latitudeFrom);
        $dLon = deg2rad($longitudeTo - $longitudeFrom);

        $a = sin($dLat/2) * sin($dLat/2) + cos(deg2rad($latitudeFrom)) * cos(deg2rad($latitudeTo)) * sin($dLon/2) * sin($dLon/2);
        $c = 2 * asin(sqrt($a));

        switch ($this->unit){
            case 'km':
            $d = $c * $earth_radius;
            break;
            case 'mi':
            $d = $c * $earth_radius / 1.609344;
            break;
            case 'nmi':
            $d = $c * $earth_radius / 1.852;
            break;
        }

        return $d;
    }

    /**
    *
    * @param float $distance
    * @param float $cruiseSpeed
    *
    * @return float
    */
    public function getTime($distance, $cruiseSpeed)
    {
        $time=(60*$distance)/$cruiseSpeed; //en min
        return $time;

        // 62.5*60/40=93.75=60+33+3/4, soit 1h 33mn et 45s
    }
}
