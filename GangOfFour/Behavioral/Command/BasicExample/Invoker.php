<?php

namespace DesignPatterns\GangOfFour\Behavioral\Command\BasicExample;

/**
 * Class Invoker
 */
class Invoker
{

    /**
     * @var AbstractCommand
     */
    protected $command;

    /**
     * @param AbstractCommand $command
     * @return void
     */
    public function __construct(AbstractCommand $command)
    {
        $this->command = $command;
    }

    /**
     * @return void
     */
    public function run()
    {
        $this->command->execute();
    }

}