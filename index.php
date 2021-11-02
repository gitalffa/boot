<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$limitMonths = 3;
require_once('rodadas.php');

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <title>alffaGayala</title>
  </head>
  <body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="50">

    <!-- Inicio Header -->
    <nav id="header" class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top ">
        <div class="container">
            
                <a class="navbar-brand" href="index.php">
                    <img src="assets/images/alffa-logo.png" alt="Platzi Logo">
                    Proyecto Jubilatorio
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-bs-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#quien-soy">Quien soy </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#ultimas-rodadas">Ultimas rodadas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#patrocinadores">Patrocinadores</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#conviertete-en-patrocinador">Conviertete en Patrocinador</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-platzi" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">Comprar camisetas</a>
                        </li>
                    </ul>
                    
                </div>
            
        </div>
    </nav>

    <!-- Fin Header -->

    <!-- carrusel inicio -->
    <section id="main" class="h-100">
        <div id="carousel" class="carousel slide " data-bs-ride="carousel" data-bs-pause=“false”>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/images/fabriyyo.jpg" class="d-block w-100" alt="hawaii 1">
                </div>
                <div class="carousel-item">
                    <img src="assets/images/fabriII.jpg" class="d-block w-100" alt="hawaii 3">
                </div>
                <div class="carousel-item">
                    <img src="assets/images/cajon_1.jpg" class="d-block w-100" alt="hawaii 2">
                </div>
                <div class="carousel-item">
                    <img src="assets/images/fabririosantiago.jpg" class="d-block w-100" alt="hawaii 3">
                </div>
                <div class="carousel-item">
                    <img src="assets/images/alfredo.jpg" class="d-block w-100" alt="hawaii 3">
                </div>
            </div>
            <div class="overlay carousel-caption ">
                <div class="container">
                    <div class="row align-items-end">
                        <div class="col-6 offset-3 col-md-12 offset-md-0 text-center ">
                            <!-- <img src="assets/images/AMIGOS DE LA CARRETERA @alffatransp.png" class="img-fluid rounded-start" alt="..." width="500" height="600"> -->
                            <h1><strong style="color: #97c93e;">@</strong>lffaGayala</h1>
                            <!-- <p class="d-none d-sm-block" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; font-size: larger;">@alffa Gayala es mi proyecto personal Post-Jubilatorio donde plasmaré mis andanzas y demás peripecias de éste futuro viejito viajero. Además iré incrementando secciones donde describan las tecnologías utilizadas para hacer desde cero este espacio cibernético 
                            </p> -->
                            <!-- <a href="#conviertete-en-orador" class="btn btn-outline-light">Quiero ser Gayala</a>
                            <button type="button" class="btn btn-platzi" data-bs-toggle="modal" data-bs-target="#exampleModal">Quiero comprar camisetas</button> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- fin carrusel -->

    <!-- modal inicio -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">Comprar Camisetas</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="">
                  <div class="form-row">
                      <div class="form-group col">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">@</span>
                            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                          </div>
                      </div>
                  </div>
              </form>
              <!-- alerta  -->
              <div class="alert alert-warning text-center" role="alert">
                Recibiras un correo confirmacion
              </div>
              <!-- fin alerta -->

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
              <button type="button" class="btn btn-platzi">Comprar</button>
            </div>
          </div>
        </div>
      </div>
    <!-- modal fin -->
    <hr>
    <!-- quien soy -->
    <section id="quien-soy" class="mt-4">
        <div class="container">
            <div class="card mb-3 text-center" style="max-width: 100%;">
                <div class="row g-0">
                  <div class="col-md-6">
                    <img src="assets/images/playa.jpg" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-6">
                    <div class="card-body">
                      <h5 class="card-title">Quien soy</h5>
                      <p class="card-text" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; font-size: larger;">Hola amigos, mi nombre es Fabricio soy ingeniero en computación egresado de la uag; después de laborar por 30 años en la Comisión Federal de Electricidad, me ha llegado el tiempo de jubilarme.
                        Ahora, tengo el tiempo suficiente para disfrutar mi pasión, el motociclismo, quiero viajar todo lo que pueda y crear y compartir con ustedes contenido audiovisual.
                        Por lo tanto, he decidido crear este espacio y combinarlo con otra de mis pasiones, el dasarrollo de código para la WEB, normalmente escrito en PHP y Bootstrap.</p> 
                      <p class="card-text"><small class="text-muted">Última actualizacion 29-oct-2021</small></p>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </section>
    
    <!-- fin quien soy -->
    <hr>
<!-- lugar y fecha -->

<section id="ultimas-rodadas">
    <div class="container-fluid">
        <?php
        $totalMonths = 0;
        for ($idx=0;$idx<count($rodadas);$idx++){
            $totalMonths += $rodadas[$idx]->months;
            if($totalMonths>$limitMonths){
                break;
            }
            printRodada($rodadas[$idx]);
        };
        ?>
    </div>
</section>

<!-- fin lugar y fecha -->
<hr>
<!-- patorcinadores -->
<section id="patrocinadores">
    <div class="container">
        <div class="row mt-4">
            <div class="col text-uppercase text-center">
                <h2>Patrocinadores</h2>
                <small>Este viaje no seria posible sin ellos<br></small>
                <small>Gracias !!</small>
            </div>
        </div>
    <div class="row mt-4">
        <div class="col">
            <div class="card" style="width: 18rem; margin: 0 auto;">
                <img src="assets/images/labarra.jpeg" class="card-img-top" alt="...">
                
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem; margin: 0 auto;">
                <img src="assets/images/mafalda.jpg" class="card-img-top" alt="...">
                
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem; margin: 0 auto;">
                <img src="assets/images/dsijpg.jpg" class="card-img-top" alt="...">
                
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col">
            <div class="card" style="width: 18rem; margin: 0 auto;">
                <img src="assets/images/estacionamiento.jpg" class="card-img-top" alt="...">
                
            </div>
        </div>
    </div>
    </div>
</section>
<!-- fin patrocinadores -->
<hr>    
<!-- conveirtete en orador -->
<section id="conviertete-en-patrocinador" class="pt-4 pb-4">
    <div class="container">
        <div class="row ">
            <div class="col text-uppercase text-center">
                <small>Conviertete en</small>
                <h2>Patrocinador</h2>
            </div>
        </div>
        <div class="row">
           <div class="col text-center">
                Envia tus datos y te contactamos !!
            </div>
        </div> 
        <div class="row">
            <div class="col col-md-10 offset-md-1 col-lg-8 offset-lg-2 pt-2">
                <form action="#">
                    <div class="row">
                        <div class="form-label col col-12 col-md-6">
                          <input type="text" class="form-control" placeholder="Nombre" aria-label="Nombre">
                        </div>
                        <div class="form-label col col-12 col-md-6">
                          <input type="text" class="form-control" placeholder="Apellido" aria-label="apellido">
                        </div>
                      </div>
                      <div class="form-row">
                          <div class="form-label col">
                              <textarea name="text" class="form-control form-control-lg" placeholder="Describe el viaje" ></textarea>
                              <small class="form-text text-muted">
                                  Recuerda incluir a donde y porque quieres que que vayamos a tu destino !!
                              </small>
                          </div>
                      </div>
                      <div class="form-row">
                          <div class="d-grid gap-2 col">
                              <button type="button" class="btn btn-platzi btn-block">enviar</button>
                          </div>
                      </div>
                </form>
            </div>
        </div> 
    </div>
</section>
<!-- fin conviertete -->

<hr>
<!-- Inicio Footer -->
    <footer id="footer" class="pb-4 pt-4">
        <div class="container">
            <div class="row text-center">
               <div class="col-12 col-lg">
                   <a href="#">Preguntas Frecuentes</a>
               </div> 
               <div class="col-12 col-lg">
                    <a href="#">Contactanos</a>
                </div>
                <div class="col-12 col-lg">
                    <a href="#">Prensa</a>
                </div>
                <div class="col-12 col-lg">
                    <a href="#">Terminos y condiciones</a>
                </div>
                <div class="col-12 col-lg">
                    <a href="#">Privacidad</a>
                </div>
                
            </div>
        </div>
    </footer>
<!-- Fin Footer -->
<hr>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <script src="index.js"></script>
</body>
</html>