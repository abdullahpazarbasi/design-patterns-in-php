<?php

namespace DesignPatterns\GangOfFour\Creational\AbstractFactory\BasicExample\Tests;

use DesignPatterns\GangOfFour\Creational\AbstractFactory\BasicExample\Client;
use PHPUnit\Framework\TestCase;

class AbstractFactoryBasicExampleTest extends TestCase
{

    public function testSoyutFabrika(): void
    {
        $messages = Client::run();
        $this->assertSame("Jkl from One\nMno from One\nJkl from Two\nMno from Two", $messages);
    }

}