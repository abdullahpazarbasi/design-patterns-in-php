# Design Patterns in PHP
## PHP'de Tasarım Kalıpları (Tasarım Desenleri / Tasarım Şablonları)

Burada `Yazılım Geliştirici` [Abdullah Pazarbaşı](http://www.abdullahpazarbasi.com/)'nın kendi örnekleri ile nesne yönelimli yazılım mimarilerinde önemli yeri olan ve yaygın kullanılan tasarım kalıpları ve `PHP 7`'de kullanımları tanıtılıyor.


----


### İçindekiler

- Tasarım Kalıpları
  - Gang of Four (GoF) Derlemesi Tasarım Kalıpları
    - Davranışsal olanlar
    - Oluştural olanlar
    - Yapısal olanlar
  - Diğer Tasarım Kalıpları
    - Davranışsal olanlar
      - [Karatahta (Blackboard)](Other/Behavioral/Blackboard) Tasarım Kalıbı
      - [Tarif (Specification)](Other/Behavioral/Specification) Tasarım Kalıbı
    - Oluştural olanlar
      - [Multiton](Other/Creational/Multiton) Tasarım Kalıbı
      - [Static Factory (Static Fabrika)](Other/Creational/StaticFactory) Tasarım Kalıbı
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