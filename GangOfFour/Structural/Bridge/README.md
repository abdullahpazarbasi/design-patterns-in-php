# Bridge Pattern
## Köprü Tasarım Kalıbı (Köprü Tasarım Deseni)

İş mantığını (business logic) veya dev bir sınıfı bağımsız olarak geliştirilebilen ayrı sınıf hiyerarşilerine bölen yapısal bir tasarım kalıbıdır.

Soyutlama hiyerarşisinin (abstraction'ın) implementasyon hiyerarşisinden (implementation'dan) ayrılarak birbirinden bağımsız işlemeleri sağlanır. Bunu yaparken katmanlı yapı (encapsulation), toplama (aggregation) ve de kalıtım (inheritance) kullanılarak programın görevleri farklı farklı sınıflara aktarılır.

Köprü tasarım kalıbı 5 ana bileşenden oluşur:
- Soyut Soyutlama (Abstract Abstraction): 2 hiyerarşiyi kontrol bölümü tanımlanır. İmplementasyon hiyerarşisinin referansını tutar ve tüm işi implementasyon hiyerarşisine dağıtır.
- Gerçek Soyutlama (Concrete Abstraction): Asıl iş gören implementasyon hiyerarşisine dokunmadan geliştirilebilen somut geliştirme.
- İmplementasyon Arayüzü (Implementation Interface): Soyutlama hiyerarşisi ile eşleşmeyi sağlayan arayüz.
- Somut İmplementasyon (Concrete Implementation): Asıl işi gören nesnelerin sınıfları.
- İstemci (Client): Tüm bu yapıyı kullanan sınıf veya metod.