<?php
/**
 * User: abdullah
 * Date: 01.01.2018
 * Time: 15:15
 */
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