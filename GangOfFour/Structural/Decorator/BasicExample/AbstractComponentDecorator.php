<?php
/**
 * User: abdullah
 * Date: 13.12.2019
 * Time: 20:28
 */
namespace DesignPatterns\GangOfFour\Structural\Decorator\BasicExample;

/**
 * Class AbstractComponentDecorator
 */
abstract class AbstractComponentDecorator implements ComponentInterface
{

    /**
     * @var ComponentInterface
     */
    protected $component;

    /**
     * @param ComponentInterface $component
     * @return void
     */
    public function __construct(ComponentInterface $component)
    {
        $this->component = $component;
    }

}
