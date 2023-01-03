<?php

namespace DesignPatterns\GangOfFour\Creational\FactoryMethod\BasicExample\Tests;

use DesignPatterns\GangOfFour\Creational\FactoryMethod\BasicExample\Client;
use PHPUnit\Framework\TestCase;

class FactoryMethodBasicExampleTest extends TestCase
{

    public function testFabrikaMetodu(): void
    {
        $messages = Client::run();
        $this->assertSame('AbcConcreteXyz işlemi tamam.' . PHP_EOL . 'DefConcreteXyz işlemi tamam.', $messages);
    }

}