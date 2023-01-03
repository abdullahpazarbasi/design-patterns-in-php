<?php

namespace DesignPatterns\GangOfFour\Behavioral\Command\BasicExample;

/**
 * Class AbstractCommand
 */
abstract class AbstractCommand
{

    /**
     * @var Commandee
     */
    protected $commandee;

    /**
     * @param Commandee $commandee
     * @return void
     */
    public function __construct(Commandee $commandee)
    {
        $this->commandee = $commandee;
    }

    /**
     * @return void
     */
    abstract public function execute();

}