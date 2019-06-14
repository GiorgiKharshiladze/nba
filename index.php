<?php
require 'AltoRouter.php';
$router = new AltoRouter();
// ROUTES
$router->map('GET', '/', 'main.php', 'main');
$router->map('GET', '/add', 'add.php', 'add');
$router->map('POST', '/submit', 'submit.php', 'submit');

// OPEN ROUTE OR 404
$match = $router->match();
if($match) {
  require $match['target'];
} else {
  header("HTTP/1.0 404 Not Found");
  require '404.php';
}
