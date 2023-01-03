# Design Patterns in PHP
## PHP'de Tasarım Kalıpları (Tasarım Desenleri / Tasarım Şablonları)

Burada `PHP Yazılım Geliştiricisi` [Abdullah Pazarbaşı](http://www.abdullahpazarbasi.com/)'nın kendi örnekleri ile nesne yönelimli yazılım mimarilerinde önemli yeri olan ve yaygın kullanılan tasarım kalıpları ve `PHP 8`'de kullanımları tanıtılıyor.


----


Amaç, katılımcılar, yapı (UML), kullanım alanları, alakalı diğer şablonlar


----


### İçindekiler

- Gang of Four (GoF) Derlemesi Tasarım Kalıpları
    - Davranışsal olanlar
        - [Sorumluluk Zinciri (Chain of Responsibility)](GangOfFour/Behavioral/ChainOfResponsibility) Tasarım Kalıbı
        - [Komut (Command)](GangOfFour/Behavioral/Command) Tasarım Kalıbı
        - [Yorumlayıcı (Interpreter)](GangOfFour/Behavioral/Interpreter) Tasarım Kalıbı
        - [İteratör (Iterator)](GangOfFour/Behavioral/Iterator) Tasarım Kalıbı
        - [Aracı (Mediator)](GangOfFour/Behavioral/Mediator) Tasarım Kalıbı
        - [Hatıra (Memento)](GangOfFour/Behavioral/Memento) Tasarım Kalıbı
        - [Gözleyici (Observer)](GangOfFour/Behavioral/Observer) Tasarım Kalıbı
        - [Vaziyet (State)](GangOfFour/Behavioral/State) Tasarım Kalıbı
        - [Strateji (Strategy)](GangOfFour/Behavioral/Strategy) Tasarım Kalıbı
        - [Şablon Metodu (Template Method)](GangOfFour/Behavioral/TemplateMethod) Tasarım Kalıbı
        - [Ziyaretçi (Visitor)](GangOfFour/Behavioral/Visitor) Tasarım Kalıbı
    - Oluştural olanlar
        - [Soyut Fabrika (Abstract Factory)](GangOfFour/Creational/AbstractFactory) Tasarım Kalıbı
        - [Kurucu (Builder)](GangOfFour/Creational/Builder) Tasarım Kalıbı
        - [Fabrika Metodu (Factory Method)](GangOfFour/Creational/FactoryMethod) Tasarım Kalıbı
        - [Prototip (Prototype)](GangOfFour/Creational/Prototype) Tasarım Kalıbı
        - [Biricik (Singleton)](GangOfFour/Creational/Singleton) Tasarım Kalıbı
    - Yapısal olanlar
        - [Adaptör (Adapter)](GangOfFour/Structural/Adapter) Tasarım Kalıbı
        - [Köprü (Bridge)](GangOfFour/Structural/Bridge) Tasarım Kalıbı
        - [Kompozit (Composite)](GangOfFour/Structural/Composite) Tasarım Kalıbı
        - [Dekoratör (Decorator)](GangOfFour/Structural/Decorator) Tasarım Kalıbı
        - [Faça Metodu (Facade Method)](GangOfFour/Structural/FacadeMethod) Tasarım Kalıbı
        - [Sineksiklet (Flyweight)](GangOfFour/Structural/Flyweight) Tasarım Kalıbı
        - [Vekil (Proxy)](GangOfFour/Structural/Proxy) Tasarım Kalıbı
- Diğer Tasarım Kalıpları
    - Davranışsal olanlar
        - [Karatahta (Blackboard)](Other/Behavioral/Blackboard) Tasarım Kalıbı
        - [Boş Nesne (Null Object)](Other/Behavioral/NullObject) Tasarım Kalıbı
        - [Ambar (Repository)](Other/Behavioral/Repository) Tasarım Kalıbı
        - [Tarif (Specification)](Other/Behavioral/Specification) Tasarım Kalıbı
    - Oluştural olanlar
        - [Multiton](Other/Creational/Multiton) Tasarım Kalıbı
        - [Havuz (Pool)](Other/Creational/Pool) Tasarım Kalıbı
        - [Basit Fabrika (Simple Factory)](Other/Creational/SimpleFactory) Tasarım Kalıbı
        - [Static Fabrika (Static Factory)](Other/Creational/StaticFactory) Tasarım Kalıbı
    - Yapısal olanlar
        - [Veri Eşleyici (Data Mapper)](Other/Structural/DataMapper) Tasarım Kalıbı
        - [Bağımlılık Zerketme (Dependency Injection)](Other/Structural/DependencyInjection) Tasarım Kalıbı
        - [Varlık-Nitelik-Değer (Entity-Attribute-Value)](Other/Structural/EntityAttributeValue) Tasarım Kalıbı
        - [Akıcı Arayüz (Fluent Interface)](Other/Structural/FluentInterface) Tasarım Kalıbı
        - [Sicil (Registry)](Other/Structural/Registry) Tasarım Kalıbı
        - [Hizmet Bulucu (Service Locator)](Other/Structural/ServiceLocator) Tasarım Kalıbı

----

### Testleri koşturmak için

#### `Composer` Kurulumu

```shell
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === '55ce33d7678c5a611085589f1f3ddf8b3c52d662cd01d4ba75c0ee0459970c2200a51f492d557530c71c15d8dba01eae') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php --filename=composer
php -r "unlink('composer-setup.php');"
```

#### Bağımlılıkların Kurulumu

`PHPUnit` `Test Case` 'lerinin tamamı tek `test suite` 'inde toplandı. `composer` autoload'undan faydalanmak için bu repo'yu yerleştirdiğiniz çalışma dizinine geçip;

```shell
make install
```

veya

```shell
composer install
```

satırını çalıştırınız.

Global `phpunit` bin'iniz kurulu değilse `composer` kurulumu sonucunda `vendor/bin` yolunda `phpunit` betikini elde etmiş olacaksınız.

```shell
make test
```

ile `unit test` 'leri çalıştırabilirsiniz.

----


### Katkı yapmak isteyenlerdenseniz

Herhangi `typo` veya `bug` fix'inizi `pull request` atarak gönderebilirsiniz. İncelendikten sonra kabul edilecektir.