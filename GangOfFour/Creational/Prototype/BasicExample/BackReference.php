<?php
/**
 * User: abdullah
 * Date: 27.07.2018
 * Time: 12:15
 */
namespace DesignPatterns\GangOfFour\Creational\Prototype\BasicExample;

/**
 * Class BackReference
 */
class BackReference
{

    /**
     * @var BasicExamplePrototype
     */
    public $oPrototype;

    /**
     * BackReference kurucu.
     *
     * @param BasicExamplePrototype $oPrototype
     * @return void
     */
    public function __construct(BasicExamplePrototype $oPrototype)
    {
        $this->oPrototype = $oPrototype;
    }

}