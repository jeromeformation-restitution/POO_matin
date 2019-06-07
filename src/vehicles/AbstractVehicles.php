<?php

namespace src\vehicles;

abstract class AbstractVehicles implements VehiclesInterface
{
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $fuel;
    /**
     * @var int
     */
    protected $km;

    /**
     * AbstractVehicles constructor.
     * @param string $name
     * @param string $fuel
     * @param int $km
     */
    public function __construct(string $name, string $fuel, ?int $km=0)
    {
        $this->name = $name;
        $this->fuel = $fuel;
        $this->km = $km;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getFuel(): string
    {
        return $this->fuel;
    }

    /**
     * @param string $fuel
     */
    public function setFuel(string $fuel): void
    {
        $this->fuel = $fuel;
    }

    /**
     * @return int
     */
    public function getKm(): int
    {
        return $this->km;
    }

    /**
     * @param int $km
     */
    public function setKm(int $km): void
    {
        $this->km = $km;
    }


}