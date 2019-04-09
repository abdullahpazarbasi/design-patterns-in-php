# Chain of Responsibility Design Pattern
## Sorumluluk Zinciri Tasarım Kalıbı (Sorumluluk Zinciri Tasarım Deseni)

Bir veya birden fazla talebi yerine getirme şansının birden fazla nesneye verilmesi ile bu talep alan nesnelerin talip nesneye bağlanmasından kaçınılmasını sağlayan davranışsal bir tasarım kalıbıdır. Görevli nesneler sorumluluklarına göre zincirlenir ve talip nesne, talepten hangi nesne sorumluysa o nesneye varana kadar zincir boyunca aktarılarak yönlendirilir. Sorumlu nesneye varılınca sorumlu nesne talip nesneyi kabul eder, talebi yerine getirir ve ya talibi sıradaki sorumluya aktarır ya da talibi zincirden çıkarır.

Bu kalıbı, devlet dairesine elinde bir dilekçe ile gelip hangi masaya başvuracağını bilmeyen bir vatandaşın, dilekçesindeki taleplerinin her birinden sorumlu memuru bulana kadar masaları tek tek dolaşmasına ve dolaşırken taleplerinin ilgili memurlarca yerine getirilmesine benzetebilirsiniz.

Bu kalıbın ilkel bir örneği PHP'deki switch-case bloğudur. Fakat switch-case bloğunda talip nesne değil skalar ele alınan bir state sözkonusudur.

Sorumluluk zinciri kalıbı 4 ana bileşenden oluşur:
- Ele Alıcı Arayüzü (Handler Interface): Ele alıcının arayüzü.
- Soyut Ele Alıcı (Abstract Handler): Ele alıcıların ortak sorumluluklarını tanımlayan soyut ele alıcı.
- Somut Ele Alıcılar (Concrete Handlers): Gerçek ele alıcılar.
- İstemci (Client): Talip nesne veya metod.