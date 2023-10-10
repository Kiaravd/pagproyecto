<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar sesion</title>
  <link rel="stylesheet" href="login.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>

<body>
  <!-- Pills content -->
  <form class="form-body">
    <div class="tab-content">
      <div class="tab-panel fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
        <form>

          <div class="imagen_user">
            <img class="zz" src="iconos/User.png">
            <img class="hola_bro" src="iconos/lock.png">
          </div>

          <div class="formulario-body">
            <img src="iconos/Vte.png" alt="icono google">
          </div>
          <div class="text-center mb-3">
            <p>Iniciar Sesión</p>
          </div>

          <p class="text-center"></p>
          <form action="">
            <!-- Email input -->
            <div class="form-outline mb-4">
              <label class="form-label" for="loginName">Email o nombre de usuario</label>
              <br>
              <i class="fa-solid fa-sun"></i>
              <input type="email" id="loginName" class="form-control" placeholder="ejemplo123@hotmail.com" />

            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
              <label class="form-label2" for="loginPassword">Contraseña</label>
              <br>
              <input type="password" id="loginPassword" class="form-control" placeholder="pablitoclavounclavito" />

            </div>

            <!-- 2 column grid layout -->
            <div class="form-outline mb-4">
              <!-- Submit button -->
              <button type="button" onclick="login(document.getElementById('loginName').value,document.getElementById('loginPassword').value)" class="logear">Siguiente</button>
          </form>
          <!-- Register buttons -->
          <div class="text-center">
            <p>¿No tienes cuenta? <a href="../registro/Register.html">Registrarse</a></p>
          </div>
          <div class="icono google">
            <button class="google" style="background-color: #ffffff;" type="submit">
              Iniciar con Google</button>
          </div>

          <div class="icono facebook">
            <button class="facebook" style="background-color: #fff;" type="submit">
              Iniciar con Facebook</button><br>
          </div>
          <div class="col-md-6 d-flex justify-content-center">
            <!-- Simple link -->
            <a href="../recuperar/restaurar.php">¿Olvidaste tu contraseña?</a>
          </div>
      </div>
  </form>
  </div>
  </form>
  </div>
  <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="tab-register">
  </div>
  <script src="loginjs.js"></script>
</body>

</html>