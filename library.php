<?php
class Book {
    private $title;
    private $author;
    private $publishedYear;
    private $genre;

    public function __construct($title, $author, $publishedYear, $genre) {
        $this->title = $title;
        $this->author = $author;
        $this->publishedYear = $publishedYear;
        $this->genre = $genre;
    }

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

    public function getBookInfo() {
        return sprintf("Название: %s\nАвтор: %s\nГод публикации: %d\nЖанр: %s\n", 
                       $this->title, $this->author, $this->publishedYear, $this->genre);
    }
}

class Library {
    private $books = [];

    public function addBook(Book $book) {
        $this->books[] = $book;
    }

    public function removeBookByTitle($title) {
        foreach ($this->books as $index => $book) {
            if ($book->getTitle() === $title) {
                unset($this->books[$index]);
                $this->books = array_values($this->books); 
                return true;
            }
        }
        return false;
    }

    public function findBooksByAuthor($author) {
        $result = [];
        foreach ($this->books as $book) {
            if ($book->getAuthor() === $author) {
                $result[] = $book;
            }
        }
        return $result;
    }

    public function listAllBooks() {
        $result = [];
        foreach ($this->books as $book) {
            $result[] = $book->getBookInfo();
        }
        return $result;
    }
}


$book1 = new Book("Повелитель мух", "Уильям Голдинг", 2005, "Антиутопия");
$book2 = new Book("Евгений Онегин", "Александр Пушкин", 1823, "Роман");
$book3 = new Book("Особое мясо", "Агустина Бастеррика", 2017, "Фантастика");

$library = new Library();
$library->addBook($book1);
$library->addBook($book2);
$library->addBook($book3);

$library->removeBookByTitle("Повелитель мух");

$booksByDostoevsky = $library->findBooksByAuthor("Агустина Бастеррика");

echo "Книги Агустина Бастеррика:\n";
if (empty($booksByDostoevsky)) {
    echo "Нет книг этого автора в библиотеке.\n";
} else {
    foreach ($booksByDostoevsky as $book) {
        echo "-------------------------\n";
        echo $book->getBookInfo();
    }
}

echo "\nВсе книги в библиотеке:\n";
$allBooks = $library->listAllBooks();
if (empty($allBooks)) {
    echo "Библиотека пуста.\n";
} else {
    foreach ($allBooks as $bookInfo) {
        echo "-------------------------\n";
        echo $bookInfo;
    }
}

?>
