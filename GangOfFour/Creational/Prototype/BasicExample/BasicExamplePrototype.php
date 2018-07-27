<?php
/**
 * User: abdullah
 * Date: 27.07.2018
 * Time: 11:50
 */

namespace DesignPatterns\GangOfFour\Creational\Prototype\BasicExample;

/**
 * Prototip olarak ele alınacak olan nesnenin sınıfı
 *
 * Class BasicExamplePrototype
 */
class BasicExamplePrototype extends BasicExampleParent
{

    /**
     * @var int
     */
    public $iOwnScalarPublicProperty;

    /**
     * @var array
     */
    public $aOwnArrayPublicProperty;

    /**
     * @var object
     */
    public $oObjectReferencePublicProperty;

    /**
     * @var int Reference
     */
    public $piScalarReferencePublicProperty;

    /**
     * @var object
     */
    public $oObjectCircularReferencePublicProperty;

    /**
     * BasicExamplePrototype kurucu.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->iOwnScalarPublicProperty = 99;
        $this->aOwnArrayPublicProperty = [ 'apple', 'banana' ];
        $this->oObjectReferencePublicProperty = new \stdClass();
        $this->piScalarReferencePublicProperty = &$this->iOwnScalarPublicProperty;
        $this->oObjectCircularReferencePublicProperty = new BackReference($this);
    }

    /**
     * Temel klonlamadan sonra çağrılan metod.
     *
     * @return void
     */
    public function __clone()
    {
        $this->oObjectReferencePublicProperty = clone $this->oObjectReferencePublicProperty;
        $this->oObjectCircularReferencePublicProperty = clone $this->oObjectCircularReferencePublicProperty;
        $this->oObjectCircularReferencePublicProperty->oPrototype = $this;
    }

}