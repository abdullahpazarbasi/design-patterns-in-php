<?php

namespace DesignPatterns\GangOfFour\Creational\Builder\BuildingExample\Entities;

class Foundation
{
    protected float $height;

    public function __construct(float $height)
    {
        $this->height = $height;
    }
}
