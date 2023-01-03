<?php

namespace DesignPatterns\GangOfFour\Creational\Prototype\BasicExample\Tests;

use DesignPatterns\GangOfFour\Creational\Prototype\BasicExample\BasicExamplePrototype;
use PHPUnit\Framework\TestCase;

class PrototypeBasicExampleTest extends TestCase
{

    public function testPrototipIleKopyaAyniDegilHeMi(): void
    {
        $o1 = new BasicExamplePrototype();
        $o2 = clone $o1;
        $this->assertNotSame($o1, $o2);
    }

    public function testPublicArrayPropertyAynenKaliyorMu(): void
    {
        $o1 = new BasicExamplePrototype();
        $o2 = clone $o1;
        $this->assertSame($o1->ownArrayPublicProperty, $o2->ownArrayPublicProperty);
    }

    public function testPublicScalarReferenceAynenKaliyorMu(): void
    {
        $o1 = new BasicExamplePrototype();
        $o2 = clone $o1;
        $o1->ownScalarPublicProperty = 100;
        $this->assertSame(100, $o2->ownScalarPublicProperty);
    }

    public function testPublicCircularBackReferenceAynenKaliyorMu(): void
    {
        $o1 = new BasicExamplePrototype();
        $o2 = clone $o1;
        $this->assertEquals($o1->objectCircularReferencePublicProperty, $o2->objectCircularReferencePublicProperty);
    }

    public function testPublicCircularBackReferenceOrijinaleBagliMi(): void
    {
        $o1 = new BasicExamplePrototype();
        $o2 = clone $o1;
        $this->assertEquals($o1->objectCircularReferencePublicProperty->prototype, $o2->objectCircularReferencePublicProperty->prototype);
    }

    public function testPublicScalarParentPropertyAynenKaliyorMu(): void
    {
        $o1 = new BasicExamplePrototype();
        $o2 = clone $o1;
        $this->assertSame($o1->parentScalarPublicProperty, $o2->parentScalarPublicProperty);
    }

    public function testPrivateScalarParentPropertyAynenKaliyorMu(): void
    {
        $o1 = new BasicExamplePrototype();
        $o2 = clone $o1;
        $this->assertSame($o1->getParentScalarPrivateProperty(), $o2->getParentScalarPrivateProperty());
    }

    public function testProtectedScalarParentPropertyAynenKaliyorMu(): void
    {
        $o1 = new BasicExamplePrototype();
        $o2 = clone $o1;
        $this->assertSame($o1->getParentScalarProtectedProperty(), $o2->getParentScalarProtectedProperty());
    }

}
