@props(['ruta','max'=>null,'lugarr'=>null])

<x-alert/>

<div class="text-center" style="width: 38rem;display: flex;justify-content: center;margin:auto;">


    <table class="table table-warning table-striped">

        <thead>

            @foreach ($attributes['miArray'] as $colName)
            @if (substr($colName, -3) == '_id')

                <th>{{ ucfirst(str_replace(["_id"], "", $colName)) }}</th>
            @else
                <th>{{ ucfirst($colName) }}</th>
            @endif

            @endforeach

            <th>Editar</th>
            <th>Eliminar</th>

        </thead>

        <tbody>
            <?php $i = 3; ?>
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
                                    <td>{{$table->id}}</td>
                                @elseif (substr($name, -2) == 'id')

                                       <!--// /*<?php
                                       // $nombre = $name;
                                       // $correc = str_replace(["_id"], "", $nombre);

                                       // $value = $table->{$correc}->nombre;

                                       // echo '<td><input id="' . $name . '-' . $table->id . '" type="text" name="' . $name . '" value="' . $value . '" disabled></td>';
                                       // ?>*/-->
                                        <td>

                                            <select name="{{$name}}"  id="{{ $name.'-'.$table->id }}" class="form-select w-auto" disabled>

                                                    @foreach ($attributes['miArray'.$i] as $agencia)

                                                        <option value="{{ $agencia->id }}" {!! $table->$name == $agencia->id ? 'selected' : '' !!}>{{ $agencia->nombre }}</option>

                                                    @endforeach


                                            </select>

                                            <?php
                                                if ($i==$max) {
                                                     $i =3;
                                                }else {
                                                    $i +=1;
                                                }


                                            ?>



                                        </td>


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

                        <input type="text" name="Dia" value="{{date("Y-m-d")}}" hidden>
                        <input type="text" name="zona" value="{{$lugarr}}" hidden>
                        <input type="text" name="Tipo" value="editar" hidden>
                    </form>

                    <!-- Editar -->
                    <td>

                    <x-editelimbutt modo="boton" id="{{$table->id}}" />


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
