# Strategy Design Pattern (Policy Design Pattern)
## Strateji Tasarım Kalıbı (Strateji Tasarım Şablonu)

Davranışsal bir tasarım kalıbıdır. Bir işin birden fazla yolla yaptırılabileceği koşullarda kullanılır. Strateji, kendisini kullanan istemcilerden bağımsız olarak algoritmanın çeşitlendirilmesini sağlar.

Bir strateji arayüzüne (strategy interface) sahip somut stratejilerin (concrete strategy) bir context nesnesi (context) üzerinden çalıştırılmasıdır. Şablon metodu kalıbına (template method pattern) çok benzer.

Bu tasarım kalıbı 4 ana bileşenden oluşur:
- Strateji Arayüzü (Strategy Interface):
- Somut Strateji (Concrete Strategy):
- Bağlam (Context):
- İstemci (Client):