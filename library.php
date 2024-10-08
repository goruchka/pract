<?php
// Класс Book представляет книгу в библиотеке
class Book {
    private $title;
    private $author;
    private $publishedYear;
    private $genre;

    // Конструктор для инициализации всех свойств
    public function __construct($title, $author, $publishedYear, $genre) {
        $this->title = $title;
        $this->author = $author;
        $this->publishedYear = $publishedYear;
        $this->genre = $genre;
    }

    // Геттеры и сеттеры для всех свойств
    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function setAuthor($author) {
        $this->author = $author;
    }

    public function getPublishedYear() {
        return $this->publishedYear;
    }

    public function setPublishedYear($publishedYear) {
        $this->publishedYear = $publishedYear;
    }

    public function getGenre() {
        return $this->genre;
    }

    public function setGenre($genre) {
        $this->genre = $genre;
    }

    // Метод для получения информации о книге
    public function getBookInfo() {
        return "Название: " . $this->title . ", Автор: " . $this->author . 
               ", Год публикации: " . $this->publishedYear . ", Жанр: " . $this->genre;
    }
}

// Класс Library управляет коллекцией книг
class Library {
    private $books = [];

    // Метод для добавления книги в библиотеку
    public function addBook(Book $book) {
        $this->books[] = $book;
    }

    // Метод для удаления книги по названию
    public function removeBookByTitle($title) {
        foreach ($this->books as $index => $book) {
            if ($book->getTitle() === $title) {
                unset($this->books[$index]);
                $this->books = array_values($this->books); // Перенумерация массива
                return true;
            }
        }
        return false;
    }

    // Метод для поиска книг по автору
    public function findBooksByAuthor($author) {
        $result = [];
        foreach ($this->books as $book) {
            if ($book->getAuthor() === $author) {
                $result[] = $book;
            }
        }
        return $result;
    }

    // Метод для отображения всех книг
    public function listAllBooks() {
        $result = [];
        foreach ($this->books as $book) {
            $result[] = $book->getBookInfo();
        }
        return $result;
    }
}

// Пример использования классов

// Создание экземпляров книг
$book1 = new Book("Повелитель мух", "Уильям Голдинг", 2005, "Антиутопия");
$book2 = new Book("Евгений Онегин", "Александр Пушкин", 1823, "Роман");
$book3 = new Book("Особое мясо", "Агустина Бастеррика", 2017, "Фантастика");

// Создание библиотеки и добавление книг
$library = new Library();
$library->addBook($book1);
$library->addBook($book2);
$library->addBook($book3);

// Удаление книги по названию
$library->removeBookByTitle("Повелитель мух");

// Поиск книг по автору
$booksByDostoevsky = $library->findBooksByAuthor("Агустина Бастеррика");

// Вывод информации о книгах Достоевского
echo "Книги Агустина Бастеррика:\n";
foreach ($booksByDostoevsky as $book) {
    echo $book->getBookInfo() . "\n";
}

// Вывод всех книг
echo "\nВсе книги в библиотеке:\n";
$allBooks = $library->listAllBooks();
foreach ($allBooks as $bookInfo) {
    echo $bookInfo . "\n";
}

?>