<?php
/**
 * User: abdullah
 * Date: 01.01.2018
 * Time: 15:15
 */
namespace DesignPatterns\GangOfFour\Structural\Adapter\StorageExample;

/**
 * Interface StorageTargetInterface
 */
interface StorageTargetInterface
{

    /**
     * @return StorageTargetInterface
     */
    public function connect(): StorageTargetInterface;

    /**
     * @param string $sUri
     * @return null|string
     */
    public function read(string $sUri): ?string;

    /**
     * @param string $sUri
     * @param string $sContent
     * @return StorageTargetInterface
     */
    public function write(string $sUri, string $sContent): StorageTargetInterface;

}