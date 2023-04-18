@props(['ruta','nombrede','max'=>null])

<?php
$caracteres = "_id";
$contador = 0;
$total = $contador + 3;
$i = 3;
foreach ($attributes['miArray'] as $dato) {
  if (preg_match("/{$caracteres}$/", $dato)) {
    $contador++;
  }
}
?>

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



                        <select name="{{$name}}" class="form-select">

                                @foreach ($attributes['miArray'.$i] as $agencia)

                                    <option value="{{ $agencia->id }}" >{{ $agencia->nombre }}</option>

                                @endforeach



                        </select>
                        <?php
                            if ($i==$max) {
                                $i =3;
                            }else {
                                $i +=1;
                            }
                        ?>



                    @else

                    <label>{{ucfirst($name)}}</label>
                    <input type="text" class="form-control" name="{{$name}}">

                    @endif



                </div>
            @endif

        @endforeach
        <?php $i =3; ?>
        <button type="submit" class="btn btn-success">Agregar</button>

    </form>

</div>
