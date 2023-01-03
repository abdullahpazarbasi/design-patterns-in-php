<?php

namespace DesignPatterns\GangOfFour\Behavioral\Command\BasicExample;

/**
 * Class AbcConcreteCommand
 */
class AbcConcreteCommand extends AbstractCommand
{

    /**
     * @return void
     */
    public function execute()
    {
        $this->commandee->doAbc();
    }

}