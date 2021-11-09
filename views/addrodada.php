<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <title>add Rodada</title>
</head>
<body>
<div class="container">
    <h1>Add Rodada</h1>
    <div class="row">
        <div class="col">

        </div>
    </div>
    <form action="/boot/rodadas/add" method="POST">
        <div class="row">
            <div class="col-12 col-md-6">
                
                    <label for="titulo" class="form-label" >Titulo</label>
                    <input type="text" name="titulo" class="form-control" id="titulo" placeholder="Titulo del viaje" aria-describedby="tituloHelp">
                    <div id="titulolHelp" class="form-text">Teclea el titulo que le daras a la rodada.</div>
                 
            </div>
            <div class="col-12 col-md-6">
                
                    <label for="descripcion" class="form-label">Descripcion</label>
                    <textarea id="descripcion" name="descripcion" class="form-control form-control-lg" placeholder="Describe el viaje" ></textarea>
                    <div id="descripcionHelp" class="form-text">Teclea Una descripcion extensa.</div>
                
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                
                    <label for="months" class="form-label" >Meses</label>
                    <input type="text" name="months" class="form-control" id="months" placeholder="months" aria-describedby="monthsHelp">
                    <div id="monthslHelp" class="form-text">Teclea hace cuantos meses fue la rodada.</div>
                 
            </div>
            <div class="col-12 col-md-6">
                
                    <label for="conocemas" class="form-label">conocemas</label>
                    <input id="conocemas" name="conocemas" class="form-control " placeholder="URL valida" >
                    <div id="conocemasHelp" class="form-text">Teclea una URL valida.</div>
                
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                
                    <label for="imagen" class="form-label" >Imagen</label>
                    <input type="text" name="imagen" class="form-control" id="imagen" placeholder="imagen" aria-describedby="imagenHelp">
                    <div id="imagenlHelp" class="form-text">Teclea hace cuantos meses fue la rodada.</div>
                 
            </div>
            <div class="col-12 col-md-6">
                
                    <label for="abbr" class="form-label">abbr</label>
                    <input id="abbr" name="abbr" class="form-control " placeholder="Descripcion pequeña" >
                    <div id="abbrHelp" class="form-text">Teclea una descricion pequeña del inicio de tu texto.</div>
                
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                
                    <label for="tituloAbbr" class="form-label" >Titulo Abbr</label>
                    <input type="text" name="tituloabbr" class="form-control" id="tituloAbbr" placeholder="titulo Abbr" aria-describedby="tituloAbbrHelp">
                    <div id="tituloAbbrlHelp" class="form-text">Teclea el titulo del Abbr.</div>
                 
            </div>
            <div class="col-12">
                <div class="form-check">
                    <input name="visible" value="true" class="form-check-input" type="checkbox" id="inlineFormCheck" checked>
                    <label class="form-check-label" for="inlineFormCheck">
                        Visible
                    </label>
                </div>
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