<?php

namespace DesignPatterns\GangOfFour\Behavioral\Mediator\BasicExample;

use DesignPatterns\Lib\MessageQueue\MessageQueue;

/**
 * Class ConcreteMediator
 */
class ConcreteMediator implements MediatorInterface
{

    /**
     * @var AbcConcreteColleague
     */
    private $abcColleague;

    /**
     * @var DefConcreteColleague
     */
    private $defColleague;

    /**
     * @var GhiConcreteColleague
     */
    private $ghiColleague;

    /**
     * @param AbcConcreteColleague $abcColleague
     * @param DefConcreteColleague $defColleague
     * @param GhiConcreteColleague $ghiColleague
     * @return void
     */
    public function __construct(AbcConcreteColleague $abcColleague, DefConcreteColleague $defColleague, GhiConcreteColleague $ghiColleague)
    {
        $this->abcColleague = $abcColleague;
        $abcColleague->setMediator($this);
        $this->defColleague = $defColleague;
        $defColleague->setMediator($this);
        $this->ghiColleague = $ghiColleague;
        $ghiColleague->setMediator($this);
    }

    /**
     * @param MessageQueue $oMessageQueue
     * @return void
     */
    public function doRstJobOfAbcConcreteColleague($oMessageQueue)
    {
        $this->abcColleague->doRstJob($oMessageQueue);
        $this->doUvwJobOfDefConcreteColleague($oMessageQueue);
    }

    /**
     * @param MessageQueue $oMessageQueue
     * @return void
     */
    public function doUvwJobOfDefConcreteColleague($oMessageQueue)
    {
        $this->defColleague->doUvwJob($oMessageQueue);
        $this->doXyzJobOfGhiConcreteColleague($oMessageQueue);
    }

    /**
     * @param MessageQueue $oMessageQueue
     * @return void
     */
    public function doXyzJobOfGhiConcreteColleague($oMessageQueue)
    {
        $this->ghiColleague->doXyzJob($oMessageQueue);
    }

}