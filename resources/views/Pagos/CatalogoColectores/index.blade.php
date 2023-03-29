<x-base>
    <br>
    <a href="/"><button class="btn btn-danger">Regresar</button></a>
    <hr>
    <h1>Crear</h1>
    <form action="{{route('catalogocolectores.store')}}" method="POST">
        @csrf
        @method('POST')
    <label>Nombre</label>
    <input type="text" name="nombre">
    <br>
    <br>
    <label>Registro</label>
    <input type="text" name="registro">
    <br>
    <br>
    <select name="estado">
        <option value="inactivo">inactivo</option>
        <option value="activo">activo</option>
    </select>
    <br>
    <br>
    <label>Nombre Cliente</label>
    <input type="text" name="cliente">
    <br>
    <br>
    <select name="tipo_pago_id">
    @foreach ($tipopagos as $tipopago)
        <option value="{{$tipopago->id}}">{{$tipopago->nombre}}</option>
    @endforeach
</select>
    <button type="submit">Crear</button>
</form>

<table class="table">
    <tr>
        <th>Nombre</th>
        <th>Registro</th>
        <th>Estado</th>
        <th>Fecha Creacion</th>
        <th>Cliente</th>
        <th>Tipo Pago</th>
    </tr>
    @foreach ($catalogocolectores as $catalogocolector)
        <tr>
            <td>{{$catalogocolector->nombre}}</td>
            <td>{{$catalogocolector->registro}}</td>
            <td>{{$catalogocolector->estado}}</td>
            <td>{{$catalogocolector->created_at}}</td>
            <td>{{$catalogocolector->cliente}}</td>
            <td>{{$tipopago->nombre}}</td>
        </tr>
    @endforeach
</table>
</x-base>
