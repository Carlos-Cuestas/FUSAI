<x-base>
    <table class="table container text-center">
        <tr>
            <td><a href="/"><button class="btn btn-danger">Regresar</button></a></td>
        </tr>
        <tr>
            <td><a href="{{route('agencias.index')}}"><button class="btn btn-primary">Agencia</button></a></td>
        </tr>
        <tr>
            <td><a href="{{route('tipopagos.index')}}"><button class="btn btn-primary">Tipo Pago</button></a></td>
        </tr>
        <tr>
            <td><a href="{{route('formapagos.index')}}"><button class="btn btn-primary">Forma de Pago</button></a></td>
        </tr>
        <tr>
            <td><button class="btn btn-primary">Usuario</button></td>
        </tr>
    </table>
</x-base>
