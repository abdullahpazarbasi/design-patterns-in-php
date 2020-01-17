<?php
/**
 * User: abdullah
 * Date: 13.12.2019
 * Time: 20:33
 */
namespace DesignPatterns\GangOfFour\Structural\Decorator\BasicExample\Components;

use DesignPatterns\GangOfFour\Structural\Decorator\BasicExample\ComponentInterface;

/**
 * Class SomeConcreteComponent
 */
class SomeConcreteComponent implements ComponentInterface
{

    /**
     * @var string
     */
    protected $someData;

    /**
     * @param string $someData
     * @return void
     */
    public function __construct(string $someData)
    {
        $this->someData = $someData;
    }

    /**
     * @return string
     */
    public function getSomeData(): string
    {
        return $this->someData;
    }

}
