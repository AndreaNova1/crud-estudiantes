<!DOCTYPE html>
<html lang="en">
<head>   //}Crear
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Estilos de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <title>FORMULARIO DE REGISTRO</title>
</head>
<body>
    <div class="container">
        <h4>REGISTRO DE ESTUDIANTES</h4>
        <div class="row">
            <div class="col-xl-12">
                <form action="{{route('estudiante.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                         <label for="nombres">Nombres</label>
                         <input type="text" class="form-control" name="nombre" required maxlength="50">
                    </div>
                    <div class="form-group">
                        <label for="email">Correo</label>
                        <input type="text" class="form-control" name="correo" required maxlength="50">
                    </div>
                    <div class="form-group">
                        <label for="grado">Grado</label>
                        <input type="text" class="form-control" name="Grado" required maxlength="50">
                    </div>
                    <div class="form-group">
                        <label for="foto">Foto</label>
                        <input type="file" class="form-control" name="foto" required maxlength="25">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Guardar">
                        <input type="submit" class="btn btn-success" value="Cancelar">
                        <a href="{{ url('/') }}" class="btn btn-danger">Inicio</a>
                    </div>
                </form>
            </div>
</body>
</html>
