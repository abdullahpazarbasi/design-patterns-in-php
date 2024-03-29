<?php

namespace DesignPatterns\GangOfFour\Behavioral\Observer\BasicExample;

/**
 * Interface BasicExampleObserverInterface
 */
interface BasicExampleObserverInterface
{

    /**
     * Özneden güncelleme alır.
     *
     * @link http://php.net/manual/en/splobserver.update.php
     * @param BasicExampleSubjectInterface $oSubject
     * @return void
     */
    public function update(BasicExampleSubjectInterface $oSubject);

}