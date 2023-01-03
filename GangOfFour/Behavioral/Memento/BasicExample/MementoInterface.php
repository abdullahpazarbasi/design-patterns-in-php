<?php

namespace DesignPatterns\GangOfFour\Behavioral\Memento\BasicExample;

use DateTime;

/**
 * Interface MementoInterface
 */
interface MementoInterface
{

    /**
     * @return mixed
     */
    public function getData1();

    /**
     * @return mixed
     */
    public function getData2();

    /**
     * @return DateTime
     */
    public function getCreatedAt();

}