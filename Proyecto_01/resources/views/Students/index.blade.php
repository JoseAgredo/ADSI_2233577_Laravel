@extends('plantillaweb')

@section('home_web')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">N° Tarjeta</th>
                <th scope="col">Nombre</th>
                <th scope="col">Celular</th>
                <th scope="col">Correo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <th scope="row">{{ $student->id }}</th>
                    <td>{{ $student->N°_Tarjeta }}</td>
                    <td>{{ $student->Nombre }}</td>
                    <td>{{ $student->Celular }}</td>
                    <td>{{ $student->Correo }}</td>
                    <td>
                        <a href="{{ route('students.edit', $student) }}">
                            <button type="button" class="btn btn-outline-dark btn-sm">Editar</button>
                        </a>
                    </td>
                    <td>
                        <form method="POST" action="{{route('students.destroy', $student)}}">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-outline-danger btn-sm">
                            Eliminar
                        </button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
    {{$students->links()}}
@endsection
