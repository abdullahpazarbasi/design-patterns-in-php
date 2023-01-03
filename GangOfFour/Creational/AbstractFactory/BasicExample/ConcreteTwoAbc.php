<?php

namespace DesignPatterns\GangOfFour\Creational\AbstractFactory\BasicExample;

class ConcreteTwoAbc implements AbcInterface
{

    public function operateJkl(): string
    {
        return "Jkl from Two";
    }

}