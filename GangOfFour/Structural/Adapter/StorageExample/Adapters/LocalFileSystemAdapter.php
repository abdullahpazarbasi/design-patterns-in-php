<?php
/**
 * User: abdullah
 * Date: 01.01.2018
 * Time: 15:15
 */
namespace DesignPatterns\GangOfFour\Structural\Adapter\StorageExample\Adapters;

use DesignPatterns\GangOfFour\Structural\Adapter\StorageExample\External\LocalFileSystemAdaptee;
use DesignPatterns\GangOfFour\Structural\Adapter\StorageExample\StorageTargetInterface;

/**
 * Class LocalFileSystemAdapter
 */
class LocalFileSystemAdapter implements StorageTargetInterface
{

    /**
     * @var null|LocalFileSystemAdaptee
     */
    private $oAdapteeInstance;

    /**
     * LocalFileSystemAdapter kurucu
     *
     * @param LocalFileSystemAdaptee $oAdaptee
     */
    public function __construct(LocalFileSystemAdaptee $oAdaptee)
    {
        $this->oAdapteeInstance = $oAdaptee;
    }

    /**
     * @return StorageTargetInterface
     */
    public function connect(): StorageTargetInterface
    {
        // Bağlı zaten
        return $this;
    }

    /**
     * @param string $sUri
     * @return null|string
     */
    public function read(string $sUri): ?string
    {
        $sAbsoluteDirectory = '/path/to';
        $sFileName = 'filename';
        $sFileExtension = 'ext';
        //
        // Birtakım prosedür
        //
        return $this->oAdapteeInstance->read($sAbsoluteDirectory, $sFileName, $sFileExtension);
    }

    /**
     * @param string $sUri
     * @param string $sContent
     * @return StorageTargetInterface
     */
    public function write(string $sUri, string $sContent): StorageTargetInterface
    {
        $sAbsoluteDirectory = '/path/to';
        $sFileName = 'filename';
        $sFileExtension = 'ext';
        //
        // Birtakım prosedür
        //
        $this->oAdapteeInstance->write($sAbsoluteDirectory, $sFileName, $sFileExtension, $sContent);
        return $this;
    }

}