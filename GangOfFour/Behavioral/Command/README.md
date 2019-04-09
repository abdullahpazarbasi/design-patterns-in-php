# Command Design Pattern
## Komut Tasarım Kalıbı (Komut Tasarım Şablonu)

Veri yönlendirmeli bir davranışsal tasarım kalıbıdır. İsteyeni ve istemi bir komut ile ayırmaya yarar. Talebi bir nesnede hapseder, talebin kuyrukta saklanmasına imkan verir.

Bu tasarım kalıbı 5 ana bileşenden oluşur:
- Komut Arayüzü (Command Interface): Verilecek komutun arayüzüdür. Komutun icra edeceklerini execute() içinde barındırır.
- Alıcı/Ast (Receiver/Commandee): Verilecek komutun icra edicisidir.
- Çağırıcı/Üst (Invoker/Commander): Verilecek komutun komutanıdır, amiridir.
- Somut Komut (Concrete Command): Çağırıcının alıcıya verdiği komut arayüzünden ya da soyut komuttan türeyen gerçek komuttur.
- İstemci (Client): Komutun kullanıldığı modül.