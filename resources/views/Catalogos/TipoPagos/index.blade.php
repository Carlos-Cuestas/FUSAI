<x-base>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Eliminar</th>
        </tr>
        @foreach ($tipopagos as $tipopago)
            <tr>
                <td><p>{{$tipopago->nombre}}</p></td>
                <td>
                    <form action="{{route('tipopagos.destroy', $tipopago->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </form>
    </table>
    <form action="{{route('tipopagos.store')}}" method="POST">
        @csrf
        <table>
            <tr>
                <td>Nombre:</td>
            </tr>
            <tr>
                <input type="text" name="nombre">
            </tr>
            <tr>
                <button type="submit">Crear</button>
            </tr>
        </table>
    </form>
</x-base>
