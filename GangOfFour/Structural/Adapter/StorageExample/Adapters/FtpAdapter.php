<?php
/**
 * User: abdullah
 * Date: 01.01.2018
 * Time: 15:15
 */
namespace DesignPatterns\GangOfFour\Structural\Adapter\StorageExample\Adapters;

use DesignPatterns\GangOfFour\Structural\Adapter\StorageExample\External\FtpAdaptee;
use DesignPatterns\GangOfFour\Structural\Adapter\StorageExample\StorageTargetInterface;

/**
 * Class FtpAdapter
 */
class FtpAdapter implements StorageTargetInterface
{

    /**
     * @var null|FtpAdaptee
     */
    private $oAdapteeInstance;

    /**
     * FtpAdapter kurucu
     *
     * @param FtpAdaptee $oAdaptee
     */
    public function __construct(FtpAdaptee $oAdaptee)
    {
        $this->oAdapteeInstance = $oAdaptee;
    }

    /**
     * @return StorageTargetInterface
     */
    public function connect(): StorageTargetInterface
    {
        $this->oAdapteeInstance->connect('ftp.myhost.com', 21, 60);
        return $this;
    }

    /**
     * @param string $sUri
     * @return null|string
     */
    public function read(string $sUri): ?string
    {
        $sRemoteFilePath = '';
        //
        // Birtakım prosedür
        //
        $sRemoteFilePath = '/path/to/filename.ext';
        return $this->oAdapteeInstance->get($sRemoteFilePath);
    }

    /**
     * @param string $sUri
     * @param string $sContent
     * @return StorageTargetInterface
     */
    public function write(string $sUri, string $sContent): StorageTargetInterface
    {
        $sRemoteFilePath = '';
        //
        // Birtakım prosedür
        //
        $sRemoteFilePath = '/path/to/filename.ext';
        $this->oAdapteeInstance->put($sRemoteFilePath, $sContent);
        return $this;
    }

}