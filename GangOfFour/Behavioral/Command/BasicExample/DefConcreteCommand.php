<?php
/**
 * User: abdullah
 * Date: 01.01.2018
 * Time: 15:15
 */
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