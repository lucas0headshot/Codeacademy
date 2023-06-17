<?php

require_once 'functions.php';

if (!empty($_POST)) {
    // Grab the fields from the form
    $title = $_POST['title'] ?? '';
    $price = filter_input(INPUT_POST, 'price', FILTER_SANITIZE_NUMBER_INT);

    // Create the database object
    $db = connect();

    // If the tier has an ID, we know it's in the database so we'll update it, otherwise we'll create it.
    if (empty($_POST['id'])) {
        // Tier is not in the database, so let's create it
        try {
            // Write the SQL statement to insert a new tier here
            $createTierStmt = $db->prepare('INSERT INTO tiers (title, price) VALUES (:title, :price)');
            // Execute it here
            $createTierStmt->execute(['title' => $title, 'price' => $price]);        
            // We'll use the rowCount() function to check if a row was modified. If so, we'll assume the statement was successful, otherwise, it likely failed.
            if ($createTierStmt->rowCount()) {
                // A row was inserted, let's set a success message
                $type = 'success';
                $message = 'Tier added';
            } else {
                // No row was inserted, let's set an error message
                $type = 'error';
                $message = 'Tier not added';
            }
        } catch (Exception $e) {
            // An exception was thrown, let's set the exception's message
            $type = 'error';
            $message = 'Exception message: ' . $e->getMessage();
        }
    } else {
         // The tier is in the database, so let's update it
        // Get the tier ID
        $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);

        try {
            // Write the SQL statement to update tier information here
            $updateTierStmt = $db->prepare('UPDATE tiers SET title = :title, price = :price WHERE id = :id');
            // Execute it here
            $updateTierStmt->execute(['title' => $title,  'price' => $price, 'id' => $id]);
            // We'll use the rowCount() function to check if a row was modified. If so, we'll assume the statement was successful, otherwise, it likely failed.
            if ($updateTierStmt->rowCount()) {
                // Row was updated, let's set a success message
                $type = 'success';
                $message = 'Tier updated';
            } else {
                // No row was updated, let's set an error message
                $type = 'error';
                $message = 'Tier not updated';
            }
        } catch (Exception $e) {
            // Tier was not updated, let's set the exception message
            $type = 'error';
            $message = 'Tier not updated: ' . $e->getMessage();
        }
    }
    // Close the database connection here
    $createTierStmt = null;
    $updateTierStmt = null;
    $db = null;

    // Re-redirect back to main tiers page
    header('location:' . 'tiers.php?type=' . $type . '&message=' . $message);
}