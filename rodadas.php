<?php



use App\Models\{Rodada,Patrocinador};

$rodadas = Rodada::all();
$patrocinadores = Patrocinador::all();




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