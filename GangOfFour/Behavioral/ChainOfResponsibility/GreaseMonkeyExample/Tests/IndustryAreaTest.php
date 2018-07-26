<?php
/**
 * User: abdullah
 * Date: 01.01.2018
 * Time: 15:15
 */
namespace DesignPatterns\GangOfFour\Behavioral\ChainOfResponsibility\GreaseMonkeyExample\Tests;

use DesignPatterns\GangOfFour\Behavioral\ChainOfResponsibility\GreaseMonkeyExample\Cars\FordCar;
use DesignPatterns\GangOfFour\Behavioral\ChainOfResponsibility\GreaseMonkeyExample\Cars\MitsubishiCar;
use DesignPatterns\GangOfFour\Behavioral\ChainOfResponsibility\GreaseMonkeyExample\GreaseMonkeys\BodyworkMechanicsConcreteHandler;
use DesignPatterns\GangOfFour\Behavioral\ChainOfResponsibility\GreaseMonkeyExample\GreaseMonkeys\FordEngineMechanicsConcreteHandler;
use DesignPatterns\GangOfFour\Behavioral\ChainOfResponsibility\GreaseMonkeyExample\GreaseMonkeys\FordGearBoxMechanicsConcreteHandler;
use DesignPatterns\GangOfFour\Behavioral\ChainOfResponsibility\GreaseMonkeyExample\GreaseMonkeys\MitsubishiEngineMechanicsConcreteHandler;
use DesignPatterns\GangOfFour\Behavioral\ChainOfResponsibility\GreaseMonkeyExample\GreaseMonkeys\MitsubishiGearBoxMechanicsConcreteHandler;
use PHPUnit\Framework\TestCase;

/**
 * Class IndustryAreaTest
 */
class IndustryAreaTest extends TestCase
{

    /**
     * @return void
     */
    public function testArabalarTamirEdiliyorMu()
    {
        // Ele alıcılar oluşturuluyor
        $oFordEngineMechanics = new FordEngineMechanicsConcreteHandler();
        $oMitsubishiEngineMechanics = new MitsubishiEngineMechanicsConcreteHandler();
        $oFordGearBoxMechanics = new FordGearBoxMechanicsConcreteHandler();
        $oMitsubishiGearBoxMechanics = new MitsubishiGearBoxMechanicsConcreteHandler();
        $oBodyworkMechanics = new BodyworkMechanicsConcreteHandler();
        // Zincirleme
        $oFordEngineMechanics
            ->setNext($oMitsubishiEngineMechanics)
            ->setNext($oFordGearBoxMechanics)
            ->setNext($oMitsubishiGearBoxMechanics)
            ->setNext($oBodyworkMechanics);
        //
        $aStatuses = [];
        $oFordCar = new FordCar(FALSE, FALSE, FALSE);
        $oMitsubishiCar = new MitsubishiCar(TRUE, FALSE, FALSE);
        foreach ([$oFordCar, $oMitsubishiCar] as $oCurrentCar) {
            $oFordEngineMechanics->handle($oCurrentCar);
            $aStatuses[] = $oCurrentCar->getStatus();
        }
        $this->assertSame([
            'FordCar: Motor sağlıklı, Şanzıman sağlıklı, Kaporta sağlıklı',
            'MitsubishiCar: Motor sağlıklı, Şanzıman sağlıklı, Kaporta sağlıklı'
        ], $aStatuses);
    }

}