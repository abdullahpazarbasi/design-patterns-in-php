<?php
/**
 * User: abdullah
 * Date: 27.07.2018
 * Time: 14:49
 */
namespace DesignPatterns\GangOfFour\Creational\Prototype\BasicExample;

/**
 * Class BasicExampleParent
 */
abstract class BasicExampleParent
{

    /**
     * @var int
     */
    private $iParentScalarPrivateProperty;

    /**
     * @var int
     */
    protected $iParentScalarProtectedProperty;

    /**
     * @var int
     */
    public $iParentScalarPublicProperty;

    /**
     * BasicExampleParent kurucu.
     *
     * @return void
     */
    public function __construct()
    {
        $this->iParentScalarPrivateProperty = 96;
        $this->iParentScalarProtectedProperty = 97;
        $this->iParentScalarPublicProperty = 98;
    }

    /**
     * @return int
     */
    public function getParentScalarPrivateProperty(): int
    {
        return $this->iParentScalarPrivateProperty;
    }

    /**
     * @param int $iParentScalarPrivateProperty
     * @return BasicExampleParent
     */
    public function setParentScalarPrivateProperty(int $iParentScalarPrivateProperty): BasicExampleParent
    {
        $this->iParentScalarPrivateProperty = $iParentScalarPrivateProperty;
        return $this;
    }

    /**
     * @return int
     */
    public function getParentScalarProtectedProperty(): int
    {
        return $this->iParentScalarProtectedProperty;
    }

    /**
     * @param int $iParentScalarProtectedProperty
     * @return BasicExampleParent
     */
    public function setParentScalarProtectedProperty(int $iParentScalarProtectedProperty): BasicExampleParent
    {
        $this->iParentScalarProtectedProperty = $iParentScalarProtectedProperty;
        return $this;
    }

}