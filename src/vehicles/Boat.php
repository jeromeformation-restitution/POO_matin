<?php

namespace src\vehicles;

class Boat extends Vehicle
{
    /**
     * @var array
     */
    private $Harbor;

    public function __construct(string $brand, string $motor, array $Harbor)
    {
        parent::__construct($brand, $motor,0);
        $this->Harbor = $Harbor;
    }

    /**
     * @return array
     */
    public function getHarbor(): array
    {
        return $this->Harbor;
    }

    /**
     * @param array $Harbor
     */
    public function setHarbor(array $Harbor): void
    {
        $this->Harbor = $Harbor;
    }



}