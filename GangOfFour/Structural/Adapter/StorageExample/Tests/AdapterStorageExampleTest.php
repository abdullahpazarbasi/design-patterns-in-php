<?php
/**
 * User: abdullah
 * Date: 01.01.2018
 * Time: 15:15
 */
namespace DesignPatterns\GangOfFour\Structural\Adapter\StorageExample\Tests;

use DesignPatterns\GangOfFour\Structural\Adapter\StorageExample\Adapters\FtpAdapter;
use DesignPatterns\GangOfFour\Structural\Adapter\StorageExample\Adapters\LocalFileSystemAdapter;
use DesignPatterns\GangOfFour\Structural\Adapter\StorageExample\External\FtpAdaptee;
use DesignPatterns\GangOfFour\Structural\Adapter\StorageExample\External\LocalFileSystemAdaptee;
use PHPUnit\Framework\TestCase;

/**
 * Class AdapterStorageExampleTest
 */
class AdapterStorageExampleTest extends TestCase
{

    /**
     * @return void
     */
    public function testKopyalamadanSonraKaynakDosyaIcerigiIleHedefDosyaIcerigiAyniMi()
    {
        $sSourceUri = 'myuri:path/to/filename.ext';
        $sTargetUri = 'myuri:path/to/filename.ext';
        //
        $oLocalFileSystemAdaptee = new LocalFileSystemAdaptee();
        $oSource = new LocalFileSystemAdapter($oLocalFileSystemAdaptee);
        $oFtpAdaptee = new FtpAdaptee();
        $oTarget = new FtpAdapter($oFtpAdaptee);
        $sSourceFileContent = $oSource->connect()->read($sSourceUri);
        $oTarget->connect()->write($sTargetUri, $sSourceFileContent);
        $sTargetFileContent = $oTarget->read($sTargetUri);
        $this->assertSame($sSourceFileContent, $sTargetFileContent);
    }

}