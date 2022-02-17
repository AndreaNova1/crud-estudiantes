@extends('estudiante.index')
@section('title', 'User Update')

@section('content')
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-md-7 mt-5">
                <!--Mensaje flash-->
                @if(session("estudianteModificado"))
                    <div class="alert alert-success">
                        {{session("estudianteModificado")}}
                    </div>
                @endif
            <!--Validacion de errores-->
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card">
                    <form action="{{ route('edit', $estudiante->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-header  text-center  p-4 mb-2 bg-info text-white">MODIFICAR REGISTRO</div>

                            <div class="mb-3">
                                <label class="form-label">nombre</label>
                                <input type="text" name="nombre" class="form-control border border-info" value="{{ $estudiante->nombre }}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">correo</label>
                                <input type="text" name="correo" class="form-control border border-info" value="{{ $estudiante->correo }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">grado</label>
                                <input type="text" name="grado" class="form-control border border-info" value="{{ $estudiante->grado }}">
                            </div>

                            <div class="row form-group">
                                <button type="submit" class="btn btn-outline-success col-md-4 offset-2  mb-2 bg-success text-white">Modificar</button>
                                <a  href=" {{ url('/') }}" class="btn bg-danger text-white col-md-3 offset-2" type="submit">Regresar</a>

                            </div>

                        </div>

                    </form>
                </div>

            </div>

        </div>

        @endsection
    </div>
