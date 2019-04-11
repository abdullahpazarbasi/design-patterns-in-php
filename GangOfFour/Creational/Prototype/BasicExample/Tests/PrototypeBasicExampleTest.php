<?php
/**
 * User: abdullah
 * Date: 27.07.2018
 * Time: 11:50
 */
namespace DesignPatterns\GangOfFour\Creational\Prototype\BasicExample\Tests;

use DesignPatterns\GangOfFour\Creational\Prototype\BasicExample\BackReference;
use DesignPatterns\GangOfFour\Creational\Prototype\BasicExample\BasicExamplePrototype;
use PHPUnit\Framework\TestCase;

/**
 * Class PrototypeBasicExampleTest
 */
class PrototypeBasicExampleTest extends TestCase
{

    /**
     * @return void
     */
    public function testPrototipIleKopyaAyniDegilHeMi()
    {
        $o1 = new BasicExamplePrototype();
        $o2 = clone $o1;
        $this->assertNotSame($o1, $o2);
    }

    /**
     * @return void
     */
    public function testPublicArrayPropertyAynenKaliyorMu()
    {
        $o1 = new BasicExamplePrototype();
        $o2 = clone $o1;
        $this->assertSame($o1->aOwnArrayPublicProperty, $o2->aOwnArrayPublicProperty);
    }

    /**
     * @return void
     */
    public function testPublicScalarReferenceAynenKaliyorMu()
    {
        $o1 = new BasicExamplePrototype();
        $o2 = clone $o1;
        $o1->iOwnScalarPublicProperty = 100;
        $this->assertSame(100, $o2->iOwnScalarPublicProperty);
    }

    /**
     * @return void
     */
    public function testPublicCircularBackReferenceAynenKaliyorMu()
    {
        $o1 = new BasicExamplePrototype();
        $o2 = clone $o1;
        $this->assertEquals($o1->oObjectCircularReferencePublicProperty, $o2->oObjectCircularReferencePublicProperty);
    }

    /**
     * @return void
     */
    public function testPublicCircularBackReferenceOrijinaleBagliMi()
    {
        $o1 = new BasicExamplePrototype();
        $o2 = clone $o1;
        $this->assertEquals($o1->oObjectCircularReferencePublicProperty->oPrototype, $o2->oObjectCircularReferencePublicProperty->oPrototype);
    }

    /**
     * @return void
     */
    public function testPublicScalarParentPropertyAynenKaliyorMu()
    {
        $o1 = new BasicExamplePrototype();
        $o2 = clone $o1;
        $this->assertSame($o1->iParentScalarPublicProperty, $o2->iParentScalarPublicProperty);
    }

    /**
     * @return void
     */
    public function testPrivateScalarParentPropertyAynenKaliyorMu()
    {
        $o1 = new BasicExamplePrototype();
        $o2 = clone $o1;
        $this->assertSame($o1->getParentScalarPrivateProperty(), $o2->getParentScalarPrivateProperty());
    }

    /**
     * @return void
     */
    public function testProtectedScalarParentPropertyAynenKaliyorMu()
    {
        $o1 = new BasicExamplePrototype();
        $o2 = clone $o1;
        $this->assertSame($o1->getParentScalarProtectedProperty(), $o2->getParentScalarProtectedProperty());
    }

}