<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- fuente de letra -->
  <link href="https://fonts.googleapis.com/css2?family=Aguafina+Script&family=Almendra+SC&display=swap"
    rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Graduate&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Aguafina+Script&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Signika+Negative&display=swap" rel="stylesheet">

  <!-- link css bstp -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <!-- link iconos -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://boxicons.com/">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <!-- link script -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
    <!-- link css personal -->
   <link rel="stylesheet" href="css/encabezado.css">
   <link rel="stylesheet" href="css/carrusel.css">
   <link rel="stylesheet" href="css/boton.css">
   <link rel="stylesheet" href="css/ayuda.css">
   <link rel="stylesheet" href="css/contacto.css">
   <link rel="stylesheet" href="css/pagprincipal.css">

    <title>Vive tu experiencia</title>
</head>
<body>
  <!-- menu -->
    <header> <?php include("encabezado.php")?> </header>

    <div class="contenedor1">
      <br><br>
      <h1>Bienvenido a vive tu experiencia!</h1>
      <br><br><br>
      <div id="carousel" class="carousel slide">
        <div class="v-line"></div>
        <div class="c-line"></div>
    
        <!-- Imagen 1 -->
        <center>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/neuquen.jpg" alt="..." width="350" height="220">
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
    
            <!-- Imagen 2 -->
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
    
    
            <!-- Imagen 3 -->
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
        </center>
        <!-- Boton izquierdo -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev" class="boton1">
         <div class="flecha-izquierda">
          <img src="img/flecha1.png">
         </div>
          <span class="visually-hidden">Previous</span>
        </button>
        <!-- Boton Derecho -->
        <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next" class="boton2">
         <div class="flecha-derecha">
          <img src="img/flecha2.png">
         </div>
          <span class="visually-hidden">Next</span>
        </button>
        <br><br>
    <div class="carousel-indicators">
          <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div> 
      </div>
    </div>
    <div class="contenedor2">
    <div class="cuadro">   
      <h3>¿Quieres crear tu propio paquete de viajes?</h3>
      <h4> Nuestro sitio web es una agencia de viajes turísticos la cual ofrece al <br>
          usuario sus servicios para poder viajar a donde desee dentro de la Argentina, 
          de manera rápida, fácil y segura. También, le ofrecemos la posibilidad de crear  
          ¡su propio paquete de viajes! 
          <br>
   <button class="boton" onclick="location.href='paginacrearpaquete.html'">¡Crear paquete!</button>
      </h4>  
  </div>  
      <br>
    </div>
    <div class="contenedor4">
      <br>
      <div class="text">
      <div class="titulo">
          <h1 style="text-align: center;">¿Qué necesitas?</h1>
      </div>
      <div class="cuerpo">
          <p style="text-align: center;">Nuestra empresa busca la manera de que el usuario que adquiera nuestros servicios, pueda orientarse y
              <br>
               acceder a ellos de la mejor manera posible, por lo tanto, te mostramos algunos apartados en orden, donde 
               <br>
               podras ingresar segun tus necesidades.</p>
         
      </div> 
  </div>
  <div class="contenedordeopciones">
    
          <div class="row">
              <div class="cuerpo1">
                  <img class="icono1" src="iconos/call.png"/>
                  <div class="titulo1">
                      <h3>Soporte</h3>
                  </div>
                  <p>Si tuviste algún inconveniente
                      <br>
                       con el sitio web o con la compra
                       <br>
                        del paquete de viajes, puedes ir a 
                        <br>
                        Soporte, donde se analizara y
                        <br>
                         solucionara tu problema. Para 
                         <br>
                         eso, ingresa aquí.
                  <div class="boton1">
                      <button type="button">Ir a Soporte</button>
                  </div>
              </div>
          </div>
          <div class="cuerpo2">
              <img class="icono2" src= "iconos/notificacion.png" />
                 
              <div class="titulo2">
                  <h3>Preguntas Frecuentes</h3>
              </div>
              <p >En este apartado podras acceder
                  <br>
                   a preguntas y respuestas mas 
                   <br>
                   frecuentes sobre nuestro sitio
                   <br>
                    web resolviendo las dudas.</p>
                    <br><br>
              <div class="boton2">
                  <button type="button">Ir a preguntas frecuentes</button>
              </div>
          </div>
          <div class="cuerpo3">
              <img class="icono3"
                  src="iconos/play.png" />
              <div class="titulo3">
                  <h3>Comenzar</h3>
              </div>
              <p>Viaja a los lugares que desees 
                  <br>
                  dentro de la Argentina con los
                  <br>
                   planes que te ofrecemos en
                   <br>
                    ViveTuExperiencia.com.
                    <br>
                    Descubre los diversos lugares y
                    <br> actividades que te podemos 
                    <br>
                    ofrecer.</p>
              <button class="boton3" type="button">Comenzar</button>
          </div>
    </div>
      
      <br><br>
      <div class="relativo">
      <div class="cuerpo48"> 
      <div class="titulo48">
          <h3>Tu experiencia es lo que nos importa</h3>
      </div>
          <p>Por algo nuestro producto se llama "Vive tu experiencia", porque buscamos siempre que usted se lleve la
              <br>
              mejor experiencia, atención, sea antes, durante y después de adquirir del producto. Si necesita ayuda con
              <br>
              algo, no se haga problemas. Nosotros siempre estaremos aquí para escucharlo, guiarlo y ayudarlo.</p>
              <br>
  </div>
    </div>
  </div>
 
  <div class="contenedor5">
    <div class="body1">

   
    <div  class="reten1" >
      <div class="linea"></div> 
    </div>
    <div class="reten0">
          <br><br>
          <h2>¿QUIERE CONTACTARSE CON NOSOTROS?</h2>
          <br>
        </div>
          <form>
            <div class="reten2">
              <div class="imagen" >
                  <img  src="iconos/vte.jpeg" >
              </div>
            </div>
              <br><br><br>
              <div class="reten3">
          <h5 class="fontcontacto">Si necesita hablar con alguno de nuestros operadores, llame al +54 9 11 **** ****, para poder analizar 
              y resolver su  problema.</h5>
            </div>
          </form>
          <div class="reten4">
          <br><br><br<br><br><br><br><br><br><BR>
          <h6 class="fontcontacto2">Por la Nación, Vive tu experiencia.</h6>
          <h6 class="fontcontacto2">© 2023 Por la Nacion. Reservados todos los derechos.</h6>
        </div>
  </div>
</div>
</body>
</html>