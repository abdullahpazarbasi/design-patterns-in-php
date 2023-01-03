<?php

namespace DesignPatterns\GangOfFour\Structural\Adapter\StorageExample\External;

/**
 * Class FtpAdaptee
 */
class FtpAdaptee
{

    /**
     * @param string $sHost
     * @param int $iPort
     * @param int $iTimeout
     * @return bool
     */
    public function connect($sHost, $iPort, $iTimeout)
    {
        //
        // Birtakım prosedür
        //
        return TRUE;
    }

    /**
     * @param string $sRemoteFilePath
     * @return string
     */
    public function get($sRemoteFilePath)
    {
        $sFileContent = '';
        //
        // Birtakım prosedür
        //
        $sFileContent = 'Abidik gubidik cart curt'; // Mesela
        return $sFileContent;
    }

    /**
     * @param string $sRemoteFilePath
     * @param string $sFileContent
     * @return bool
     */
    public function put($sRemoteFilePath, $sFileContent)
    {
        //
        // Birtakım prosedür
        //
        return TRUE;
    }

}