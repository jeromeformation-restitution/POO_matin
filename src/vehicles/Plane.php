<?php


namespace src\vehicles;

class Plane extends AbstractFlyingVehicles
{


    /**
     * le bruit du vehicule
     * @return string
     */
    public function makeNoise(): string
    {
        return "<br> piiiiiiiiiiiouuuuuuuuuuu <br>";
    }


}