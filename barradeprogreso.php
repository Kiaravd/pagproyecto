<!DOCTYPE html>
<html>
<head>
  <title>Barra de progreso con información dinámica</title>
  <?php include("encabezado.php") ?>
</head>
<body>
    <div class="container mt-4">
    <div id="tarjeta" class="mt-4">

    <div id="barra" class="card">
    <div class="row">
      <div class="col">Verificación del paquete</div>
      <div class="col text-center">Métodos de pago</div>
      <div class="col text-end">Confirmación</div>
    </div>
    <div class="progress mt-4">
      <div id="progress-bar" class="progress-bar" role="progressbar" aria-label="Warning example" style="width: 0%; background-color:#efb810" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
  </div>
  </div>
    <div id="tarjetas" class="mt-4">
      <div id="card1" class="card">
        <div class="card-body">
        <?php include("verificacionpaquete.php")?>
        </div>
      </div>
      <div id="card2" class="card" style="display: none;">
        <div class="card-body">
        <?php include("mtprealizarcompra.php")?>
        </div>
      </div>
      <div id="card3" class="card" style="display: none; width: 500px;">
        <div class="card-body">
        <?php include("mtpverreservas.php")?>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script>
    $(document).ready(function() {
      var progreso = 0;
      var barraProgreso = $('#progress-bar');
      var informacion = $('#informacion');
      var informacionActual = 0;

      var informaciones = [
        "Menú",
        "Información 1",
        "Información 2",
      ];

      var tarjetas = [
        $('#card1'),
        $('#card2'),
        $('#card3')
      ];

      tarjetas[informacionActual].show();

      $('.continuar').click(function() {
        if (progreso < 100) {
          progreso += 50;
          barraProgreso.css('width', progreso + '%');
          barraProgreso.attr('aria-valuenow', progreso);

          informacionActual = (informacionActual + 1) % informaciones.length;
          informacion.text(informaciones[informacionActual]);

          tarjetas[informacionActual].show();
          tarjetas[informacionActual - 1].hide();
        }
      });

      $('.cancelar').click(function() {
        if (progreso > 0) {
          progreso -= 50;
          barraProgreso.css('width', progreso + '%');
          barraProgreso.attr('aria-valuenow', progreso);

          informacionActual = (informacionActual - 1) % informaciones.length;
          informacion.text(informaciones[informacionActual]);

          tarjetas[informacionActual].show();
          tarjetas[informacionActual + 1].hide();
        }
      });

    });
  </script>
</body>
</html>