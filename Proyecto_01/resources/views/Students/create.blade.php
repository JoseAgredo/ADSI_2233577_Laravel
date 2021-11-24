@extends('plantillaweb')

@section('home_web')
<h2>Formulario de Registro - Estudiantes</h2>
<form action="{{route('students.store')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label>N° Tarjeta</label>
        <input type="number" class="form-control" name="N°_Tarjeta" placeholder="Escriba su numero de identificacion">
    </div>
    <div class="mb-3">
        <label>Nombre Completo</label>
        <input type="text" class="form-control" name="Nombre" placeholder="Escriba su nombre completo">
    </div>
    <div class="mb-3">
        <label>Celular</label>
        <input type="number" class="form-control" name="Celular" placeholder="Escriba su nombre completo">
    </div>
    <div class="mb-3">
        <label>Correo</label>
        <input type="text" class="form-control" name="Correo" placeholder="Escriba su nombre completo">
    </div>
    <button type="submit" class="btn btn-outline-dark">Enviar</button>
</form>
@endsection
