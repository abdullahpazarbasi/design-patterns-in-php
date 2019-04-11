<?php
/**
 * User: abdullah
 * Date: 01.01.2018
 * Time: 15:15
 */
namespace DesignPatterns\GangOfFour\Behavioral\Iterator\CarListIteratorExample\Tests;

use DesignPatterns\GangOfFour\Behavioral\Iterator\CarListIteratorExample\CarList;
use DesignPatterns\GangOfFour\Behavioral\Iterator\CarListIteratorExample\ClassicCar;
use DesignPatterns\GangOfFour\Behavioral\Iterator\CarListIteratorExample\SportCar;
use PHPUnit\Framework\TestCase;

/**
 * Class IteratorCarListIteratorExampleTest
 */
class IteratorCarListIteratorExampleTest extends TestCase
{

    /**
     * @return void
     */
    public function testListeyeEklenenBulunabiliyorMu()
    {
        $oMyCar = new ClassicCar('Ford', 'Thunderbird');
        $oCarList = new CarList();
        $oCarList->add($oMyCar);
        $oCarList->add(new SportCar('Dodge', 'Viper'));
        $this->assertGreaterThan(-1, $oCarList->search($oMyCar));
    }

    /**
     * @return void
     */
    public function testListeUzerindeIterasyonCalisiyorMu()
    {
        $oCarList = new CarList();
        $oCarList->add(new ClassicCar('Ford', 'Thunderbird'));
        $oCarList->add(new SportCar('Dodge', 'Viper'));
        $oCarList->add(new SportCar('Ferrari', 'Testarossa'));
        $aCarNames = [];
        foreach ($oCarList as $oCurrentCar) {
            $aCarNames[] = $oCurrentCar->getName();
        }
        $this->assertSame(['Ford Thunderbird', 'Dodge Viper', 'Ferrari Testarossa'], $aCarNames);
    }

}