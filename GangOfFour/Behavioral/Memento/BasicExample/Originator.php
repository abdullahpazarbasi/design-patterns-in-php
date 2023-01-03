<?php

namespace DesignPatterns\GangOfFour\Behavioral\Memento\BasicExample;

use Exception;

/**
 * Class Originator
 */
class Originator
{

    /**
     * @var Caretaker
     */
    protected $caretaker;

    /**
     * @var mixed
     */
    protected $data1;

    /**
     * @var mixed
     */
    protected $data2;

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
    }

    /**
     * @param Caretaker $caretaker
     * @return void
     * @throws Exception
     */
    public function setCaretaker(Caretaker $caretaker)
    {
        $this->caretaker = $caretaker;
        $this->caretaker->save();
    }

    /**
     * @param mixed $data1
     * @return void
     * @throws Exception
     */
    public function setData1($data1)
    {
        $this->data1 = $data1;
        $this->caretaker->save();
    }

    /**
     * @param mixed $data2
     * @return void
     * @throws Exception
     */
    public function setData2($data2)
    {
        $this->data2 = $data2;
        $this->caretaker->save();
    }

    /**
     * @return ConcreteMemento
     * @throws Exception
     */
    public function save()
    {
        return new ConcreteMemento($this->data1, $this->data2);
    }

    /**
     * @param MementoInterface $memento
     * @return void
     */
    public function restore(MementoInterface $memento)
    {
        $this->data1 = $memento->getData1();
        $this->data2 = $memento->getData2();
    }

}