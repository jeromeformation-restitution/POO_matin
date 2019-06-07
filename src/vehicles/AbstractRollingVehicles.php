<?php

namespace src\vehicles;

abstract class AbstractRollingVehicles extends AbstractVehicles
{
    /**
     * nombre de roues
     * @var int
     */
    protected $wheels;

    /**
     * AbstractFlyingVehicles constructor.
     * @param string $name
     * @param string $fuel
     * @param int $wheels
     * @param int|null $km
     */
    public function __construct(string $name, string $fuel, int $wheels, ?int $km = 0)
    {
        parent::__construct($name, $fuel, $km);
        $this->wheels = $wheels;
    }

    public function move(int $km): void
    {
        $this->km += $km;

        echo $this->makeNoise() . $this->name;
    }

    /**
     * @return int
     */
    public function getWheels(): int
    {
        return $this->wheels;
    }

    /**
     * @param int $wheels
     */
    public function setWheels(int $wheels): void
    {
        $this->wheels = $wheels;
    }


}