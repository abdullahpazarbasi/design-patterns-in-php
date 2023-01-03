<?php

namespace DesignPatterns\GangOfFour\Creational\Singleton\BasicExample;

/**
 * Bir runtime 'da tek oturuma sahip olması istenen sınıflar singleton kalıbına sokulabilir.
 *
 * Class MySingleton
 */
final class MySingleton
{

    /**
     * @var MySingleton|null
     */
    private static ?MySingleton $instance = null;

    /**
     * Tembel başlatma yöntemi ile bu sınıfın oturumunu döndürür. Yani ilk çağırma ise oturum oluşturup döndürür;
     * ilk çağırma değilse daha önce oluşturulmuş oturumu döndürür.
     *
     * @return MySingleton
     */
    public static function getInstance(): MySingleton
    {
        if (null === MySingleton::$instance) {
            MySingleton::$instance = new MySingleton();
        }
        return MySingleton::$instance;
    }

    /**
     * Bu sınıfın harici bir oturumunun oluşturulmasını engellemek için PHP 'de __construct() (kurucu sihirli yöntemi)
     * böyle özelleştirilebilir.
     *
     * @return void
     */
    private function __construct()
    {
        //
    }

    /**
     * Bu sınıfın harici bir klon oturumunun (instance clonned by prototype) oluşturulmasını engellemek için PHP 'de
     * __clone() (klonlayıcı sihirli yöntemi) böyle özelleştirilebilir.
     *
     * @return void
     */
    private function __clone(): void
    {
        //
    }

    /**
     * Bu nesnenin bir diziye yatırılmasını engellemek için PHP 'de __sleep()
     * (uyutucu sihirli yöntemi) böyle özelleştirilebilir.
     *
     * @return array
     */
    public function __sleep(): array
    {
        throw new \RuntimeException("The object can not be slept down");
    }

    /**
     * Bu sınıfın bir diziden uyandırılarak bir oturumunun oluşturulmasının engellemek için PHP 'de __wakeup()
     * (uyandırıcı sihirli yöntemi) böyle özelleştirilebilir.
     *
     * @return void
     */
    public function __wakeup(): void
    {
        throw new \RuntimeException("The object can not be waked up");
    }

    /**
     * Bir nesneyi normalleştirmeyi engellemek için PHP 'de __serialize() sihirli yöntemi böyle özelleştirilebilir.
     *
     * @return array
     */
    public function __serialize(): array
    {
        throw new \RuntimeException("The object can not be normalized");
    }

    /**
     * Bir diziden anormalleştirme yaparak bir nesneyi doldurmayı engellemek için PHP 'de __unserialize() sihirli
     * yöntemi böyle özelleştirilebilir.
     *
     * @param array $data
     * @return void
     */
    public function __unserialize(array $data): void
    {
        throw new \RuntimeException("The object can not be denormalized");
    }

}