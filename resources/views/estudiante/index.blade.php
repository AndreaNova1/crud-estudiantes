<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Estilos de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <title>INFORMACION ESTUDIANTIL</title>
</head>
<body class="container bg-info text-white">
<div class="container col-xl-7 mt-5 bg-secondary text-white">
         <h4>DATOS GENERALES</h4>
    <div class="row">
        <div class="col-xl-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>

                        <th>ID</th>
                        <th>nombre</th>
                        <th>correo</th>
                        <th>grado</th>

                        <th>opciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(count($estudiantes)<=0)
                        <tr>
                            <td colspan="8">No hay resultados </td>
                        </tr>
                    @else
                    @foreach($estudiantes as $estudiante)
                        <tr>
                            <td>{{$estudiante->id}}</td>
                            <td>{{$estudiante->nombre}}</td>
                            <td>{{$estudiante->correo}}</td>
                            <td>{{$estudiante->grado}}</td>

                            <td><a href="{{route('estudiante.edit', $estudiante->id)}}" class="btn btn-warning btn-sm" Editar | Eliminar</td>
                        </tr>
                    @endforeach
                    @endif
                    </tbody>
                    {{$estudiantes->links()}}
                </table>
            </div>
        </div>
        <div class="col-xl-12">
            <form action="{{route('estudiante.index')}}" method="get">
                <div class="form-row">
                    <div class="col-sm-4 my-1">
                        <input type="text" class="form-control" name="texto" value="{{$texto}}">
                    </div>
                    <div class="col-auto my-1">
                        <input type="submit" class="btn btn-primary" value="buscar">
                    </div>
                    <div class="col-auto my-1 ">
                        <a href="{{route('estudiante.create')}}" class="btn btn-success">Crear</a>
                    </div>
                    <div class="col-auto my-1 ">
                        <a href="{{ url('/') }}" class="btn btn-danger">Inicio</a>
                    </div>
                </div>
            </form>
        </div>
</body>
</html>
