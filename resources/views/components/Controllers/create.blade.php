@props(['ruta','nombrede'])
<div class="container">

    <h1>Agregar {{$nombrede}}</h1>

    <form method="POST" action="{{ route($ruta.'.store') }}">
        @csrf

        @foreach ($attributes['miArray'] as $colName => $name)

            @if ($colName >= 1)

                <div class="form-group">
                    <label>{{ucfirst($name)}}</label>
                    <input type="text" class="form-control" name="{{$name}}">
                </div>
            @endif

        @endforeach

        <button type="submit" class="btn btn-success">Agregar</button>

    </form>

</div>
