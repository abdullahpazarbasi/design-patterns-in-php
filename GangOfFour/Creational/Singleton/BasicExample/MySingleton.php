<?php
/**
 * User: abdullah
 * Date: 01.01.2018
 * Time: 15:15
 */
namespace DesignPatterns\GangOfFour\Creational\Singleton\BasicExample;

/**
 * Bir runtime'da tek oturuma sahip olması istenen sınıflar singleton kalıbına sokulabilir.
 *
 * Class MySingleton
 */
final class MySingleton
{

    /**
     * @var MySingleton|null
     */
    private static $oInstance;

    /**
     * Tembel başlatma yöntemi ile bu sınıfın oturumunu döndürür. Yani ilk çağırma ise oturum oluşturup döndürür;
     * ilk çağırma değilse daha önce oluşturulmuş oturumu döndürür.
     *
     * @return static
     */
    public static function getInstance(): MySingleton
    {
        if (NULL === static::$oInstance) {
            static::$oInstance = new static();
        }
        return static::$oInstance;
    }

    /**
     * Bu sınıfın harici bir oturumunun oluşturulmasını engellemek için PHP'de __construct() (kurucu sihirli yöntemi) böyle
     * özelleştirilebilir.
     *
     * @return void
     */
    private function __construct()
    {
        //
    }

    /**
     * Bu sınıfın harici bir klon oturumunun (instance clonned by prototype) oluşturulmasını engellemek için PHP'de
     * __clone() (klonlayıcı sihirli yöntemi) böyle özelleştirilebilir.
     *
     * @return void
     */
    private function __clone()
    {
        //
    }

    /**
     * Bu sınıfın bir diziden uyandırılarak bir oturumunun oluşturulmasının engellemek için PHP'de __wakeup()
     * (uyandırıcı sihirli yöntemi) böyle özelleştirilebilir.
     *
     * @return void
     */
    private function __wakeup()
    {
        //
    }

}