@props(['ruta','nombrede'])

<div class="container">

    <h1>Agregar {{$nombrede}}</h1>

    <form method="POST" action="{{ route($ruta.'.store') }}">
        @csrf

        @foreach ($attributes['miArray'] as $colName => $name)

            @if ($colName >= 1)

                <div class="form-group">
                    @if (substr($name, -2) == 'id')
                        <label>{{str_replace(array("id","_")," ",ucfirst($name))}}</label>
                        <br>



                        <select name="" id="" class="form-select">
                            <option value="hola">hola</option>
                        </select>
                    @else

                    <label>{{ucfirst($name)}}</label>
                    <input type="text" class="form-control" name="{{$name}}">

                    @endif



                </div>
            @endif

        @endforeach

        <button type="submit" class="btn btn-success">Agregar</button>

    </form>

</div>
