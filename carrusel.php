<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- fuente de letra -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aguafina+Script&family=Almendra+SC&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Graduate&display=swap" rel="stylesheet">
    <!-- link de css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- link de script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="css/carrusel.css">

    <title>Carrusel</title>

</head>

<body>
<style>
</style>
    <div class="contenedor">
        <div class="row text-center">
         
            <div class="col">
                <h1>Bienvenido a vive tu experiencia!</h1>
            </div>
          
        </div>
        <div id="carousel" class="carousel slide">
            <div class="row text-center" >
                <div class="col-sm">
                    <!-- Boton izquierdo -->
                    <button  class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev" class="boton1">
                        <div class="flecha-izquierda">
                            <img src="iconos/flecha1.png" style="width: 50px; height: 50px;">
                        </div >
                        <span class="visually-hidden">Previous</span>
                    </button>
                </div>
                <div class="col-sm" style="border-left-style: solid; color:#efb810; border-right-style: solid; color:#efb810;">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/ushuaia.jpg" alt="..." width="350" height="220">
                            <div class="carousel-caption d-none d-md-block">
                                <div class="text1">
                                    <h6>¡VAMOS DE CAMPO EN NEUQUÉN!</h6>
                                </div>
                                <br><br><br>
                                <div class="text2">
                                    <h6>CONOCE NUESTRO COMBO PARA 3 PERSONAS!</h6>
                                </div>
                                <div class="text3">
                                    <H6>A SOLO: $200.000</H6>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/bariloche.jpg" alt="..." width="350" height="220">
                            <div class="carousel-caption d-none d-md-block">
                                <div class="text4">
                                    <h6>HEY EGRESADOS!! VAMOS A BARILOCHE!!</h6>
                                </div>
                                <br><br><br>
                                <div class="text5">
                                    <h6>VENGAN Y PRUEBEN NUESTRO COMBO PARA EGRESADOS!</h6>
                                </div>
                                <div class="text6">
                                    <H6>A SOLO: $37.200</h6>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <a href="#item3">
                                <img src="img/ushuaia.jpg" alt="..." width="350" height="220">
                                <div class="carousel-caption d-none d-md-block">
                                    <div class="text7">
                                        <h6>¿Y SI VAMOS LOS 8 A USHUAIA?</h6>
                                    </div>
                                    <br><br><br>
                                    <div class="text8">
                                        <h6>PRUEBA NUESTRO COMBO FAMILIAR PARA 8 PERSONAS!</h6>
                                    </div>
                                    <div class="text9">
                                        <h6>A SOLO: $120.000</h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                        <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next" class="boton2">
                            <div class="flecha-derecha">
                                <img src="iconos/flecha2.png" style="width: 50px; height: 50px;">
                            </div>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
            </div>
            <div class="row">
                    <div class="col" style="padding-top: 50px;">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                    </div>
                </div>
        </div>

</body>

</html>