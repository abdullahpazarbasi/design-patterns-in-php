# Observer Pattern
## Gözlemci Tasarım Kalıbı (Gözlemci Tasarım Deseni)

Bir davranışsal tasarım kalıbıdır. Bir nesnenin kendi vaziyetindeki (state'inde) değişimi başka nesnelere bildirmesini sağlar. Bu kalıp sayesinde tekten çoka (one-to-many) bağımlılık (dependency) tanımlanabilir.

Gözlemci tasarım kalıbı 4 ana bileşenden oluşur:
- Özne Arayüzü (Subject Interface): Observable interface olarak da adlandırılır. Vaziyeti gözlenecek olan nesnenin arayüzüdür.
- Somut Özne (Concrete Subject): Observable olarak da adlandırılır. Vaziyeti gözlenecek olan somut nesnedir.
- Gözlemci Arayüzü (Observer Interface): Özneyi (subject'i) takip edecek olan nesnenin arayüzüdür.
- Somut Gözlemci (Concrete Observer): Öznenin (subject'in) vaziyetini takip edecek olan somut nesnedir.

PHP bu tasarım kalabını arayüzleri ile de destekler. SplSubject ve SplObserver diye iki arayüz PHP'de built-in olarak tanımlanmıştır.