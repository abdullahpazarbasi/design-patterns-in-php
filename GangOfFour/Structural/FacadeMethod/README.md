# Facade Method Pattern
## Façade Tasarım Kalıbı (Façade Tasarım Deseni)
Alt sistemlerin direkt olarak kullanılması yerine alt sistemdeki nesnelerin başka bir nesne üzerinden kullanılmasını sağlayan tasarım desenidir.

İstemci alt sisteme direkt erişmez, façade nesnesi üzerinden erişir. Böylece ayrışma (decoupling) gerçekleşmiş olur.

Façade tasarım kalıbı 3 ana bileşenden oluşur:
- Alt Sistem Nesnesi: Façade nesnesine kayıt olacak herhangi nesnedir.
- Façade Nesnesi: Alt sistem nesnelerini toplar ve istemcinin çağıracağı "işi yap" metod(unu/larını) barındırır.
- İstemci (Client): Talip nesne veya metod.
