<?php

namespace DesignPatterns\GangOfFour\Behavioral\Iterator\CarListIteratorExample;

/**
 * Class CarList
 */
final class CarList implements CarListIteratorInterface
{

    /**
     * @var CarAbstract[]
     */
    private array $aCars = [];

    /**
     * @var int
     */
    private int $iCurrentIndex = 0;

    /**
     * Return the current element
     * @link http://php.net/manual/en/iterator.current.php
     * @return CarAbstract
     */
    public function current(): CarAbstract
    {
        return $this->aCars[$this->iCurrentIndex];
    }

    /**
     * Move forward to next element
     * @link http://php.net/manual/en/iterator.next.php
     * @return void Any returned value is ignored.
     */
    public function next(): void
    {
        $this->iCurrentIndex++;
    }

    /**
     * Return the key of the current element
     * @link http://php.net/manual/en/iterator.key.php
     * @return int on success, or null on failure.
     */
    public function key(): int
    {
        return $this->iCurrentIndex;
    }

    /**
     * Checks if current position is valid
     * @link http://php.net/manual/en/iterator.valid.php
     * @return bool The return value will be casted to boolean and then evaluated.
     * Returns true on success or false on failure.
     */
    public function valid(): bool
    {
        return isset($this->aCars[$this->iCurrentIndex]);
    }

    /**
     * Rewind the Iterator to the first element
     * @link http://php.net/manual/en/iterator.rewind.php
     * @return void Any returned value is ignored.
     */
    public function rewind(): void
    {
        $this->iCurrentIndex = 0;
    }

    /**
     * Listedeki arabaları sayar.
     *
     * @link http://php.net/manual/en/countable.count.php
     * @return int The custom count as an integer.
     * The return value is cast to an integer.
     */
    public function count(): int
    {
        return count($this->aCars);
    }

    /**
     * Listede araba arar ve bulunca indisini döndürür. Bulamaz ise -1 döndürür.
     *
     * @param CarAbstract $oCar
     * @return int
     */
    public function search(CarAbstract $oCar): int
    {
        return (array_search($oCar, $this->aCars, TRUE) !== FALSE) ?: -1;
    }

    /**
     * Arabanın listede olup olmadığını bildirir.
     *
     * @param CarAbstract $oCar
     * @return bool
     */
    public function has(CarAbstract $oCar): bool
    {
        return ($this->search($oCar) > -1);
    }

    /**
     * Listeye araba ekler.
     *
     * @param CarAbstract $oCar
     * @return static
     */
    public function add(CarAbstract $oCar): CarList
    {
        $this->aCars[] = $oCar;
        return $this;
    }

    /**
     * Listeden araba siler.
     *
     * @param CarAbstract $oCar
     * @return static
     */
    public function remove(CarAbstract $oCar): CarList
    {
        $iIndex = $this->search($oCar);
        if ($iIndex > -1) {
            unset($this->aCars[$iIndex]);
            $this->aCars = array_values($this->aCars);
        }
        return $this;
    }

}