<?php

    function my_sort_function($value) {

            if ($value == 'created_at') {
              return 5;
            } elseif($value == 'nombre') {
              return 1;
            } elseif($value == 'registro') {
              return 2;
            } elseif($value == 'estado') {
              return 3;
            }elseif($value == 'cliente') {
              return 4;
            }elseif($value == 'tipo_pago_id') {
              return 6;
            } else {
                return 0;
            }

          }

          $mapped_array = array_map('my_sort_function', $colNames);
          array_multisort($mapped_array, $colNames);

?>

<x-base>
    <x-header lugar="/catalogos"/>

    <x-editelimbutt :miArray="$colNames" modo="js"/>

    <br>
    <hr>

    <h1 class="text-center">Consulta</h1>

    <hr>

    <x-controllers.index :miArray="$colNames" :miArray2="$tipocolectores" :miArray3="$tipopagos" ruta="tipocolectores" max="3"/>

    <br>
    <hr>
    <!-- Crear -->
    <x-controllers.create :miArray="$colNames" ruta="tipocolectores" :miArray3="$tipocolectores" nombrede="Tipo Colector"/>

    </x-base>

