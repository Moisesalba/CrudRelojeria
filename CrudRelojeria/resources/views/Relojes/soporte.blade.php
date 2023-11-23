<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <header class="container-fluid bg-dark d-flex justify-content-center">
        <p class="text-light mb-0 p-2 fs-6"> RELOJERIA MOISES</p>
        </header>
   <nav class="navbar navbar-dark bg-dark sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <span class="text-primary fs-5 fw-bold"></span>
        </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('RelojesPrincipal')}}">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('RelojesCompra')}}">Compra</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('Principal')}}">Contacto</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
 
  
  
  <!-- Nosotros -->
    <section>
      <div class=" container w-50 mx-auto text-center" id="equipo">
        <h1 class="mb-5 fs-2"><span class="text-primary">Soporte Tecnico</span></h1>
        <!-- Carrousel -->
  <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active data-bs-interval-1000 ">
        {{-- <img src="./img/Relojes/M1.jfif" class="d-block img-fluid"width="1800" height="160"alt="..."> --}}
      </div>
      <div class="carousel-item data-bs-interval-1000">
        {{-- <img src="./img/M2.jfif" class="d-block img-fluid"width="1800" height="160" alt="..."> --}}
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
        <p class="fs-4"> Llena el siguiente formulario con tus datos
        </p>
      </div>

      <div class="mt-5 text-center container">
        
              <form class="text-center" action="{{route('SoporteStore')}}" method="POST" >
                @csrf
                <div class="p-1">
                  <label for="nombre">Nombre:</label>
                  <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre">
                </div>
      
                <div class="p-1">
                  <label for="apellidos">Apellidos:</label>
                  <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Ingrese sus apellidos">
                </div>
      
                <div class="p-1">
                  <label for="correo">Correo:</label>
                  <input type="email" class="form-control" id="correo" name="correo" placeholder="Ingrese su correo electrónico">
                </div>
      
                <div class="p-1">
                  <label for="telefono">Número de Teléfono:</label>
                  <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Ingrese su número de teléfono">
                </div>
                
                <div class="p-1">
                  <label for="descripcion">Descripcion del problema:</label>
                  <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Ingrese una breve descripcion del problema">
                </div>
                <button class="btn btn-primary" type="submit" >Enviar</button>
              </form>
            </div>
          
      
    </section>

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>