<?php

namespace DesignPatterns\GangOfFour\Behavioral\Command\BasicExample;

/**
 * Class DefConcreteCommand
 */
class DefConcreteCommand extends AbstractCommand
{

    /**
     * @return void
     */
    public function execute()
    {
        $this->commandee->doDef();
    }

}