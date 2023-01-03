<?php

namespace DesignPatterns\GangOfFour\Creational\Prototype\BasicExample;

/**
 * Prototip olarak ele alınacak olan nesnenin sınıfı
 */
class BasicExamplePrototype extends BasicExampleParent
{

    public int $ownScalarPublicProperty;

    public array $ownArrayPublicProperty;

    public \stdClass $objectReferencePublicProperty;

    public int $piScalarReferencePublicProperty;

    public BackReference $objectCircularReferencePublicProperty;

    /**
     * BasicExamplePrototype kurucu.
     */
    public function __construct()
    {
        parent::__construct();
        $this->ownScalarPublicProperty = 99;
        $this->ownArrayPublicProperty = [ 'apple', 'banana' ];
        $this->objectReferencePublicProperty = new \stdClass();
        $this->piScalarReferencePublicProperty = &$this->ownScalarPublicProperty;
        $this->objectCircularReferencePublicProperty = new BackReference($this);
    }

    /**
     * Temel klonlamadan sonra çağrılan metod.
     */
    public function __clone(): void
    {
        $this->objectReferencePublicProperty = clone $this->objectReferencePublicProperty;
        $this->objectCircularReferencePublicProperty = clone $this->objectCircularReferencePublicProperty;
        $this->objectCircularReferencePublicProperty->prototype = $this;
    }

}