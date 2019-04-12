<?php
/**
 * User: abdullah
 * Date: 01.01.2018
 * Time: 15:15
 */
namespace DesignPatterns\GangOfFour\Behavioral\Memento\BasicExample;

use DateTime;
use Exception;

/**
 * Class ConcreteMemento
 */
class ConcreteMemento implements MementoInterface
{

    /**
     * @var mixed
     */
    private $data1;

    /**
     * @var mixed
     */
    private $data2;

    /**
     * @var DateTime
     */
    private $createdAt;

    /**
     * @param mixed $data1
     * @param mixed $data2
     * @return void
     * @throws Exception
     */
    public function __construct($data1, $data2)
    {
        $this->data1 = $data1;
        $this->data2 = $data2;
        $this->createdAt = new DateTime();
    }

    /**
     * @return mixed
     */
    public function getData1()
    {
        return $this->data1;
    }

    /**
     * @return mixed
     */
    public function getData2()
    {
        return $this->data2;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

}