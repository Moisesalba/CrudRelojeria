<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <h1 class="text-center">Compras</h1>
    <div class="container">
        <form action="{{route('RelojesPrincipal')}}" method="get">
            <button class="btn btn-primary mb-2" type="submit"><span class="p-4">Regresar</span></button>
        </form>
        <table class="table table-responsive table-striped">
            <tr class="table-primary">
                <td>id</td>
                <td>Nombre</td>
                <td>Dirreccion</td>
                <td>Notarjeta</td>
                <td>Estado</td>
                <td>Ciudad</td>
                <td>CodigoPostal</td>
            </tr>
            @foreach ($compra as $reloj)
                <tr>
                    <td>{{$reloj->id}}</td>
                    <td>{{$reloj->nombre}}</td>
                    <td>{{$reloj->direccion}}</td>
                    <td>{{$reloj->tarjeta}}</td>
                    <td>{{$reloj->estado}}</td>
                    <td>{{$reloj->ciudad}}</td>
                    <td>{{$reloj->codigopostal}}</td>
                </tr>
            @endforeach
        </table>

    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
</body>
</html>


