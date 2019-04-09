# Visitor Design Pattern
## Ziyaretçi Tasarım Kalıbı (Ziyaretçi Tasarım Şablonu)

Davranışsal bir tasarım kalıbıdır. Çok sayıda ve farklı tipteki nesneler üzerinde bu nesnelerde değişiklik yapmadan işlem yapabilmek amacıyla kullanılır.

Değiştirilmesi istenmeyen ve üzerinde işlem yapılması istenen nesneler kabülcüdür (acceptor) ve bir kabulcü arayüzü implemente eder. İşlemi yapacak nesneler ise ziyaretçilerdir (visitor) ve bir ziyaretçi arayüzü implemente eder.

Bu tasarım kalıbı 5 ana bileşenden oluşur:
- Kabulcü/Eleman Arayüzü (Acceptor/Element Interface):
- Somut Kabulcü/Somut Eleman (Concrete Acceptor/Concrete Element):
- Ziyaretçi Arayüzü (Visitor Interface):
- Somut Ziyaretçi (Concrete Visitor):
- İstemci (Client):