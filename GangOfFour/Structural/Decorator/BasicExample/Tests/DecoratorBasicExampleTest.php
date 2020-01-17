<?php
/**
 * User: abdullah
 * Date: 14.12.2019
 * Time: 21:25
 */
namespace DesignPatterns\GangOfFour\Structural\Decorator\BasicExample\Tests;

use DesignPatterns\GangOfFour\Structural\Decorator\BasicExample\Client;
use PHPUnit\Framework\TestCase;

/**
 * Class DecoratorBasicExampleTest
 */
class DecoratorBasicExampleTest extends TestCase
{

    /**
     * @return void
     */
    public function testFullDecoration()
    {
        $client = new Client();
        $fullyDecoratedComponent = $client->getFullyDecoratedComponent();
        $expectedSomeData = '[ ( my sentence ) ]';
        $actualSomeData = $fullyDecoratedComponent->getSomeData();
        $this->assertEquals($expectedSomeData, $actualSomeData);
    }

}
