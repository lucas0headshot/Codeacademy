<?php

// Set the database name
$dbname = 'ccuser';

// Our database is hosted on the same machine as PHP so we'll use localhost
$hostname = '/tmp';

// Create the DSN (data source name) by combining the database type (PostgreSQL), hostname and dbname
$dsn = "pgsql:host=$hostname;dbname=$dbname";

// Set the username and password with permissions to the database
$username = 'ccuser';
$password = 'pass';

// Handle exceptions gracefully
try {
    //  Setup a connection by creating a database object
    $db = new PDO($dsn, $username, $password);

    // Query to SELECT the title of all books in the books table
    $bookQuery = $db->query('SELECT title FROM books');
    // Fetch just the next row
    $book = $bookQuery->fetch(PDO::FETCH_ASSOC);
    echo "Fetch first book:\n";
    print_r($book);
    // Fetch all rows
    $books = $bookQuery->fetchAll(PDO::FETCH_ASSOC);
    echo "Fetch all books:\n";
    print_r($books);

    // Create a prepared statement to find a book by ID
    $id = 2;
    // Prepare the query with :id as a placeholder
    $bookQuery = $db->prepare('SELECT * FROM books WHERE id = :id');
    // Map placeholder :id to variable $id
    $bookQuery->execute(['id' => $id]);
    // Fetch the book
    $book = $bookQuery->fetch(PDO::FETCH_ASSOC);
    echo "Fetch the book with id of 2:\n";
    print_r($book);

    // Find and return all books by Jane Austen
    $author = 'Jane Austen';

    $booksQuery = $db->prepare('SELECT * FROM books WHERE author = :author');
    $booksQuery->execute(['author' => $author]);
    $books = $booksQuery->fetchAll(PDO::FETCH_ASSOC);
    echo "Fetch all books written by Jane Austen:\n";
    print_r($books);

    // Insert a new book into the database using a prepared statement
    $title = 'Invisible Man';
    $author = 'Ralph Ellison';
    $year = 1953;
    
    $newBookQuery = $db->prepare('INSERT INTO books (title, author, year) VALUES (:title, :author, :year)');
    $newBookQuery->execute(['title' => $title, 'author' => $author, 'year' => $year]);

    // Update an existing book in the database
    $author = 'Charles Dickens';
    $title = 'David Copperfield';
    $year = 1850;

    $updateBookQuery = $db->prepare('UPDATE books SET title = :title, year = :year WHERE author = :author'); 
    $updateBookQuery->execute(['title' => $title, 'year' => $year, 'author' => $author]);

    // Delete a book from the database
    $id = 1;
    
    $deleteBookQuery = $db->prepare('DELETE FROM books WHERE id = :id');
    $deleteBookQuery->execute(['id' => $id]);

    // To close the database connection, we must set all queries to null
    $bookQuery = null;
    $booksQuery = null;
    $newBookQuery = null;
    $updateBookQuery = null;

    // Finally, setting the connection to null will close it
    $db = null;

} catch (\Exception $e) {
    // If an error is thrown, catch it, echo the message, then exit
    echo $e->getMessage();
    exit();
}