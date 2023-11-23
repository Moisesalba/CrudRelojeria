<!DOCTYPE html>
<html>

<head>
    <title>Compra de Relojes</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .navbar-brand {
            font-weight: bold;
        }

        .navbar-nav a {
            margin-right: 10px;
        }

        footer {
            background-color: #f8f9fa;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand navbar-light bg-dark">
        <a class="navbar-brand text-light" href="#">Compra de Relojes</a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link text-light" href="{{route('RelojesPrincipal')}}">Inicio</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link text-light" href="{{route('RelojesCompra')}}">Compra</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="{{route('Principal')}}">Contacto</a>
            </li>
        </ul>
    </nav>
    

    <div class="container mt-5">
      <h2 class="mb-4">Compra</h2>
      <div id="imagenComprada"></div>
    </div>

    <form class="row g-3 p-5" action="{{route('RelojesStore')}}" method="POST" >
        <div class="col-md-6">
          <label for="nombre" class="form-label">Nombre</label>
          <input type="text" class="form-control" id="nombre" name="nombre" >
        </div>
        
        <div class="col-12">
          <label for="direccion" class="form-label">Dirreccion</label>
          <input type="text" class="form-control" id="direccion" name="dirreccion" placeholder="">
        </div>
        <div class="col-12">
          <label for="tarjeta" class="form-label">No.Tarjeta</label>
          <input type="text" class="form-control" id="tarjeta" name="tarjeta" placeholder="">
        </div>
        <div class="col-md-6">
          <label for="ciudad" class="form-label">Ciudad</label>
          <input type="text" class="form-control" id="ciudad" name="ciudad">
        </div>
        <div class="col-md-6">
          <label for="estado" class="form-label">Estado</label>
          <input type="text" class="form-control" id="estado" name="estado">
        </div>
        <div class="col-md-2">
          <label for="codigopostal" class="form-label">Codigo postal</label>
          <input type="text" class="form-control" id="codigopostal" name="codigopostal">
        </div>
        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              Verificar
            </label>
          </div>
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Comprar</button>
        </div>
      </form>

  <!-- Fondo curvo -->
<section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#1d" fill-opacity="1" d="M0,96L48,117.3C96,139,192,181,288,
      176C384,171,480,117,576,112C672,107,768,149,864,144C960,139,1056,85,1152,74.7C1248,64,1344,96,1392,112L1440,128L1440,320L1392,320C1344,320,
      1248,320,1152,320C1056,320,960
      ,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
  </section>
  <!-- fotter -->
  <footer class="w-100 d-flex justify-content-center aling-items-center">
    <p class="fs-5 px-3 pt-3">Relojeria Moises &copy; Todos Los Derechos Reservados 2023</p>
  </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
</body>

</html>