<?php

namespace DesignPatterns\GangOfFour\Behavioral\Mediator\BasicExample;

/**
 * Class AbstractColleague
 */
abstract class AbstractColleague
{

    /**
     * @var MediatorInterface
     */
    protected $mediator;

    /**
     * @param MediatorInterface $mediator
     */
    public function setMediator(MediatorInterface $mediator)
    {
        $this->mediator = $mediator;
    }

}