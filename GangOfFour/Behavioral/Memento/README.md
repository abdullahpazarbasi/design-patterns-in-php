# Memento Design Pattern
## Hatıra Tasarım Kalıbı (Hatıra Tasarım Şablonu)

Bir orijinatör nesnenin state'ini nesnenin encapsulation'ını bozmadan saklamaya yarar. Bu kalıpta orijinatör nesne uyutulmaz veya uyandırılmaz. Bunun yerine bir memento nesnesi uyutulabilir veya uyandırılabilir.

Bu tasarım kalıbı 4 and bileşenden oluşur:
- Hatıra Arayüzü (Memento Interface): Uyuyabilecek ve uyanabilecek memento nesnesinin arayüzüdür.
- Somut Hatıra (Concrete Memento): Uyuyabilecek ve uyanabilecek gerçek memento nesnesidir.
- Orijinatör (Originator): State'i memento nesnesinde saklanacak olan nesnedir.
- İstemci (Client): Memento'yu kullanan modül.