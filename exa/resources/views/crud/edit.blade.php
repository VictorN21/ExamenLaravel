@extends("layout")
@section("contenido")
    <fieldset>
        <legend>Datos del alumno</legend>

    <form action="{{route('alumnos.update',$alumno->id)}}" method="POST">
        @csrf
        @method('PUT')
        Nombre <input type="text" value="{{$alumno->nombre}}" name="nombre" id=""><br />
        Apellido <input type="text" value="{{$alumno->apellido}}" name="apellido" id=""><br />
        Direccion <input type="text" value="{{$alumno->direccion}}" name="direccion" id=""><br />
        DNI <input type="text" value="{{$alumno->dni}}" name="dni" id=""><br />
        <input type="submit" value="Guardar Alumnos">
    </form>
 </fieldset>
@endsection
