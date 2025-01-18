<?php
class Reader {
    private $name;
    private $email;
    private $borrowedBooks;

    public function __construct($name, $email) {
        $this->name = $name;
        $this->email = $email;
        $this->borrowedBooks = [];
    }

    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function borrowBook($book) {
        if ($book->getAvailability()) {
            $this->borrowedBooks[] = $book;
            $book->setAvailability(false);
        } else {
            echo "Книга '" . $book->getTitle() . "' недоступна.\n";
        }
    }

    public function returnBook($book) {
        if (($key = array_search($book, $this->borrowedBooks, true)) !== false) {
            unset($this->borrowedBooks[$key]);
            $book->setAvailability(true);
        } else {
            echo "Эта книга доступна.\n";
        }
    }
}
?>