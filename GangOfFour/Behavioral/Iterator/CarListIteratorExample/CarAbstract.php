<?php
/**
 * User: abdullah
 * Date: 01.01.2018
 * Time: 15:15
 */
namespace DesignPatterns\GangOfFour\Behavioral\Iterator\CarListIteratorExample;

/**
 * Class CarAbstract
 */
abstract class CarAbstract
{

    /**
     * @var string|null
     */
    private $sBrand;

    /**
     * @var string|null
     */
    private $sModel;

    /**
     * CarAbstract constructor.
     *
     * @param null|string $sBrand
     * @param null|string $sModel
     */
    public function __construct(?string $sBrand = NULL, ?string $sModel = NULL)
    {
        if ($sBrand !== NULL) {
            $this->setBrand($sBrand);
        }
        if ($sModel !== NULL) {
            $this->setModel($sModel);
        }
    }

    /**
     * @return null|string
     */
    public function getBrand(): ?string
    {
        return $this->sBrand;
    }

    /**
     * @param null|string $sBrand
     * @return static
     */
    public function setBrand(?string $sBrand): CarAbstract
    {
        $this->sBrand = $sBrand;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getModel(): ?string
    {
        return $this->sModel;
    }

    /**
     * @param null|string $sModel
     * @return static
     */
    public function setModel(?string $sModel): CarAbstract
    {
        $this->sModel = $sModel;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getName(): ?string
    {
        $sName = $this->getBrand();
        if ($sName !== NULL) {
            $sTmp = $this->getModel();
            if ($sTmp !== NULL) {
                $sName .= ' ' . $sTmp;
            }
        }
        return $sName;
    }

}