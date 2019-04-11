# Mediator Design Pattern
## Aracı Tasarım Kalıbı (Aracı Tasarım Şablonu)

Davranışsal bir tasarım kalıbıdır. Nesnelerin biribiriyle doğrudan iletişime geçmemesini, mediator (aracı) nesneler aracılığı ile iletişime geçmesini sağlar. Hedef bir grup nesnenin birbiriyle nasıl etkileşeceğini kapsül içine almaktır. Mediator (aracı) tasarım kalıbı, nesneler arasındaki bağlaşıklığı azaltır.

Façade metodu tasarım kalıbına benzer. Fakat aracı tasarım kalıbı ile çok yönlü etkileşim protokolü tanımlanırken façade tasarım kalıbı ile tek yönlü bir arayüz tanımlanmış olur ve yalnız alt sisteme yöneliktir.

Bu tasarım kalıbı 5 temel bileşenden oluşur:
- Aracı Arayüzü (Mediator Interface): İlişkiyi tanımlayan arayüzdür.
- Somut Aracı (Concrete Mediator): Nesneler arasındaki ilişkiyi sağlayacak gerçek nesnedir. Mediator arayüzünü implemente eder. İçinde Colleague arayüzünden türeyen nesnelerin listesini barındırır.
- Yabancı Arayüzü/Soyut Yabancı (Colleague Interface/Abstract Yabancı): Concrete Mediator nesnesini kullanarak işlem gerçekleştirecek olan nesnelerin uygulaması gereken arayüzdür.
- Somut Yabancı (Concrete Colleague): Concrete Mediator üzerinden birbirleri ile ilişkili nesnelerdir ve colleague arayüzünü implemente eder.
- İstemci (Client): Aracılığın gerçekleştiği modüldür.