# Observer Design Pattern
## Gözleyici Tasarım Kalıbı (Gözleyici Tasarım Deseni)

Bir davranışsal tasarım kalıbıdır. Bir nesnenin kendi vaziyetindeki (state'inde) değişimi başka nesnelere bildirmesini sağlar. Bu kalıp sayesinde tekten çoka (one-to-many) bağımlılık (dependency) tanımlanabilir.

Bu tasarım kalıbı 4 ana bileşenden oluşur:
- Özne Arayüzü (Subject Interface): Observable interface olarak da adlandırılır. Vaziyeti gözlenecek olan nesnenin arayüzüdür.
- Somut Özne (Concrete Subject): Observable olarak da adlandırılır. Vaziyeti gözlenecek olan somut nesnedir.
- Gözleyici Arayüzü (Observer Interface): Özneyi (subject'i) takip edecek olan nesnenin arayüzüdür.
- Somut Gözleyici (Concrete Observer): Öznenin (subject'in) vaziyetini takip edecek olan somut nesnedir.

PHP, bu tasarım kalıbını arayüzleri ile de destekler. SplSubject ve SplObserver diye iki arayüz PHP'de built-in olarak tanımlanmıştır.
