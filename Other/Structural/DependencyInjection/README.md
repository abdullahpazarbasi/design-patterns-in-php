# Dependency Injection Design Pattern
## Bağımlılık Zerketme Tasarım Kalıbı (Bağımlılık Zerketme Tasarım Şablonu)

Yapısal bir tasarım kalıbıdır. DI şeklinde kısaltılır. Inversion of Control (IoC) esasına dayanır. Bağımlılığın bir arayüz implementasyonu ile sağlanması tavsiye edilir. Bağımlı olunacak nesnelerin bağımlı olacak nesneye dışarıdan enjekte edilmesini sağlayan kalıptır.

Avantajlarından en belirgin olanları:

- Nesneler arası bağımlılık gevşetilmiş (loose coupling) olur. Bu da SOLID prensiplerinden, başta Open-closed prensibine olmak üzere, Single responsibility prensibine ve tabii ki Dependency inversion prensibine uyumlu kodlama demektir.
- Tekrar kullanılabilir kodlar meydana getirilir.
- Open-closed prensibine uyum gereği bakım kolaylığı sağlar.
- Yazılımın bileşenleri arasında mantık yalıtımı sağlanır.
- Sağlıklı bir bağımlılık ağacı (dependency tree) meydana gelir.
- Bağımlı olunan nesne kolayca değiştirilebilir (switching).
- Meta veri veya context'ler (annotation'lar, xml'ler, yaml'lar vb.) ve arayüzler (interface) aracılığı ile konfigürasyon aşırı kolaylaşır.
- Bağımlı olunan sınıflar 'mock' halinde taklit edilerek etkili unit test'ler tasarlanabilir.

Ve birkaç önemsiz dezavantaj:
- Sınıf sayısı fazlalaşır.
- Arayüz sayısı fazlalaşır.
- Dosyalar arası dallanma büyür ve kodu okumak uzar.

Bağımlılık zerketme temel olarak şu üç biçimde yapılabilir:
- Oluştururken zerketme (constructor injection): Bağımlı olunan nesne, bağımlı olacak nesne oluşturulurken verilir. Gereklilik kazandırır.
- Setter ile zerketme (setter injection): Bağımlı olunan nesne, bağımlı olacak nesneye bir setter metodu ile verilir. Opsiyonellik kazandırır.
- Arayüz ile zerketme (interface injection): Setter ile zerketmenin biraz daha sistemleşmiş şeklidir. Bağımlı olacak nesne, bağımlı olunacak nesneyi zerketmeye yarayan bir setter metod öneren bir arayüz implemente eder.
