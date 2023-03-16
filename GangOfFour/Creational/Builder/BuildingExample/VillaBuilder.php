<?php

namespace DesignPatterns\GangOfFour\Creational\Builder\BuildingExample;

use DesignPatterns\GangOfFour\Creational\Builder\BuildingExample\Entities\BuildingInterface;
use DesignPatterns\GangOfFour\Creational\Builder\BuildingExample\Entities\FloorInterface;
use DesignPatterns\GangOfFour\Creational\Builder\BuildingExample\Entities\Foundation;
use DesignPatterns\GangOfFour\Creational\Builder\BuildingExample\Entities\StandardElevator;
use DesignPatterns\GangOfFour\Creational\Builder\BuildingExample\Entities\Villa;

class VillaBuilder implements BuildingBuilderInterface
{
    protected ?Foundation $foundation;
    protected array $elevators;

    public function startNewBuilding(): void
    {
        $this->foundation = null;
        $this->elevators = [];
    }

    public function layFoundation(float $height): void
    {
        $this->foundation = new Foundation($height);
    }

    public function addFloor(FloorInterface $floor): void
    {
        // TODO: Implement addFloor() method.
    }

    public function addElevator(): void
    {
        $this->elevators[] = new StandardElevator();
    }

    public function constructRoof(): void
    {
        // TODO: Implement constructRoof() method.
    }

    public function build(): BuildingInterface
    {
        return new Villa();
    }
}
