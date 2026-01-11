<?php

// 1. Manually point to the Laravel index file
$laravelIndex = __DIR__ . '/../public/index.php';

// 2. Check if it exists; if not, try the root (sometimes Vercel shifts the context)
if (!file_exists($laravelIndex)) {
    $laravelIndex = __DIR__ . '/public/index.php';
}

// 3. If it still doesn't exist, the build structure is wrong
if (!file_exists($laravelIndex)) {
    die("Error: Laravel entry point not found at $laravelIndex. Check your directory structure.");
}

require $laravelIndex;