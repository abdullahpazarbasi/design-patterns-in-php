# Adapter Pattern

İşleyişleri farklı servis veya sınıfları tek arayüz ile kullanma olanağı sunan tasarım kalıbıdır.

Adapter tasarım kalıbında 4 temel bileşen vardır:

- Adaptee: Hedef arayüze adapte edilmek istenen (mesela harici) sınıf.
- Target: Hedef arayüz.
- Adapter: Kaynak arayüzü hedef arayüze çeviren sınıf.
- Client: Adaptörü kullanan sınıf (Mesela phpunit test case'imiz).

"Adaptee" için "target" arayüzü ile oluşturulan "adapter", "client" tarafından kullanılır. "Target" arayüzü veya "target" abstract sınıfı öyle tasarlanmalıdır ki "adaptee" servisinin veya sınıfının nasıl çalıştığı, hangi özel girdiler ile hangi özel çıktıları verdiği hiçbir zaman umurda olmasın.