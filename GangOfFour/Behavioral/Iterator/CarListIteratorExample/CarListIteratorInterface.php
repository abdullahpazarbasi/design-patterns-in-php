<?php
/**
 * User: abdullah
 * Date: 01.01.2018
 * Time: 15:15
 */
namespace DesignPatterns\GangOfFour\Behavioral\Iterator\CarListIteratorExample;

/**
 * Interface CarListIteratorInterface
 */
interface CarListIteratorInterface extends \Countable, \Iterator
{

    /**
     * Listede araba arar ve bulunca indisini döndürür. Bulamaz ise -1 döndürür.
     *
     * @param CarAbstract $oCar
     * @return int
     */
    public function search(CarAbstract $oCar): int;

    /**
     * Arabanın listede olup olmadığını bildirir.
     *
     * @param CarAbstract $oCar
     * @return bool
     */
    public function has(CarAbstract $oCar): bool;

    /**
     * Listeye araba ekler.
     *
     * @param CarAbstract $oCar
     * @return CarList
     */
    public function add(CarAbstract $oCar): CarList;

    /**
     * Listeden araba siler.
     *
     * @param CarAbstract $oCar
     * @return CarList
     */
    public function remove(CarAbstract $oCar): CarList;

}