<?php

require 'app/Models/Rodada.php';
require 'app/Models/Patrocinador.php';

$rodada1 = new Rodada('Mecatán 12 - Octubre - 2021 ','https://www.google.com/search?q=mecat%C3%A1n&oq=mecat%C3%A1n&aqs=chrome..69i57j46i512j0i512j69i60l3.7017j0j7&sourceid=chrome&ie=UTF-8');

$rodada1->imagen = 'assets/images/mecatan.jpg';
$rodada1->abbr = 'Se localiza en el Municipio San Blas del Estado de Nayarit México';
$rodada1->tituloabbr = 'Mecatán';
$rodada1->description = 'El Mamey es prácticamente un rincón escondido de Nayarit, ideal para toda la familia y amigos, en el municipio de San Blas, muy cerca del poblado de Mecatán.
Consiste en una serie de piletas y un arroyo de aguas de alto contenido mineral, el cual le da tonalidades de azul y gris a sus corrientes. Cuenta con diferentes secciones: al principio están unas piletas de baja profundidad, en las que se puede caminar para llegar a unas pequeñas cascadas que dan a unos manantiales de mayor profundidad.
El lugar ofrece una pequeña tienda en la que se ofrecen bebidas y diferentes snacks para pasar la tarde.';
$rodada1->visible = true;
$rodada1->months = 1;

$rodada2 = new Rodada('El Cajón 19 - Octubre - 2021 ','https://www.google.com/search?q=presael+cajon&oq=presael+cajon&aqs=chrome..69i57j0i13l6j0i22i30l3.3194j0j15&sourceid=chrome&ie=UTF-8');

$rodada2->imagen = 'assets/images/elcajon.jpg';
$rodada2->abbr = 'más formalmente llamada Presa Leonardo Rodríguez Alcaine';
$rodada2->tituloabbr = 'El cajón';
$rodada2->description = 'La Presa El Cajón, más formalmente llamada Presa Leonardo Rodríguez Alcaine, es una central hidroeléctrica ubicada
en el cauce del Río Grande de Santiago en el municipio de Santa María del Oro, Nayarit. Inició operaciones el 1 de marzo de 2007. Tiene la capacidad de generar 750 megawatts de energía eléctrica. Mide 640 m de largo y 178 m de alto; su 
embalse tiene la capacidad de albergar 2,282 hectómetros cúbicos de agua.​ Tuvo un costo aproximado de 800 millones de dólares. La presa es operada por la Comisión Federal de Electricidad.';
$rodada2->visible = true;
$rodada2->months = 1;

$rodada3 = new Rodada('','https://www.google.com/search?q=presael+cajon&oq=presael+cajon&aqs=chrome..69i57j0i13l6j0i22i30l3.3194j0j15&sourceid=chrome&ie=UTF-8');

$rodada3->imagen = 'assets/images/elcajon.jpg';
$rodada3->abbr = 'más formalmente llamada Presa Leonardo Rodríguez Alcaine';
$rodada3->tituloabbr = 'El cajón';
$rodada3->description = 'La Presa El Cajón, más formalmente llamada Presa Leonardo Rodríguez Alcaine, es una central hidroeléctrica ubicada
en el cauce del Río Grande de Santiago en el municipio de Santa María del Oro, Nayarit. Inició operaciones el 1 de marzo de 2007. Tiene la capacidad de generar 750 megawatts de energía eléctrica. Mide 640 m de largo y 178 m de alto; su 
embalse tiene la capacidad de albergar 2,282 hectómetros cúbicos de agua.​ Tuvo un costo aproximado de 800 millones de dólares. La presa es operada por la Comisión Federal de Electricidad.';
$rodada3->visible = true;
$rodada3->months = 1;

$rodadas =[
    $rodada1,
    $rodada2,
    $rodada3
];

$patrocinador1 = new Patrocinador('assets/images/labarra.jpeg');

$patrocinador2 = new Patrocinador('assets/images/mafalda.jpg');

$patrocinador3 = new Patrocinador('assets/images/dsijpg.jpg');

$patrocinador4 = new Patrocinador('assets/images/estacionamiento.jpg');



$patrocinadores=[
    $patrocinador1,
    $patrocinador2,
    $patrocinador3,
    $patrocinador4
];

function printRodada($rodada){
    if($rodada->visible ==false){
        return;
    }
    ?>
            <div class="row">
                <div class="col-12 col-lg-6 pe-0 ps-0">
                        <img src="<?php echo $rodada->imagen ?>" alt="<?php echo $rodada->tituloabbr ?>">
                    </div>
                    <div class="col-12 col-lg-6 pt-2 pb-4 pt-4">
                        <h2><?php echo $rodada->getTitulo(); ?></h2>
                        <h2><?php echo $rodada->getDurationAsString(); ?></h2>
                        <p><abbr title="<?php echo $rodada->abbr ?>" data-bs-toggle="tooltip"><?php echo $rodada->tituloabbr ?></abbr> <?php echo $rodada->description; ?></p>
                            <a href="<?php echo $rodada->conocemas ?>" target="_blank" class="btn btn-outline-light" >Conoce más</a>
                </div>
            </div>
            <?php
}

function printPatrocinador($patrocinador){
    ?>
        <div class="col">
            <div class="card" style="width: 18rem; margin: 0 auto;">
                <img src="<?php echo $patrocinador->imagen ?>" class="card-img-top" alt="...">     
            </div>
        </div>
            <?php
}