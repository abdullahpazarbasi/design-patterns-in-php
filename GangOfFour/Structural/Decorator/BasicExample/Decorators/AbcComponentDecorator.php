<?php
/**
 * User: abdullah
 * Date: 13.12.2019
 * Time: 20:39
 */
namespace DesignPatterns\GangOfFour\Structural\Decorator\BasicExample\Decorators;

use DesignPatterns\GangOfFour\Structural\Decorator\BasicExample\AbstractComponentDecorator;

/**
 * Class AbcComponentDecorator
 */
class AbcComponentDecorator extends AbstractComponentDecorator
{

    /**
     * @return string
     */
    public function getSomeData(): string
    {
        return '( ' . $this->component->getSomeData() . ' )';
    }

}
