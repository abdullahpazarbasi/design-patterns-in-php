# Design Patterns in PHP
## PHP'de Tasarım Kalıpları (Tasarım Desenleri / Tasarım Şablonları)

Burada `PHP Yazılım Geliştiricisi` [Abdullah Pazarbaşı](http://www.abdullahpazarbasi.com/)'nın kendi örnekleri ile nesne yönelimli yazılım mimarilerinde önemli yeri olan ve yaygın kullanılan tasarım kalıpları ve `PHP 7`'de kullanımları tanıtılıyor.


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
        - [Gözlemci (Observer)](GangOfFour/Behavioral/Observer) Tasarım Kalıbı
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
        - [Façade Metodu (Facade Method)](GangOfFour/Structural/FacadeMethod) Tasarım Kalıbı
        - [Sineksiklet (Flyweight)](GangOfFour/Structural/Flyweight) Tasarım Kalıbı
        - [Vekil (Proxy)](GangOfFour/Structural/Proxy) Tasarım Kalıbı
- Diğer Tasarım Kalıpları
    - Davranışsal olanlar
        - [Karatahta (Blackboard)](Other/Behavioral/Blackboard) Tasarım Kalıbı
        - [Tarif (Specification)](Other/Behavioral/Specification) Tasarım Kalıbı
    - Oluştural olanlar
        - [Multiton](Other/Creational/Multiton) Tasarım Kalıbı
        - [Static Fabrika (Static Factory)](Other/Creational/StaticFactory) Tasarım Kalıbı
    - Yapısal olanlar
        - [Bağımlılık Zerketme (Dependency Injection)](Other/Structural/DependencyInjection) Tasarım Kalıbı
        - [Varlık-Nitelik-Değer (Entity-Attribute-Value)](Other/Structural/EntityAttributeValue) Tasarım Kalıbı
        - [Akıcı Arayüz (Fluent Interface)](Other/Structural/FluentInterface) Tasarım Kalıbı


----


### Testleri koşturmak için

`PHPUnit` `Test Case`'lerinin tamamı tek `test suite`'inde toplandı. `composer` autoload'undan faydalanmak için bu repo'yu yerleştirdiğiniz çalışma dizinine geçip;

```bash
$ composer install
```

satırını çalıştırınız.

Global `phpunit` bin'iniz kurulu değilse `composer` kurulumu sonucunda;

```bash
$ ./vendor/bin/phpunit
```

yolunda `phpunit` bin'ini elde etmiş olacaksınız.

Daha basit hale getirmek isterseniz;

```bash
$ alias phpunit='php /path/to/repo/root/vendor/bin/phpunit'
```

şeklinde bir tanımlama yapabilirsiniz.

Eğer `xdebug` extension'ını da aktif hale getirerek çalıştırmak isterseniz;

```bash
$ alias phpunit='php -dzend_extension=xdebug.so /path/to/repo/root/vendor/bin/phpunit'
```

satırı size yardımcı olacaktır.


----


### Katkı yapmak isteyenlerdenseniz

Herhangi `typo` veya `bug` fix'inizi `pull request` atarak gönderebilirsiniz. İncelendikten sonra kabul edilecektir.