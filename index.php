<!doctype html>
<html lang="en">
  <head>
    <title>Bono</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  </head>
  <body>
  <div class="container mt-4">
        <div class="row">
            <div class="col">
                <div class="jumbotron jumbotron-fluid" style="background-color: #FFE4E1;">
                    <div class="container" >
                    <h1 class="display-5">Bono adicional</h1>
                    <hr>
                        <h3 class="display-9">Datos del empleado</h3>
                        <form method="post" onsubmit="return calcular()" id="bono">
                        <div class="row mt-4">
                            <div class="col-sm-6">
                                <label for="sueldo">Sueldo:  </label>
                                <input type="text"  id="sueldo" name="sueldo" pattern="[0-9]+"  class="form-control">
                                
                            </div>
                            <div class="col-sm-6">
                                <label for="edad">Edad: </label>
                                <input type="text"  id="edad" name="edad" pattern="[0-9]+"  class="form-control">
                                
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-sm-6">
                                <label for="sexo">Sexo:  </label>
                                <select name="sexo" id="sexo" class="form-control">
                                    <option value="">Seleccionar </option>
                                    <option value="femenino">Femenino</option>
                                    <option value="masculino">Masculino</option>
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <label for="nacionalidad">Nacionalidad: </label>
                                <select name="nacionalidad" id="nacioalidad" class="form-control">
                                    <option value="">Seleccionar </option>
                                    <option value="nacional">Nacional</option>
                                    <option value="extranjero">Extranjero</option>
                                </select> 
                            </div>
                        </div>
                        <hr>
                        <h4>Cursos</h4>
                        <div class="row mt-4">
                            <div class="col">
                                <input type="checkbox" name="curso" id="php" value="60"  > 
                                <label for="php">PHP</label>
                            </div>
                            <div class="col">
                                <input type="checkbox" name="curso" id="java" value="105"  > 
                                <label for="java">Java</label>
                            </div>
                        </div>
                        <div class="row">
                             <div class="col">
                                <input type="checkbox" name="curso" id="ASP" value="120"  >
                                <label for="ASP">ASP.Net</label>
                            </div>
                            <div class="col">
                                <input type="checkbox" name="curso" id="oracle" value="180"  >
                                <label for="oracle">Oracle</label>
                            </div>
                        </div>
                        <div class="row">
                             <div class="col">
                                <input type="checkbox" name="curso" id="VB" value="165"  >
                                <label for="VB">VB.Net</label>
                            </div>
                            <div class="col">
                                <input type="checkbox" name="curso" id="bd" value="45" >
                                <label for="bd">Introducción a BD</label>
                            </div>
                        </div>
                        <hr>
                        <h4>Antigüedad</h4>
                        <div class="row">
                            <div class="col-sm-4">
                                <input type="radio" name="Antigüedad" id="1a5años" value="1a5años"> 
                                <label for="1a5años">1 a 5 años</label>
                            </div>
                            <div class="col-sm-4">
                                <input type="radio" name="Antigüedad" id="6a10años" value="6a10años"> 
                                <label for="6a10años">6 a 10 años</label>
                            </div>
                            <div class="col-sm-4">
                                <input type="radio" name="Antigüedad" id="mas10" value="mas10"> 
                                <label for="mas10">Más de 10 años</label>
                            </div>
                        </div>
                        <hr>
                        <div class="row mt-4">
                            <div class="col">
                                <button class="btn btn-outline-success" >Calcular</button>
                            </div>
                            <div class="col">
                                <label for="Bono">Bono: </label>
                                <input type="text" id="cantidadPagar"  class="form" readonly size="45" value="0">
                            </div>
                           
                        </div>
                        <div class="row mt-4">
                            <div class="col">
                                <span class="btn btn-warning" onclick="limpiarFormulario()">Nuevo Calculo</span>
                            </div>
                            <div class="col">
                                <span class="btn btn-danger" onclick="">Salir</span>
                            </div>
                            
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="app.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>