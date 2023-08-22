<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- fuente de letra -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Aguafina+Script&family=Almendra+SC&display=swap"
    rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Graduate&display=swap" rel="stylesheet">
  <!-- link css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <!-- link script -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
  <!-- link iconos -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <title>Tarjetas</title>

  <link rel="stylesheet" href="css/tarjetas.css">
</head>

<body>
  
  <br>
  <h1>Turismo al mejor precio!</h1>
  <br>

  <div id="recuadro">
    <div class="card1 card mb-3"  onclick="location.href='paquetepredeterminado.html'">
      <div class="row fondo"> 
          <center><h5>¿Estas en Buenos Aires? ¡Veni a Tigre!</h5></center>
      </div>
      <br>
      <div class="row fondo"> 
        <div class="col-sm-6 col-md-3">
            <img src="img/tigre1.jpg" class="img-fluid rounded-start">
        </div>
        <div class="col-sm-6 col-md-3">
          <p class="card-text"> <i class='bx bxs-train bx-sm'></i> Tren Mitre, Retiro (Bs.As).</p>
          <p class="card-text"><i class='bx bxs-bed bx-sm'></i> Wyndham Nordelta, Tigre Hotel</p>
          <!--5 Estrellas-->
          <div class="star">
            <img src="img/star1.png">
          </div>
          <div class="star2">
            <img src="img/star1.png">
          </div>
          <div class="star3">
            <img src="img/star1.png">
          </div>
          <div class="star4">
            <img src="img/star1.png">
          </div>
          <div class="star5">
            <img src="img/star2.png">
          </div>
          <!--5 Estrellas-->      
          <br><br>
          <p class="card-text">Precio Final por Persona:</p>
          <p class="card-text">ARS $83,853</p>
          <br>
        </div>
        <div class="col-sm-6 col-md-3">
          <p class="card-text"> <i class='bx bx-fork bx-sm'></i> Buffet incluido</p>
          <p class="card-text"> <i class='bx bx-water bx-sm'></i> Piscina de natación</p>
          <p class="card-text"> <i class='bx bx-wifi bx-sm'></i> Wi-Fi </p>
            <p class="card-text"> <i class='bx bxs-drink bx-sm'></i> Minibar</p>
            <p class="card-text">Incluye Impuestos, tasas y cargos</p>
        </div>
        <div class="v-line"></div>

        <div class="col-sm-6 col-md-2" id="icono">
              <img width='80%' src="img/train.png">
        </div>
      </div>
    </div>


    <div class="card2 card mb-3"  onclick="location.href='paquetepredeterminado.html'">
      <div class="row fondo"> 
          <center><h5>¿Hacemos un viaje a Jujuy?</h5></center>
      </div>
      <br>
      <div class="row fondo"> 
        <div class="col-sm-6 col-md-3">
            <img src="img/jujuy1.jpg" class="img-fluid rounded-start">
        </div>
        <div class="col-sm-6 col-md-3">
          <p class="card-text"> <i class='bx bxs-plane-take-off bx-sm'></i> Directo BSAS <i
            class='bx bxs-right-arrow-alt bx-sm'></i> Jujuy</p>
        <p class="card-text"><i class='bx bxs-bed bx-sm'></i> Howard Johnson Plaza Jujuy</p>
          <!--5 Estrellas-->
          <div class="star">
            <img src="img/star1.png">
          </div>
          <div class="star2">
            <img src="img/star1.png">
          </div>
          <div class="star3">
            <img src="img/star1.png">
          </div>
          <div class="star4">
            <img src="img/star1.png">
          </div>
          <div class="star5">
            <img src="img/star2.png">
          </div>
          <!--5 Estrellas-->      
          <br><br>
          <p class="card-text">Precio Final por Persona:</p>
          <p class="card-text">ARS $42,983</p>
          <br>
        </div>
        <div class="col-sm-6 col-md-3" >
          <p class="card-text"> <i class='bx bx-fork bx-sm'></i> Buffet incluido</p>
          <p class="card-text"> <i class='bx bx-swim bx-sm'></i> Piscina climatizada</p>
          <p class="card-text"> <i class='bx bx-money-withdraw bx-sm'></i> Casino</p>
          <p class="card-text"> <i class='bx bx-wifi bx-sm'></i> Wi-Fi </p>
          <p class="card-text">Incluye Impuestos, tasas y cargos</p>
        </div>
        <div class="v-line"></div>
        <div class="col-sm-6 col-md-2" id="icono">
              <img width='80%' src="img/avion.png">
        </div>
      </div>
    </div>

    <div class="card3 card mb-3"  onclick="location.href='paquetepredeterminado.html'">
      <div class="row fondo"> 
          <center><h5>¿Te interesa Misiones?</h5></center>
      </div>
      <br>
      <div class="row fondo"> 
        <div class="col-sm-6 col-md-3">
            <img src="img/misiones1.jpg" class="img-fluid rounded-start">
        </div>
        <div class="col-sm-6 col-md-3">
          <p class="card-text"> <i class='bx bxs-bus bx-sm'></i> Directo Cordoba <i class='bx bxs-right-arrow-alt bx-sm'></i>
            Misiones</p>
          <p class="card-text"><i class='bx bxs-bed bx-sm'></i> Panoramic Grand Hotel</p>
          <!--5 Estrellas-->
          <div class="star">
            <img src="img/star1.png">
          </div>
          <div class="star2">
            <img src="img/star1.png">
          </div>
          <div class="star3">
            <img src="img/star1.png">
          </div>
          <div class="star4">
            <img src="img/star1.png">
          </div>
          <div class="star5">
            <img src="img/star2.png">
          </div>
          <!--5 Estrellas-->      
          <br><br>
          <p class="card-text">Precio Final por Persona:</p>
          <p class="card-text">ARS $32,372</p>
          <br>
        </div>
        <div class="col-sm-6 col-md-3" >
          <p class="card-text"> <i class='bx bx-fork bx-sm'></i> Buffet incluido</p>
          <p class="card-text"> <i class='bx bx-swim bx-sm'></i> Piscina para niños </p>
          <p class="card-text"> <i class='bx bx-dumbbell bx-sm'></i> Sala fitness </p>
          <p class="card-text"> <i class='bx bx-wifi bx-sm'></i> Wi-Fi </p>
          <p class="card-text">Incluye Impuestos, tasas y cargos</p>
        </div>
        <div class="v-line"></div>
        <div class="col-sm-6 col-md-2" id="icono">
              <img width='80%' src="img/bus.png">
        </div>
      </div>
    </div>


    <div class="card4 card mb-3"  onclick="location.href='paquetepredeterminado.html'">
      <div class="row fondo"> 
          <center><h5>¡Vamos a Neuquén!</h5></center>
      </div>
      <br>
      <div class="row fondo"> 
        <div class="col-sm-6 col-md-3">
            <img src="img/neuquen1.jpg" class="img-fluid rounded-start">
        </div>
        <div class="col-sm-6 col-md-3">
          <p class="card-text"> <i class='bx bxs-plane-take-off bx-sm'></i> Directo BSAS <i
            class='bx bxs-right-arrow-alt bx-sm'></i> Neuquén</p>
        <p class="card-text"><i class='bx bxs-bed bx-sm'></i> Cyan Soho Hotel, Neuquén</p>
          <!--5 Estrellas-->
          <div class="star">
            <img src="img/star1.png">
          </div>
          <div class="star2">
            <img src="img/star1.png">
          </div>
          <div class="star3">
            <img src="img/star1.png">
          </div>
          <div class="star4">
            <img src="img/star1.png">
          </div>
          <div class="star5">
            <img src="img/star2.png">
          </div>
          <!--5 Estrellas-->      
          <br><br>
          <p class="card-text">Precio Final por Persona:</p>
          <p class="card-text"> ARS $34,542</p>
          <br>
        </div>
        <div class="col-sm-6 col-md-3" >
          <p class="card-text"> <i class='bx bx-fork bx-sm'></i> Buffet incluido</p>
          <p class="card-text"> <i class='bx bx-dumbbell bx-sm'></i> Sala fitness </p>
          <p class="card-text"> <i class='bx bxs-car bx-sm'></i> Estacionamiento </p>
          <p class="card-text"> <i class='bx bx-wifi bx-sm'></i> Wi-Fi </p>
          <p class="card-text">Incluye Impuestos, tasas y cargos</p>
        </div>
        <div class="v-line"></div>
        <div class="col-sm-6 col-md-2" id="icono">
              <img width='80%' src="img/avion.png">
        </div>
      </div>
    </div>

    <div class="card5 card mb-3"  onclick="location.href='paquetepredeterminado.html'">
      <div class="row fondo"> 
          <center><h5>¿Un paseo a Buenos Aires?</h5></center>
      </div>
      <br>
      <div class="row fondo"> 
        <div class="col-sm-6 col-md-3">
            <img src="img/bsas1.jpg" class="img-fluid rounded-start">
        </div>
        <div class="col-sm-6 col-md-3">
          <p class="card-text"> <i class='bx bxs-bus bx-sm'></i> Directo Jujuy<i class='bx bxs-right-arrow-alt bx-sm'></i>
            BSAS</p>
          <p class="card-text"><i class='bx bxs-bed bx-sm'></i> HTL Urbano Hotel, BSAS</p>
          <!--5 Estrellas-->
          <div class="star">
            <img src="img/star1.png">
          </div>
          <div class="star2">
            <img src="img/star1.png">
          </div>
          <div class="star3">
            <img src="img/star1.png">
          </div>
          <div class="star4">
            <img src="img/star1.png">
          </div>
          <div class="star5">
            <img src="img/star2.png">
          </div>
          <!--5 Estrellas-->      
          <br><br>
          <p class="card-text">Precio Final por Persona:</p>
          <p class="card-text"> ARS $48,500</p>
          <br>
        </div>
        <div class="col-sm-6 col-md-3">
          <p class="card-text"> <i class='bx bx-fork bx-sm'></i> Buffet incluido</p>
          <p class="card-text"> <i class='bx bx-water bx-sm'></i> Bañera hidromasaje </p>
          <p class="card-text"> <i class='bx bx-wifi bx-sm'></i> Wi-Fi </p>
          <p class="card-text"> <i class='bx bxs-drink bx-sm'></i> Minibar</p>
          <p class="card-text">Incluye Impuestos, tasas y cargos</p>
        </div>
        <div class="v-line"></div>
        <div class="col-sm-6 col-md-2" id="icono">
              <img width='80%' src="img/bus.png">
        </div>
      </div>
    </div>


  </div>
  <br>
</body>
</html>