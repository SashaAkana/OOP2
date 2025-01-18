<?php
include 'Book.php';
include 'Reader.php';
include 'Library.php';

$library = new Library();

$book1 = new Book("1984", "Джордж Оруэлл", 1949);
$book2 = new Book("Убить пересмешника", "Харпер Ли", 1960);

$library->addBook($book1);
$library->addBook($book2);

$reader = new Reader("Иванов Иван", "ivanov@example.com");
$library->addReader($reader);

$reader->borrowBook($book1);

$library->listBooks();
?>
