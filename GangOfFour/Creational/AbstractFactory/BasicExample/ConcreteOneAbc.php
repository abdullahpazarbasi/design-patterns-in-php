<?php

namespace DesignPatterns\GangOfFour\Creational\AbstractFactory\BasicExample;

class ConcreteOneAbc implements AbcInterface
{

    public function operateJkl(): string
    {
        return "Jkl from One";
    }

}