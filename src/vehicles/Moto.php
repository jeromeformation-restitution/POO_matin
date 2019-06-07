<?php

namespace src\vehicles;


class Moto extends AbstractRollingVehicles
{
    /**
     * le bruit du vehicule
     * @return string
     */
    public function makeNoise(): string
    {
        return " <br> brrrr brrrr brrrr   <br>" ;
    }


}