<?php

namespace App;

class RoadAddress
{
    private $roadName;
    private $isBasement;
    private $buildingNumber;

    public function __construct(
        string $roadName = null,
        bool $isBasement = null,
        string $buildingNumber = null
    ) {
        $this->roadName = $roadName;
        $this->isBasement = $isBasement;
        $this->buildingNumber = $buildingNumber;
    }

    public function getRoadName()
    {
        return $this->roadName;
    }

    public function isBasement()
    {
        return $this->isBasement;
    }

    public function getBuildingNumber()
    {
        return $this->buildingNumber;
    }

    public function isEqualTo(RoadAddress $other)
    {
        return $this->roadName === $other->getRoadName()
            && $this->isBasement === $other->isBasement()
            && $this->buildingNumber === $other->getBuildingNumber();
    }

    public function toArray()
    {
        return [
            'roadName' => $this->roadName,
            'isBasement' => $this->isBasement,
            'buildingNumber' => $this->buildingNumber,
        ];
    }
}
