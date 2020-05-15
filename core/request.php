<?php


$page = $_GET['page'];


if (!empty($page)) {
  
  $data = array(
    'tiendas' => array('model' => 'Tiendas', 'view' => 'tiendas', 'controller' => 'TiendasController'),
    'productos' => array('model' => 'Productos', 'view' => 'productos', 'controller' => 'ProductosController'),
    'login' => array('model' => 'Usuario', 'view' => 'login', 'controller' => 'UsuarioController'),
    'blog' => array('model' => 'Blog', 'view' => 'index', 'controller' => 'BlogController')
  );

  foreach($data as $key => $components) {
    if ($page == $key) {
      $model = $components['model'];
      $view = $components['view'];
      $controller = $components['controller'];
      break;
    }
  }

  if (isset($model)) {
    require_once 'controller/'.$controller.'.php';
    $objeto = new $controller();
    $objeto->$view();

  }
} else {
  header('Location: index.php?page=tiendas');
}


