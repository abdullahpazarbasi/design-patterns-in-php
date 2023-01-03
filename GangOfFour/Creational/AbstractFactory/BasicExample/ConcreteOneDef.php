<?php

namespace DesignPatterns\GangOfFour\Creational\AbstractFactory\BasicExample;

class ConcreteOneDef implements DefInterface
{

    public function operateMno(): string
    {
        return "Mno from One";
    }

}