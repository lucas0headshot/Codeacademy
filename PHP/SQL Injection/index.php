<?php
// Database & variables setup
require 'setup.php';

// Set the $id variable
$id = $_POST['id'];
// Unsafe statement to get user by id
$userQuery = $db->query('SELECT * FROM users WHERE id = ' . $id);
// Write an equivalent prepared statement here
$userQuery = $db->prepare('SELECT * FROM users WHERE id = :id');
// Execute the statement here
$userQuery->execute(['id' => $id]);
// Fetch user
$user = $userQuery->fetch(PDO::FETCH_ASSOC);

// Sanitize $id here
$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);

// Fetch all books written by Jane Austen
$author = 'Jane Austen';
// Place your SELECT statement here
$bookQuery = $db->prepare('SELECT * FROM books WHERE author = :author');
// Execute it here
$bookQuery->execute(['author' => $author]);
// Fetch the result and assign it to $books
$books = $bookQuery->fetchAll(PDO::FETCH_ASSOC);

// Add this book to the database
$title = 'Invisible Man';
$author = 'Ralph Ellison';
$year = 1953;
// Place your INSERT statement here
$newBookQuery = $db->prepare('INSERT INTO books (title, author, year) VALUES (:title, :author, :year)');
// Execute it here
$newBookQuery->execute(['title' => $title, 'author' => $author, 'year' => $year]);

// Find the book by Charles Dickens and update its title and year to the values below
$author = 'Charles Dickens';
$title = 'David Copperfield';
$year = 1850;
// Place your UPDATE statement here
$updateBookQuery = $db->prepare('UPDATE books SET title = :title, year = :year WHERE author = :author');
// Execute it here
$updateBookQuery->execute(['title' => $title, 'year' => $year, 'author' => $author]);

// Delete the book with this id from the database
$id = 1;
// Place your DELETE statement here
$deleteBookQuery = $db->prepare('DELETE FROM books WHERE id = :id');
// Execute it here
$deleteBookQuery->execute(['id' => $id]);