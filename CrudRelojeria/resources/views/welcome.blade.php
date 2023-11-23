<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Compra de Relojes</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
    *{
        background-color: black;
    }
  </style>
</head>
<body>
<header class="container-fluid bg-warning d-flex justify-content-center">
    <p class="text-light mb-0 p-2 fs-6"> RELOJERIA MOISES</p>
    </header>
  <!-- Barra de menú -->
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand " href="#">Compra de Relojes</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="">Inicio</a>
        </li>
        <li class="nav-item">

          <a class="nav-link" href="{{route('RelojesIndex')}}">Compra</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('RelojesCompra')}}">Contacto</a>
        </li>
      </ul>
    </div>
  </nav>
 
  <!-- Carrousel -->
    <!-- Carrusel con desliz de video de relojes -->
    
      
        <div class="ratio ratio-16x9 justify-content-center">
          <video class="object-fit-scale"width="100%" height="auto"position="relative" src="./img/carrousel.mp4" autoplay muted loop></video>
        </div>
        
   
     

  <!-- Imágenes de relojes -->
  
  <div class="row w-100| mx-auto d-flex wrap d-flex">
    <div class="col-md-4 mb-4 p-3 fs-5">
        <div id="carousel1" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carousel1" data-slide-to="0" class="active"></li>
            <li data-target="#carousel1" data-slide-to="1"></li>
            <li data-target="#carousel1" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="./img/c1.jpg" width="180" height="160" class="img-fluid" alt="Reloj 1.1">
            </div>
            <div class="carousel-item">
              <img src="./img/c2.jpg" width="180" height="160" class="img-fluid" alt="Reloj 1.2">
            </div>
            <div class="carousel-item">
              <img src="./img/c3.jpg" width="180" height="160" class="img-fluid" alt="Reloj 1.3">
            </div>
          </div>
        </div>
            <h5 class="text-light">Delta</h5>
            <p class="text-light">Precio: $1000</p>
            <input id="cantidad2" class="bg-light" type="number" min="1" value="1" placeholder="Cantidad">
            <p class="text-light">Reloj para hombre analógico digitale de acero inoxidable de lujo Deporte al aire libre Impermeable Reloj de pulsera grande y pesado plata</p>
            <input id="total2" class="bg-light" type="text" disabled placeholder="Total">
            <a href="{{route('RelojesCompra')}}"><button class="btn btn-primary" id="compra1">Comprar</button></a>
            <script>
              const precioBase2 = 1000; // Precio base
              
              // Obtener elementos del DOM
              const cantidadInput2 = document.getElementById("cantidad2");
              const totalInput2 = document.getElementById("total2");
              
              // Función para calcular el total
              function calcularTotal2() {
                  const cantidad2 = cantidadInput2.value; // Obtener cantidad ingresada
                  
                  const total2 = cantidad2 * precioBase2; // Calcular el total
                  
                  totalInput2.value = total2; // Mostrar el total en el input correspondiente
              }
              
              // Escuchar cambios en la cantidad y llamar a la función calcularTotal
              cantidadInput2.addEventListener("input", calcularTotal2);
          </script>
          </div>
          

          <div class="col-md-4 mb-4 p-3 fs-5">
            <div id="carousel1" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carousel1" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel1" data-slide-to="1"></li>
                  <li data-target="#carousel1" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="./img/r1-1.jpg" width="180" height="160" class="img-fluid" alt="Reloj 2.1">
                  </div>
                  <div class="carousel-item">
                    <img src="./img/r1-2.jpg" width="180" height="160" class="img-fluid" alt="Reloj 2.2">
                  </div>
                  <div class="carousel-item">
                    <img src="./img/r1-3.jpg" width="180" height="160" class="img-fluid" alt="Reloj 2.3">
                  </div>
              </div>
              </div>
              <h5 class="text-light">CUREN</h5>
              <p class="text-light">Precio: $1000</p>
              <input id="cantidad3" class="bg-light" type="number" min="1" value="1" placeholder="Cantidad">
              <p class="text-light">Reloj para hombre analógico digitale de acero inoxidable de lujo Deporte al aire libre Impermeable Reloj de pulsera grande y pesado plata</p>
              <input id="total3" class="bg-light" type="text" disabled placeholder="Total">
              <a class="text-light" href="{{route('RelojesCompra')}}"><button class="btn btn-primary" id="compra2">Comprar</button></a>
              
          <!-- Java -->
          <script>
           const precioBase3 = 1000; // Precio base

            // Obtener elementos del DOM
            const cantidadInput3 = document.getElementById("cantidad3");
            const totalInput3 = document.getElementById("total3");

            // Función para calcular el total
            function calcularTotal3() {
                const cantidad = cantidadInput3.value; // Obtener cantidad ingresada
                
                const total3 = cantidad * precioBase3; // Calcular el total
                
                totalInput3.value = total3; // Mostrar el total en el input correspondiente
            }

            // Escuchar cambios en la cantidad y llamar a la función calcularTotal
            cantidadInput3.addEventListener("input", calcularTotal3);
        </script>
          </div>
          
          
          
          <div class="col-md-4 mb-4 p-3 fs-5">
            <div id="carousel1" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carousel1" data-slide-to="0" class="active"></li>
                <li data-target="#carousel1" data-slide-to="1"></li>
                <li data-target="#carousel1" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="./img/r2-1.jpg" width="180" height="160" class="img-fluid" alt="Reloj 3.1">
                </div>
                <div class="carousel-item">
                  <img src="./img/r2-2.jpg" width="180" height="160" class="img-fluid" alt="Reloj 3.2">
                </div>
                <div class="carousel-item">
                  <img src="./img/r2-3.jpg" width="180" height="160" class="img-fluid" alt="Reloj 3.3">
                </div>
              </div>
            </div>
            <h5 class="text-light">LUCIA</h5>
            <p class="text-light">Precio: $1500</p>
            <input id="cantidad1" class="bg-light" type="number" min="1" value="1" placeholder="Cantidad">
            <p class="text-light"> Reloj analógico digital de acero inoxidable de lujo Deporte al aire libre Impermeable Reloj de pulsera grande y pesado plata</p>
            <input id="total1" class="bg-light" type="text" disabled placeholder="Total">
            <a class="text-light" href="{{route('RelojesCompra')}}"><button class="btn btn-primary" id="compra3">Comprar</button></a>
          </div>
          <script>
            const precioBase1 = 1500; // Precio base
            
            // Obtener elementos del DOM
            const cantidadInput1 = document.getElementById("cantidad1");
            const totalInput1 = document.getElementById("total1");
            
            // Función para calcular el total
            function calcularTotal1() {
                const cantidad1 = cantidadInput1.value; // Obtener cantidad ingresada
                
                const total1 = cantidad1 * precioBase1; // Calcular el total
                
                totalInput1.value = total1; // Mostrar el total en el input correspondiente
            }
            
            // Escuchar cambios en la cantidad y llamar a la función calcularTotal
            cantidadInput1.addEventListener("input", calcularTotal1);
        </script>
      <div class="col-md-4 mb-4 p-3 fs-5">
        <div id="carousel1" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carousel1" data-slide-to="0" class="active"></li>
            <li data-target="#carousel1" data-slide-to="1"></li>
            <li data-target="#carousel1" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="./img/r3-1.jpg" width="180" height="160" class="img-fluid" alt="Reloj 3.1">
            </div>
            <div class="carousel-item">
              <img src="./img/r3-2.jpg" width="180" height="160" class="img-fluid" alt="Reloj 3.2">
            </div>
            <div class="carousel-item">
              <img src="./img/r3-3.jpg" width="180" height="160" class="img-fluid" alt="Reloj 3.3">
            </div>
          </div>
        </div>
          <h5 class="text-light">CASIO</h5>
          <p class="text-light">Precio: $2000</p>
          <input id="cantidad4"  class="bg-light" type="number" min="1" value="1" placeholder="Cantidad">
          <p class="text-light">Reloj Casio, 42 mm, Brazalete de Acero Inoxidable, Unitalla</p>
          <input id="total4" class="bg-light" type="text" disabled placeholder="Total">
          <a class="text-light" href="{{route('RelojesCompra')}}"><button class="btn btn-primary" id="compra4">Comprar</button></a>
          
          </div>
          <script>
            const precioBase4 = 2000; // Precio base
            
            // Obtener elementos del DOM
            const cantidadInput4 = document.getElementById("cantidad4");
            const totalInput4 = document.getElementById("total4");
            
            // Función para calcular el total
            function calcularTotal4() {
                const cantidad4 = cantidadInput4.value; // Obtener cantidad ingresada
                
                const total4 = cantidad4 * precioBase4; // Calcular el total
                
                totalInput4.value = total4; // Mostrar el total en el input correspondiente
            }
            
            // Escuchar cambios en la cantidad y llamar a la función calcularTotal
            cantidadInput4.addEventListener("input", calcularTotal4);
        </script>
  <div class="col-md-4 mb-4 p-3 fs-5">
    <div id="carousel1" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carousel1" data-slide-to="0" class="active"></li>
        <li data-target="#carousel1" data-slide-to="1"></li>
        <li data-target="#carousel1" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./img/r4-1.jpg" width="180" height="160" class="img-fluid" alt="Reloj 3.1">
        </div>
        <div class="carousel-item">
          <img src="./img/r4-1.jpg" width="180" height="160" class="img-fluid" alt="Reloj 3.2">
        </div>
        <div class="carousel-item">
          <img src="./img/r4-1.jpg" width="180" height="160" class="img-fluid" alt="Reloj 3.3">
        </div>
      </div>
    </div>
    <h5 class="text-light">WONDER</h5>
    <p class="text-light">Precio: $2000</p>
    <input id="cantidad5" class="bg-light" type="number" min="1" value="1" placeholder="Cantidad">
    <p class="text-light">Relojes para Hombre Analógicos de Cuarzo de con Correa Acero a Prueba de Agua Relojes Hombre</p>
    <input id="total5" class="bg-light" type="text" disabled placeholder="Total">
    <a class="text-light" href="{{route('RelojesCompra')}}"><button class="btn btn-primary" id="compra5">Comprar</button></a>
    <script>
      const precioBase5 = 2000; // Precio base
      
      // Obtener elementos del DOM
      const cantidadInput5 = document.getElementById("cantidad5");
      const totalInput5 = document.getElementById("total5");
      
      // Función para calcular el total
      function calcularTotal1() {
          const cantidad5 = cantidadInput5.value; // Obtener cantidad ingresada
          
          const total5 = cantidad5 * precioBase5; // Calcular el total
          
          totalInput5.value = total5; // Mostrar el total en el input correspondiente
      }
      
      // Escuchar cambios en la cantidad y llamar a la función calcularTotal
      cantidadInput5.addEventListener("input", calcularTotal1);
  </script>
  </div>
  
  <div class="col-md-4 mb-4 p-3 fs-5">
    <div id="carousel1" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carousel1" data-slide-to="0" class="active"></li>
        <li data-target="#carousel1" data-slide-to="1"></li>
        <li data-target="#carousel1" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./img/r5-1.jpg" width="180" height="160" class="img-fluid" alt="Reloj 3.1">
        </div>
        <div class="carousel-item">
          <img src="./img/r5-1.jpg" width="180" height="160" class="img-fluid" alt="Reloj 3.2">
        </div>
        <div class="carousel-item">
          <img src="./img/r5-1.jpg" width="180" height="160" class="img-fluid" alt="Reloj 3.3">
        </div>
      </div>
    </div>
    <h5 class="text-light">VWOON</h5>
    <p class="text-light">Precio: $2000</p>
    <input id="cantidad6" class="bg-light" type="number" min="1" value="1" placeholder="Cantidad">
    <p class="text-light">Reloj de cuarzo japonés VK63 para hombre, cronógrafo deportivo, de acero inoxidable, multifunción, resistente al agua.</p>
    <input id="total6" class="bg-light" type="text" disabled placeholder="Total">
    <a class="text-light"href="{{route('RelojesCompra')}}"><button class="btn btn-primary" id="compra6">Comprar</button></a>

    <script>
      const precioBase6 = 2000; // Precio base
      
      // Obtener elementos del DOM
      const cantidadInput6 = document.getElementById("cantidad6");
      const totalInput6 = document.getElementById("total6");
      
      // Función para calcular el total
      function calcularTotal6() {
          const cantidad6 = cantidadInput6.value; // Obtener cantidad ingresada
          
          const total6 = cantidad6 * precioBase6; // Calcular el total
          
          totalInput6.value = total6; // Mostrar el total en el input correspondiente
      }
      
      // Escuchar cambios en la cantidad y llamar a la función calcularTotal
      cantidadInput6.addEventListener("input", calcularTotal6);
  </script>
  </div>
</div>

  
<!-- Fondo curvo -->
<section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffff" fill-opacity="1" d="M0,96L48,117.3C96,139,192,181,288,
      176C384,171,480,117,576,112C672,107,768,149,864,144C960,139,1056,85,1152,74.7C1248,64,1344,96,1392,112L1440,128L1440,320L1392,320C1344,320,
      1248,320,1152,320C1056,320,960
      ,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
  </section>
  <!-- fotter -->
  <footer class="w-100 d-flex justify-content-center aling-items-center">
    <p class="fs-5 px-3 pt-3 text-light">Relojeria Moises &copy; Todos Los Derechos Reservados 2023</p>
  </footer>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
</body>