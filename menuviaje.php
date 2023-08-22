<html>

<head>
  <!-- fuente de letra -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Aguafina+Script&display=swap" rel="stylesheet">
  <!-- link css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <!-- link iconos -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://boxicons.com/">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <!-- link script -->
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <?php include("Encabezado1.php") ?>
  </header>

  <div class="contenedor" style="margin-right: 12px;">
    <div class="row" style="margin-top: 50px; padding-left: 30px;">
      <div class="col-2">
        <div class="card">
          <div class="card-body">
            <h6>Desde</h6>
            <div class="col btn-group dropend">
              <?php include("scroll.php") ?>
            </div>
            <h6 style="margin-top: 10px">Hasta</h6>
            <div class="btn-group dropend" id="list-example">
              <?php include("scroll.php") ?>
            </div>
            <br>
            <div class="form-check form-check-inline" style="margin-top: 20px">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
              <label class="form-check-label" for="inlineRadio1">Ida</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
              <label class="form-check-label" for="inlineRadio2">Ida y Vuelta</label>
            </div>
            <div class="col" style="margin-top: 10px">
              <h6>Fecha de ida</h6>
              <input type="text" class="form-control" id="formGroupExampleInput1" placeholder="../../..">
            </div>
            <div class="col" style="margin-top: 10px">
              <h6>Fecha de vuelta</h6>
              <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="../../..">
            </div>
            <div class="col" style="margin-top: 10px;">
              <h6>Pasajeros</h6>
            </div>
            <div class="col" style="margin-top: 10px;">

            </div>
            <div class="col" style="margin-top: 10px">
              <div id="pasajeros1">
                <button type="button" class="btn" id="menos1" onclick="restar1()"><i class='bx bx-minus-circle' style="width: auto;"></i></button>
                <span id="parrafo1"> 0 </span>
                <button type="button" class="btn" id="mas1" onclick="sumar1()"><i class='bx bx-plus-circle' style="width: auto;"></i></button>
                +18
              </div>
            </div>
            <div class="col" style="margin-top: 10px">
              <div id="pasajeros2">
                <button type="button" class="btn" id="menos2" onclick="restar2()"><i class='bx bx-minus-circle' style="width: auto;"></i></button>
                <span id="parrafo2"> 0 </span>
                <button type="button" class="btn" id="mas2" onclick="sumar2()"><i class='bx bx-plus-circle' style="width: auto;"></i></button>
                -18
              </div>
            </div>
            <div class="col text-center" style="margin-top: 150px;">
              <button type="button" class="btn btn-primary" style=" width: 100%">Elegir hospedaje</button>
            </div>
            <div class="col text-center" style="margin-top: 10px;">
              <button type="button" class="btn btn-primary" style=" width: 100%">Elegir transporte</button>
            </div>
            <div class="col text-center" style="margin-top: 10px;">
              <button type="button" class="btn btn-primary" style=" width: 100%">Actividades</button>
            </div>
            <div class="col text-center" style="margin-top: 10px;">
              <button type="button" class="btn btn-primary" style=" background-color: red; width: 70%">Continuar</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <?php include("buscador.php") ?>
      </div>
    </div>
  </div>
  <script>
    var c1 = 0
    var c2 = 0;

    function sumar1() {
      c1++;
      if (c1 > 100) {
        c1--
      }     
      document.getElementById("parrafo1").innerText = c1
    }

    function restar1() {
      c1--;
      if (c1 < 0) {
        c1++
      }
      document.getElementById("parrafo1").innerText = c1
    }

    function sumar2() {
      c2++;
      if (c2 > 100) {
        c2--
      }
      document.getElementById("parrafo2").innerText = c2
    }

    function restar2() {
      c2--;
      if (c2 < 0) {
        c2++
      }
      document.getElementById("parrafo2").innerText = c2
    }
  </script>
</body>

</html>