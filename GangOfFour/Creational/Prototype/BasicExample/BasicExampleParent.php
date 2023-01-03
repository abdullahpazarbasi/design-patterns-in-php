<?php

namespace DesignPatterns\GangOfFour\Creational\Prototype\BasicExample;

abstract class BasicExampleParent
{

    private int $parentScalarPrivateProperty;

    protected int $parentScalarProtectedProperty;

    public int $parentScalarPublicProperty;

    /**
     * BasicExampleParent kurucu.
     */
    public function __construct()
    {
        $this->parentScalarPrivateProperty = 96;
        $this->parentScalarProtectedProperty = 97;
        $this->parentScalarPublicProperty = 98;
    }

    /**
     * @return int
     */
    public function getParentScalarPrivateProperty(): int
    {
        return $this->parentScalarPrivateProperty;
    }

    /**
     * @return int
     */
    public function getParentScalarProtectedProperty(): int
    {
        return $this->parentScalarProtectedProperty;
    }

}