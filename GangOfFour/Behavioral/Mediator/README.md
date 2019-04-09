# Mediator Design Pattern
## Aracı Tasarım Kalıbı (Aracı Tasarım Şablonu)

Davranışsal bir tasarım kalıbıdır. Nesnelerin biribiriyle doğrudan iletişime geçmemesini, mediator (aracı) nesneler aracılığı ile iletişime geçmesini sağlar. Mediator (aracı) kalıbı nesneler arasındaki bağlaşıklığı azaltır.

Bu tasarım kalıbı 5 ana bileşenden oluşur:
- Aracı Arayüzü (Mediator Interface): İlişkiyi tanımlayan arayüzdür.
- Somut Aracı (Concrete Mediator): Nesneler arasındaki ilişkiyi sağlayacak gerçek nesnedir. Mediator arayüzünü implemente eder. İçinde Colleague arayüzünden türeyen nesnelerin listesini barındırır.
- Yabancı Arayüzü (Colleague Interface): Concrete Mediator nesnesini kullanarak işlem gerçekleştirecek olan nesnelerin uygulaması gereken arayüzdür.
- Somut Yabancı (Concrete Colleague): Concrete Mediator üzerinden birbirleri ile ilişkili nesnelerdir ve colleague arayüzünü implemente eder.
- İstemci (Client): Aracılığın gerçekleştiği modüldür.