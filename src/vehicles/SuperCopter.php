<?php

namespace src\vehicles;


class SuperCopter extends AbstractFlyingVehicles
{


    /**
     * le bruit du vehicule
     * @return string
     */
    public function makeNoise(): string
    {
        return "<br> tttt tttt  ttttt  <br>" ;
    }



}