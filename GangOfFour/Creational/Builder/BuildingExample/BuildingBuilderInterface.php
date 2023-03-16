<?php

namespace DesignPatterns\GangOfFour\Creational\Builder\BuildingExample;

use DesignPatterns\GangOfFour\Creational\Builder\BuildingExample\Entities\BuildingInterface;
use DesignPatterns\GangOfFour\Creational\Builder\BuildingExample\Entities\FloorInterface;

interface BuildingBuilderInterface
{
    public function startNewBuilding(): void;
    public function layFoundation(float $height): void;
    public function addFloor(FloorInterface $floor): void;
    public function addElevator(): void;
    public function constructRoof(): void;
    public function build(): BuildingInterface;
}
