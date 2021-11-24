@extends('plantillaweb')

@section('home_web')
    <h2>Edicion de Datos {{ $student->id }}</h2>
    <form action="{{route('students.update', $student)}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label>Modificar N° de Tarjeta</label>
            <input type="number" class="form-control" name="N°_Tarjeta" placeholder="Escriba su numero de identificacion"
                value="{{ $student->N°_Tarjeta }}">
        </div>
        <div class="mb-3">
            <label>Modificar Nombre</label>
            <input type="text" class="form-control" name="Nombre" placeholder="Escriba su nombre completo"
                value="{{ $student->Nombre }}">
        </div>
        <div class="mb-3">
            <label>Modificar Celular</label>
            <input type="number" class="form-control" name="Celular" placeholder="Escriba su nombre completo"
                value="{{ $student->Celular }}">
        </div>
        <div class="mb-3">
            <label>Modificar Correo</label>
            <input type="text" class="form-control" name="Correo" placeholder="Escriba su nombre completo"
                value="{{ $student->Correo }}">
        </div>
        <button type="submit" class="btn btn-outline-dark">Guardar</button>
    </form>
@endsection
