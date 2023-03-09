@extends("layout")
@section("contenido")

    <a href="{{route("alumnos.create")}}">Crear nuevos alumnos</a>
<tabla filas_serializado="{{$alumnos}}" campos_serializado="{{$campos}}" nombre={{$nombre}}/>
    <table>
        <caption>Listado de alumnos</caption>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Direccion</th>
            <th>DNI</th>
        </tr>
        @foreach($alumnos as $alumno)
            <tr>
                <td>{{$alumno->nombre}}</td>
                <td>{{$alumno->apellido}}</td>
                <td>{{$alumno->direccion}}</td>
                <td>{{$alumno->editar}}</td>
                <td>{{$alumno->dni}}</td>
                <td><a href="{{route("alumnos.edit",$alumno->id)}}">Editar</a></td>
                <td>
                    <form action=/alumnos/{{$alumno->id}}" method="POST">
                    @csrf
                    @method("DELETE")
                        <input type="submit" value="Borrar">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
<script>
    import Tabla from "../../js/componentes/tabla";
    export default {
        components: {Tabla}
    }
</script>
