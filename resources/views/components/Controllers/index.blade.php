@props(['ruta'])
<div class="container text-center" style="width: 48rem;">

    <x-alert/>

    <table class="table table-warning table-striped">

        <thead>

            @foreach ($attributes['miArray'] as $colName)
                <th>{{ ucfirst($colName) }}</th>
            @endforeach

            <th>Editar</th>
            <th>Eliminar</th>

        </thead>

        <tbody>

            <!-- Mostrar -->
            @foreach ($attributes['miArray2'] as $table)
                <tr>
                    <form id="myform{{$table->id}}" method="POST" action="{{ route($ruta.'.update', $table->id) }}">
                        @csrf
                        @method('PUT')


                        <!-- Mostrar Select -->
                        @foreach ($attributes['miArray'] as $colName => $name)

                            @if ($colName >= 0)

                            @if ($name == 'id')
                                <td>{{$name}}</td>
                            @else

                                <td><input id="{{ $name.'-'.$table->id }}" type="text" name="{{$name}}" value="{{$table->$name}}" disabled></td>

                            @endif

                            <!--
                            @elseif ($table)
                            <td>
                                <select id="{{ $name.'-'.$table->id }}" name="{{$name}}" disabled>

                                    @foreach ($tipousuarios as $option)

                                        <option value="{{$option->nombre}}" {!! $option->id == $table->id ? 'selected' : '' !!}>{{$option->nombre}}</option>

                                    @endforeach

                                </select>
                            </td>
                            @endif-->




                        @endforeach

                    </form>

                    <!-- Editar -->
                    <td>
                        <x-editelimbutt modo="boton" id="{{$table->id}}"/>
                    </td>

                    <!-- Eliminar -->
                    <td class="text-center">
                        <x-elimbut tabla="{{$ruta}}" id="{{$table->id}}"/>
                    </td>

                </tr>
            @endforeach

        </tbody>
    </table>
</div>
