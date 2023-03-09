@extends("layout")
@section("contenido")
    <fieldset>
        <legend>Datos del alumno</legend>

    <form action="{{route('alumnos.store')}}" method="POST">
        @csrf
        @method('POST')
        Nombre <input type="text" name="nombre" id=""><br />
        Apellido <input type="text" name="apellido" id=""><br />
        Direccion <input type="text" name="direccion" id=""><br />
        DNI <input type="text" name="dni" id=""><br />
        <input type="submit" value="Guardar Alumnos">
    </form>
 </fieldset>
@endsection
