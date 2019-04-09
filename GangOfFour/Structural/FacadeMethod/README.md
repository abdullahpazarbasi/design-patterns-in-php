# Facade Method Design Pattern
## Façade Metodu Tasarım Kalıbı (Façade Metodu Tasarım Şablonu)

Yapısal bir tasarım kalıbıdır. Alt sistemlerin direkt olarak kullanılması yerine alt sistemdeki nesnelerin başka bir nesne üzerinden kullanılmasını sağlayan tasarım desenidir.

İstemci alt sisteme direkt erişmez, façade nesnesi üzerinden erişir. Böylece ayrışma (decoupling) gerçekleşmiş olur.

Bu tasarım kalıbı 3 temel bileşenden oluşur:
- Alt Sistem Nesnesi: Façade nesnesine kayıt olacak herhangi nesnedir.
- Façade Nesnesi (Facade): Alt sistem nesnelerini toplar ve istemcinin çağıracağı "işi yap" metod(unu/larını) barındırır.
- İstemci (Client): Talip nesne veya metod.
