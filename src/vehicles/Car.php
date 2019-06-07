<?php

namespace src\vehicles;


class Car extends AbstractRollingVehicles
{
    /**
     * le bruit du vehicule
     * @return string
     */
    public function makeNoise(): string
    {
        return " <br> vroummmmm vroummm  <br> " ;
    }


}