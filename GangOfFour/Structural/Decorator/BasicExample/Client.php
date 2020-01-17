<?php
/**
 * User: abdullah
 * Date: 13.12.2019
 * Time: 20:45
 */
namespace DesignPatterns\GangOfFour\Structural\Decorator\BasicExample;

use DesignPatterns\GangOfFour\Structural\Decorator\BasicExample\Components\SomeConcreteComponent;
use DesignPatterns\GangOfFour\Structural\Decorator\BasicExample\Decorators\AbcComponentDecorator;
use DesignPatterns\GangOfFour\Structural\Decorator\BasicExample\Decorators\DefComponentDecorator;

/**
 * Class Client
 */
class Client
{

    /**
     * @return ComponentInterface
     */
    public function getFullyDecoratedComponent(): ComponentInterface
    {
        return new DefComponentDecorator(new AbcComponentDecorator(new SomeConcreteComponent('my sentence')));
    }

}
