<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <title>add Patrocinador</title>
</head>
<body>
<div class="container">
    <h1>Add Patrocinador</h1>
    <div class="row">
        <div class="col">

        </div>
    </div>
    <form action="/boot/patrocinadores/add" method="POST">
        <div class="row">
            <div class="col-12 col-md-6">
                
                    <label for="titulo" class="form-label" >Titulo</label>
                    <input type="text" name="titulo" class="form-control" id="titulo" placeholder="Titulo del patrocinador" aria-describedby="tituloHelp">
                    <div id="titulolHelp" class="form-text">Teclea el titulo del patrocinador.</div>
                 
            </div>
            <div class="col-12 col-md-6">
                
                    <label for="descripcion" class="form-label">Descripcion</label>
                    <input id="descripcion" name="descripcion" class="form-control " placeholder="Describe a la empresa" >
                    <div id="descripcionHelp" class="form-text">Teclea una descripcion de la empresa.</div>
                
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                
                    <label for="months" class="form-label" >Meses</label>
                    <input type="number" name="months" class="form-control" id="months" placeholder="months" aria-describedby="monthsHelp">
                    <div id="monthslHelp" class="form-text">Teclea desde cuando es tu patrocinador.</div>
                 
            </div>
            <div class="col-12 col-md-6">
                
            <label for="imagen" class="form-label" >Imagen</label>
                    <input type="text" name="imagen" class="form-control" id="imagen" placeholder="imagen" aria-describedby="imagenHelp">
                    <div id="imagenlHelp" class="form-text">Teclea la URL de la imagen.</div>
                
            </div>
        </div>
        
        
        <button type="submit" class="btn btn-platzi">Submit</button>
    </form>
</div>
    

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