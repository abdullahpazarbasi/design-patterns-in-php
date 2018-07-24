<?php
/**
 * User: abdullah
 * Date: 01.01.2018
 * Time: 15:15
 */
namespace DesignPatterns\GangOfFour\Structural\Adapter\StorageExample\External;

/**
 * Class LocalFileSystemAdaptee
 */
class LocalFileSystemAdaptee
{

    /**
     * @param string $sAbsoluteDirectory
     * @param string $sFileName
     * @param string $sFileExtension
     * @return string
     */
    public function read($sAbsoluteDirectory, $sFileName, $sFileExtension)
    {
        $sFilePath = $this->prepareFilePath($sAbsoluteDirectory, $sFileName, $sFileExtension);
        $sFileContent = '';
        //
        // Birtakım prosedür
        //
        $sFileContent = 'Abidik gubidik cart curt'; // Mesela
        return $sFileContent;
    }

    /**
     * @param $sAbsoluteDirectory
     * @param $sFileName
     * @param $sFileExtension
     * @param $sFileContent
     * @return bool
     */
    public function write($sAbsoluteDirectory, $sFileName, $sFileExtension, $sFileContent)
    {
        $sFilePath = $this->prepareFilePath($sAbsoluteDirectory, $sFileName, $sFileExtension);
        //
        // Birtakım prosedür
        //
        return TRUE;
    }

    /**
     * @param string $sAbsoluteDirectory
     * @param string $sFileName
     * @param string $sFileExtension
     * @return string
     */
    private function prepareFilePath($sAbsoluteDirectory, $sFileName, $sFileExtension)
    {
        return $sAbsoluteDirectory . DIRECTORY_SEPARATOR. $sFileName . '.' . $sFileExtension;
    }


}