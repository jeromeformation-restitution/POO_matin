<?php

namespace src\vehicles;

abstract class AbstractFlyingVehicles extends AbstractVehicles
{
    /**
     * nombre d'ailes
     * @var int
     */
    protected $wings;

    /**
     * AbstractFlyingVehicles constructor.
     * @param string $name
     * @param string $fuel
     * @param int $wings
     * @param int|null $km
     */
    public function __construct(string $name, string $fuel, int $wings,?int $km=0)
    {
        parent::__construct( $name, $fuel, $km);
        $this->wings = $wings;
    }

    public function move(int $km): void
    {
        $this->km+=$km;

        echo $this->makeNoise() . $this->name;
    }

    /**
     * @return int
     */
    public function getWings(): int
    {
        return $this->wings;
    }

    /**
     * @param int $wings
     */
    public function setWings(int $wings): void
    {
        $this->wings = $wings;
    }

}