<?php
// ------------------------------------
// Simple Router (based on public/pages)
// ------------------------------------

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = trim($uri, '/');

// Home page
if ($uri === '') {
    require __DIR__ . '/../public/pages/home.php';
    exit;
}

switch ($uri) {

    case 'about':
        require __DIR__ . '/../public/pages/about.php';
        break;

    case 'projects':
        require __DIR__ . '/../public/pages/projects.php';
        break;

    case 'contact':
        require __DIR__ . '/../public/pages/contact.php';
        break;

    default:
        http_response_code(404);
        require __DIR__ . '/../public/pages/404.php';
        break;
}
