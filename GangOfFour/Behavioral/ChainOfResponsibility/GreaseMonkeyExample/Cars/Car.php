<?php
/**
 * User: abdullah
 * Date: 01.01.2018
 * Time: 15:15
 */
namespace DesignPatterns\GangOfFour\Behavioral\ChainOfResponsibility\GreaseMonkeyExample\Cars;

use DesignPatterns\GangOfFour\Behavioral\ChainOfResponsibility\GreaseMonkeyExample\MechanicalThing;
use DesignPatterns\Lib\Helpers\Misc;

/**
 * Class Car
 */
abstract class Car implements MechanicalThing
{

    /**
     * @var bool Motor sağlıklı mı?
     */
    protected $bIsEngineHealthy = FALSE;

    /**
     * @var bool Şanzıman sağlıklı mı?
     */
    protected $bIsGearBoxHealthy = FALSE;

    /**
     * @var bool Kaporta sağlıklı mı?
     */
    protected $bIsBodyworkHealthy = FALSE;

    /**
     * Car kurucu.
     *
     * @param bool $bIsEngineHealthy
     * @param bool $bIsGearBoxHealthy
     * @param bool $bIsBodyworkHealthy
     */
    public function __construct(?bool $bIsEngineHealthy = NULL, ?bool $bIsGearBoxHealthy = NULL, ?bool $bIsBodyworkHealthy = NULL)
    {
        if ($bIsEngineHealthy !== NULL) {
            $this->setEngineHealthy($bIsEngineHealthy);
        }
        if ($bIsGearBoxHealthy !== NULL) {
            $this->setGearBoxHealthy($bIsGearBoxHealthy);
        }
        if ($bIsBodyworkHealthy !== NULL) {
            $this->setBodyworkHealthy($bIsBodyworkHealthy);
        }
    }

    /**
     * @return bool
     */
    public function isEngineHealthy(): bool
    {
        return $this->bIsEngineHealthy;
    }

    /**
     * @param bool $bIsEngineHealthy
     * @return Car
     */
    public function setEngineHealthy(bool $bIsEngineHealthy): Car
    {
        $this->bIsEngineHealthy = $bIsEngineHealthy;
        return $this;
    }

    /**
     * @return bool
     */
    public function isGearBoxHealthy(): bool
    {
        return $this->bIsGearBoxHealthy;
    }

    /**
     * @param bool $bIsGearBoxHealthy
     * @return Car
     */
    public function setGearBoxHealthy(bool $bIsGearBoxHealthy): Car
    {
        $this->bIsGearBoxHealthy = $bIsGearBoxHealthy;
        return $this;
    }

    /**
     * @return bool
     */
    public function isBodyworkHealthy(): bool
    {
        return $this->bIsBodyworkHealthy;
    }

    /**
     * @param bool $bIsBodyworkHealthy
     * @return Car
     */
    public function setBodyworkHealthy(bool $bIsBodyworkHealthy): Car
    {
        $this->bIsBodyworkHealthy = $bIsBodyworkHealthy;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        $asStatus = [];
        $asStatus[] = $this->isEngineHealthy() ? 'Motor sağlıklı' : 'Motor arızalı';
        $asStatus[] = $this->isGearBoxHealthy() ? 'Şanzıman sağlıklı' : 'Şanzıman arızalı';
        $asStatus[] = $this->isBodyworkHealthy() ? 'Kaporta sağlıklı' : 'Kaporta arızalı';
        return Misc::class_basename($this) . ': ' . implode(', ', $asStatus);
    }

}