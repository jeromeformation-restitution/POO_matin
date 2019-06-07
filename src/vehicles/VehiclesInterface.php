<?php

namespace src\vehicles;


interface VehiclesInterface
{
    /**
     * fonction avancer du vehicle
     * @param int $km
     *
     */
    public function move(int $km):void;

    /**
     * le bruit du vehicule
     * @return string
     */
    public function makeNoise ():string;

}