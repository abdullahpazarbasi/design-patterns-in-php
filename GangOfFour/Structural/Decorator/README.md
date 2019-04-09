# Decorator Design Pattern
## Dekoratör Tasarım Kalıbı (Dekoratör Tasarım Şablonu)

Bir nesneye dinamik olarak yeni sorumlulukların eklenmesi veya mevcut dinamik sorumlulukların çıkarılmasına imkan sağlayan yapısal bir tasarım kalıbıdır. Dekorasyon arayüzü olan "component" (interface), dekorasyona maruz kalacak olan ve component arayüzüne sahip "concrete component" (somut bileşen), component arayüzüne sahip dekoratör "decorator" soyut temeli, concrete component nesnesine dekorasyon yapacak olan decorator'den genişletilmiş "concrete decorator" kullanılır.