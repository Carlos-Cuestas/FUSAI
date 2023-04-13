<?php

    function my_sort_function($value) {

            if ($value == 'contraseña') {
              return 3;
            } elseif($value == 'tipousuario_id') {
              return 6;
            } elseif($value == 'id') {
              return 0;
            } elseif($value == 'nombre') {
              return 1;
            }elseif($value == 'agencia_id') {
              return 7;
            }elseif($value == 'correo') {
              return 4;
            } else {
                return 2;
            }

          }

          $mapped_array = array_map('my_sort_function', $colNames);
          array_multisort($mapped_array, $colNames);

?>

<x-base>

    <x-header lugar="/menu"/>

    <x-editelimbutt :miArray="$colNames" modo="js"/>

    <br>
    <hr>

    <h1 class="text-center">Consulta</h1>

    <hr>

    <x-controllers.index :miArray="$colNames" :miArray2="$users" :miArray3="$tipousuarios" :miArray4="$agencias" max="4" ruta="users"/>

    <br>
    <hr>
    <!-- Crear -->
    <x-controllers.create :miArray="$colNames" :miArray2="$users" :miArray4="$agencias" :miArray3="$tipousuarios" ruta="users" nombrede="Usuario"/>

    </x-base>
