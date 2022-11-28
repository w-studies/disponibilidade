<?php
// default controller
$controller = 'dashboard';

// default view
$view = 'index';

// se tiver algo na url
if (isset($_SERVER['PATH_INFO'])) {

  // explode a string na barra, se existir
  $url = explode('/', trim($_SERVER['PATH_INFO'], '/'));

  // o primeiro elemento será o controller
  $controller = array_shift($url);

  // se ainda tiver algo em $url
  if (sizeof($url)) {
    // será a view
    $view = array_shift($url);
  }

  // o restante ou nada, serão os params
  $Params = $url;
}

// define name e path do controller
$Controller = [
  'name' => $controller,
  'path' => '../app/controllers/' . $controller . '.php'
];

// define name e path para a view
$View = [
  'name' => $view,
  'path' => $controller . '/' . $view,
];

// se o controller não for uma rota pública
if (!in_array($controller, $PublicRoutes)) {
  // o user deve estar autenticado
  // se não há um user logado
  if (!isset($_SESSION['username'])) {
    header('Location: login');
    exit();
  }
}

// se existir o arquivo para o controller
if (is_file($Controller['path'])) {
  // executa o controller
  require $Controller['path'];
}
