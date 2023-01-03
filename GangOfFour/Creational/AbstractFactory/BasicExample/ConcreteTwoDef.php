<?php

namespace DesignPatterns\GangOfFour\Creational\AbstractFactory\BasicExample;

class ConcreteTwoDef implements DefInterface
{

    public function operateMno(): string
    {
        return "Mno from Two";
    }

}