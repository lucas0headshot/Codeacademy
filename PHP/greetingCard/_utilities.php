<?php

/**
 * Removes special characters from the given file name.
 */
function sanitizeFileName(string $path)
{
    // The `pathinfo()` function extracts a specific component from the given file path.
    // This separates the file name from the extension so we can sanitize the file name.
    $file_name = pathinfo($path, PATHINFO_FILENAME);
    $extension = pathinfo($path, PATHINFO_EXTENSION);

    // Replace spaces and hyphens with a single hyphen.
    $file_name = preg_replace('/[\s-]+/', '-', $file_name);

    // Remove all characters except A-Z, a-z, 0-9, and -.
    $file_name = preg_replace('/[^\w-]/', '', $file_name);

    // Return the sanitized file name with the extension added back on.
    return "$file_name.$extension";
}
