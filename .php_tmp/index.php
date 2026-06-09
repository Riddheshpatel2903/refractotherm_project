<?php
// Define the base path dynamically (works for XAMPP subdirectories and live root domains)
$base_path = str_replace('index.php', '', $_SERVER['SCRIPT_NAME']);

// Get the requested URI and remove query strings
$server_uri = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '/';
$request_uri = parse_url($server_uri, PHP_URL_PATH);

// Remove the base path if it exists at the start of the URI
if (strpos($request_uri, $base_path) === 0) {
  $uri = substr($request_uri, strlen($base_path));
} else {
  // Fallback if accessed via VirtualHost
  $uri = ltrim($request_uri, '/');
}

// Remove trailing slash
$uri = rtrim($uri, '/');

// Defined manual routes
$routes = [
  '' => 'home.php',
  'home' => 'home.php',
  'index' => 'home.php',
  'about' => 'about.php',
  'services' => 'services.php',
  'products' => 'products.php',
  'contact' => 'contact.php',
  'industries' => 'industries.php',
  'group-companies' => 'group-companies.php',
  'corporate-videos' => 'corporate-videos.php',
  'testimonials' => 'testimonials.php',
  'news-events' => 'news-events.php',
  'quote' => 'quote.php'
];

if (array_key_exists($uri, $routes)) {
  // Route matches a core page
  require $routes[$uri];
} else {
  // Check if it matches a product page or other php file dynamically
  $potential_file = $uri . '.php';
  if ($uri !== '' && file_exists($potential_file)) {
    require $potential_file;
  } else {
    // 404 Not Found
    http_response_code(404);
    echo '<h1>404 Not Found</h1>';
    echo '<p>The page you are looking for could not be found.</p>';
    echo "<a href='" . $base_path . "'>Return Home</a>";
  }
}
?>
