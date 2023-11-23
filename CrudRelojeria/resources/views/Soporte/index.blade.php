
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
    <h1 class="text-center">Soporte</h1>
    <div class="container">
        <form action="{{route('Principal')}}" method="get">
            <button class="btn btn-primary mb-2" type="submit"><span class="p-4">Regresar</span></button>
        </form>
        <table class="table table-responsive table-striped">
            <tr class="table-primary">
                <td>id</td>
                <td>Nombre</td>
                <td>Apellidos</td>
                <td>Correo</td>
                <td>Telefono</td>
                <td>Descripcion</td>
            </tr>
            @foreach ($soporte as $reloj)
                <tr>
                    <td>{{$reloj->id}}</td>
                    <td>{{$reloj->nombre}}</td>
                    <td>{{$reloj->apellidos}}</td>
                    <td>{{$reloj->correo}}</td>
                    <td>{{$reloj->telefono}}</td>
                    <td>{{$reloj->descripcion}}</td>
                </tr>
            @endforeach
        </table>

    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
</body>
</html>