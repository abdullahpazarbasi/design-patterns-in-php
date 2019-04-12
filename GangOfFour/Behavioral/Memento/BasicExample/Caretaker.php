<?php
/**
 * User: abdullah
 * Date: 01.01.2018
 * Time: 15:15
 */
namespace DesignPatterns\GangOfFour\Behavioral\Memento\BasicExample;

use Exception;

/**
 * Class Caretaker
 */
class Caretaker
{

    /**
     * LIFO
     * @var MementoInterface[]
     */
    private $mementos = [];

    /**
     * @var Originator
     */
    private $originator;

    /**
     * @param Originator $originator
     * @return void
     * @throws Exception
     */
    public function __construct(Originator $originator)
    {
        $this->originator = $originator;
        $originator->setCaretaker($this);
    }

    /**
     * @return void
     * @throws Exception
     */
    public function save()
    {
        $this->mementos[] = $this->originator->save();
    }

    /**
     * @return void
     */
    public function rollback()
    {
        if (!count($this->mementos)) {
            return;
        }
        $this->originator->restore(array_pop($this->mementos));
    }

    /**
     * @return MementoInterface[]
     */
    public function getHistory()
    {
        return $this->mementos;
    }

}