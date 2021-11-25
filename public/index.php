<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../vendor/autoload.php';

session_start();

$dotenv = Dotenv\Dotenv :: createUnsafeImmutable(__DIR__ . '/..');
$dotenv->load();




use Illuminate\Database\Capsule\Manager as Capsule;
use Aura\Router\RouterContainer;



$capsule = new Capsule;

$capsule->addConnection([
    'driver' => 'mysql',
    'host' => getenv('DB_HOST'),
    'database' => getenv('DB_NAME'),
    'username' => getenv('DB_USER'),
    'password' => getenv('DB_PASS'),
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix' => '',
]);

// Make this Capsule instance available globally via static methods... (optional)
$capsule->setAsGlobal();

// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();

$request = Laminas\Diactoros\ServerRequestFactory::fromGlobals(
    $_SERVER,
    $_GET,
    $_POST,
    $_COOKIE,
    $_FILES
);

$routerContainer = new RouterContainer();
$map = $routerContainer->getMap();
$map->get('index','/boot/',[
    'controller'=>'App\Controllers\IndexController',
    'action'=>'indexAction'
]);
$map->get('addRodadas','/boot/rodadas/add',[
    'controller' => 'App\Controllers\RodadasController',
    'action'=> 'getAddRodadasController',
    'auth'=> true
]);
$map->post('saveRodadas','/boot/rodadas/add',[
    'controller' => 'App\Controllers\RodadasController',
    'action'=> 'getAddRodadasController'
]);
$map->get('addPatrocinadores','/boot/patrocinadores/add',[
    'controller' => 'App\Controllers\PatrocinadoresController',
    'action'=> 'getAddPatrocinadoresController',
    'auth'=> true
]);
$map->post('savePatrocinadores','/boot/patrocinadores/add',[
    'controller' => 'App\Controllers\PatrocinadoresController',
    'action'=> 'getAddPatrocinadoresController',
    'auth'=> true
]);
$map->get('addUser','/boot/users/add',[
    'controller' => 'App\Controllers\UsersController',
    'action'=> 'getAddUsersController',
    'auth'=> true
]);
$map->post('saveUsers','/boot/users/add',[
    'controller' => 'App\Controllers\UsersController',
    'action'=> 'getAddUsersController',
    'auth'=> true
]);
$map->get('loginForm','/boot/login',[
    'controller' => 'App\Controllers\AuthController',
    'action'=> 'getLogin'
]);
$map->post('auth','/boot/auth',[
    'controller' => 'App\Controllers\AuthController',
    'action'=> 'postLogin'
]);
$map->get('admin','/boot/admin',[
    'controller' => 'App\Controllers\AdminController',
    'action'=> 'getIndex',
    'auth'=> true
]);
$map->get('logout','/boot/logout',[
    'controller' => 'App\Controllers\AuthController',
    'action'=> 'getLogout'
]);

$matcher = $routerContainer->getMatcher();
$route = $matcher->match($request);



if(!$route){
    echo "No route";
}else{
    $handlerData=$route->handler;
    $controllerName = $handlerData['controller'];
    $actionName =$handlerData['action'];
    $needsAuth =$handlerData['auth'] ?? false;

    $sessionUserId=$_SESSION['userId'] ?? null;
    if($needsAuth && !$sessionUserId){
        $controllerName='App\Controllers\AuthController';
        $actionName = 'getLogout';
    }
    $controller = new $controllerName;
    $response = $controller->$actionName($request);
    foreach($response->getHeaders() as $name => $value){
        foreach($value as $value){
            header(sprintf('%s: %s',$name,$value),false);
        }
    }
    http_response_code($response->getStatusCode());
    echo $response->getBody();
}



