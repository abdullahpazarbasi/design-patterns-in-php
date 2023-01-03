<?php

namespace DesignPatterns\GangOfFour\Creational\Prototype\BasicExample;

class BackReference
{

    public BasicExamplePrototype $prototype;

    /**
     * BackReference kurucu.
     */
    public function __construct(BasicExamplePrototype $prototype)
    {
        $this->prototype = $prototype;
    }

}