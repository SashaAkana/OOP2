<?php
class Library {
    private $books;
    private $readers;

    public function __construct() {
        $this->books = [];
        $this->readers = [];
    }

    public function addBook($book) {
        $this->books[] = $book;
    }

    public function addReader($reader) {
        $this->readers[] = $reader;
    }

    public function findBook($title) {
        foreach ($this->books as $book) {
            if ($book->getTitle() === $title) {
                return $book;
            }
        }
        return null;
    }

    public function listBooks() {
        foreach ($this->books as $book) {
            echo $book->getTitle() . " - " . $book->getAuthor() . "\n";
        }
    }
}
?>