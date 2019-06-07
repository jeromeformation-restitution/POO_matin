<?php



namespace src\vehicles;


class Garage
{
    /**
     * @var Vehicle[]
     */
    private $vehicle;

    public function __construct()
    {
        $this->vehicle = [];// On initialise le tableau à vide
    }

    public function addVehicle(Vehicle $vehicle)
    {
        $this->vehicle[] =$vehicle;


    }

    /**
     * @return Vehicle[]
     */
    public function getVehicle(): array
    {
        return $this->vehicle;
    }

    /**
     * @param Vehicle[] $vehicle
     */
    public function setVehicle(array $vehicle): void
    {
        $this->vehicle = $vehicle;
    }



}