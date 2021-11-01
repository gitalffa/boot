<?php
$rodada =[
    [
        'titulo' => 'Mecatán 12 - Octubre - 2021 ',
        'conocemas' => 'https://www.google.com/search?q=mecat%C3%A1n&oq=mecat%C3%A1n&aqs=chrome..69i57j46i512j0i512j69i60l3.7017j0j7&sourceid=chrome&ie=UTF-8',
        'imagen' => 'assets/images/mecatan.jpg',
        'abbr' => 'Se localiza en el Municipio San Blas del Estado de Nayarit México',
        'tituloabbr' => 'Mecatán'
    ],
    [
        'titulo' => 'El Cajón 19 - Octubre - 2021',
        'conocemas' => 'https://www.google.com/search?q=presael+cajon&oq=presael+cajon&aqs=chrome..69i57j0i13l6j0i22i30l3.3194j0j15&sourceid=chrome&ie=UTF-8',
        'imagen' => 'assets/images/elcajon.jpg',
        'abbr' => 'más formalmente llamada Presa Leonardo Rodríguez Alcaine',
        'tituloabbr' => 'El cajón'
    ],
    [
        'titulo' => 'San Blas',
    ],
    [
        'titulo' => 'La curva',
    ]
       
];
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
  <body data-bs-spy="scroll" data-bs-target="#navbar" data-offset="86">

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
                            <a class="nav-link" href="#conviertete-en-orador">Conviertete en Gayala</a>
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
                    <div class="row align-items-center">
                        <div class="col text-center ">
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
    <!-- speakers -->
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
    
    <!-- fin speakers -->
<!-- lugar y fecha -->

<section id="ultimas-rodadas">
    <div class="container-fluid">
        <div class="row">
             <div class="col-12 col-lg-6 pe-0 ps-0">
                <img src="<?php echo $rodada[0]['imagen'] ?>" alt="<?php echo $rodada[0] ?>">
             </div>
             <div class="col-12 col-lg-6 pt-2 pb-4 pt-4">
                 <h2><?php echo $rodada[0]['titulo']; ?></h2>
                 <p><abbr title="<?php echo $rodada[0]['abbr'] ?>" data-bs-toggle="tooltip"><?php echo $rodada[0]['tituloabbr'] ?></abbr> El Mamey es prácticamente un rincón escondido de Nayarit, ideal para toda la familia y amigos, en el municipio de San Blas, muy cerca del poblado de Mecatán.
                    Consiste en una serie de piletas y un arroyo de aguas de alto contenido mineral, el cual le da tonalidades de azul y gris a sus corrientes. Cuenta con diferentes secciones: al principio están unas piletas de baja profundidad, en las que se puede caminar para llegar a unas pequeñas cascadas que dan a unos manantiales de mayor profundidad.
                    El lugar ofrece una pequeña tienda en la que se ofrecen bebidas y diferentes snacks para pasar la tarde.
                    El Mamey está integrado por varias piletas, las cuales se pueden disfrutar por una módica cuota de acceso para el cuidado del lugar. Los propios pobladores promueven la cultura del cuidado a la naturaleza e invitan a dejar el lugar más limpio de como lo encuentra el visitante.
                    Para llegar a este destino la vía más rápida es por la nueva autopista Tepic-San Blas, donde se recorren aproximadamente 20 kilómetros hasta llegar a la desviación de Mecatán. En este poblado se pueden encontrar a la venta plátanos, café, aguacate, mango y diversas frutas que abundan en la región.</p>
                    <a href="<?php echo $rodada[0][conocemas]; ?>" target="_blank" class="btn btn-outline-light" >Conoce más</a>
            </div>
        </div>
        <div class="row">
             <div class="col-12 col-lg-6 pe-0 ps-0">
                <img src="<?php echo $rodada[1]['imagen'] ?>" alt="<?php echo $rodada[0] ?>">
             </div>
             <div class="col-12 col-lg-6 pt-2 pb-4 pt-4">
                 <h2><?php echo $rodada[1]['titulo']; ?></h2>
                 <p><abbr title="<?php echo $rodada[1]['abbr'] ?>" data-bs-toggle="tooltip"><?php echo $rodada[0]['tituloabbr'] ?></abbr> La Presa El Cajón, más formalmente llamada Presa Leonardo Rodríguez Alcaine, es una central hidroeléctrica ubicada
                  en el cauce del Río Grande de Santiago en el municipio de Santa María del Oro, Nayarit. Inició operaciones el 1 de marzo de 2007. Tiene la capacidad de generar 750 megawatts de energía eléctrica. Mide 640 m de largo y 178 m de alto; su 
                  embalse tiene la capacidad de albergar 2,282 hectómetros cúbicos de agua.​ Tuvo un costo aproximado de 800 millones de dólares. La presa es operada por la Comisión Federal de Electricidad.</p>
                    <a href="<?php echo $rodada[1][conocemas]; ?>" target="_blank" class="btn btn-outline-light" >Conoce más</a>
            </div>
        </div>
    </div>
</section>

<!-- fin lugar y fecha -->
    
<!-- conveirtete en orador -->
<section id="conviertete-en-orador" class="pt-4 pb-4">
    <div class="container">
        <div class="row ">
            <div class="col text-uppercase text-center">
                <small>Conviertete en</small>
                <h2>Gayala</h2>
            </div>
        </div>
        <div class="row">
           <div class="col text-center">
                Anótate como participante de este <abbr title="Debes tener el apelligo Galindo" data-bs-toggle="tooltip">Gran Proyecto</abbr>. Cuéntanos a donde quieres ir !
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
                                  Recuerda incluir porque quieres ir ahí !!
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