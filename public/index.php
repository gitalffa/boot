<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as Capsule;
use Aura\Router\RouterContainer;


$capsule = new Capsule;

$capsule->addConnection([
    'driver' => 'mysql',
    'host' => 'localhost',
    'database' => 'gayala',
    'username' => 'root',
    'password' => 'p@nt@n@l',
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
    'action'=> 'getAddRodadasController'
]);
$map->post('saveRodadas','/boot/rodadas/add',[
    'controller' => 'App\Controllers\RodadasController',
    'action'=> 'getAddRodadasController'
]);
$map->get('addPatrocinadores','/boot/patrocinadores/add',[
    'controller' => 'App\Controllers\PatrocinadoresController',
    'action'=> 'getAddPatrocinadoresController'
]);
$map->post('savePatrocinadores','/boot/patrocinadores/add',[
    'controller' => 'App\Controllers\PatrocinadoresController',
    'action'=> 'getAddPatrocinadoresController'
]);

$matcher = $routerContainer->getMatcher();
$route = $matcher->match($request);

function printRodada( $rodada){
    /*     if($rodada->visible ==false){
            return;
        } */
        ?>
                <div class="row">
                    <div class="col-12 col-lg-6 pe-0 ps-0">
                            <img src="<?php echo $rodada->imagen ?>" alt="<?php echo $rodada->tituloabbr ?>">
                        </div>
                        <div class="col-12 col-lg-6 pt-2 pb-4 pt-4">
                            <h2><?php echo $rodada->titulo; ?></h2>
                            <h2><?php echo $rodada->getDurationAsString(); ?></h2>
                            <p><abbr title="<?php echo $rodada->abbr ?>" data-bs-toggle="tooltip"><?php echo $rodada->tituloabbr ?></abbr> <?php echo $rodada->descripcion; ?></p>
                                <a href="<?php echo $rodada->conocemas ?>" target="_blank" class="btn btn-outline-light" >Conoce más</a>
                    </div>
                </div>
        <?php
    }

    function printPatrocinador( $patrocinador){
        ?>
            <div class="col">
                <div class="card" style="width: 18rem; margin: 0 auto;">
                    <img src="<?php echo $patrocinador->imagen ?>" class="card-img-top" alt="...">   
                    <h6> <?php echo $patrocinador->getDurationAsString(); ?></h6> 
                    <div class="alert alert-success" role="alert">
                        <?php echo $patrocinador->descripcion; ?>   
                    </div>
                    
                </div>
            </div>
        <?php
    }

if(!$route){
    echo "No route";
}else{
    $handlerData=$route->handler;
    $controllerName = $handlerData['controller'];
    $actionName =$handlerData['action'];
    $controller = new $controllerName;
    $controller->$actionName($request);

}



