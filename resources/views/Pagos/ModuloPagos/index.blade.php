<?php

    function my_sort_function($value) {

            if ($value == 'agencia_id') {
              return 1;
            } elseif($value == 'forma_pago_id') {
              return 2;
            } elseif($value == 'tipo_movimiento_id') {
              return 3;
            } elseif($value == 'tipocolector_id') {
              return 4;
            }elseif($value == 'tipo_pago_id') {
              return 5;
            }elseif($value == 'monto') {
              return 6;
            } else {
                return 0;
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
<?php
$val = null;
foreach ($modulopagos as $key) {
    $val +=intval($key->monto);

}
echo "<h1 style=\"text-align: center\">Dinero en Caja: $val$</h1>";
?>
<x-controllers.index :miArray="$colNames" :miArray2="$modulopagos" ruta="modulopagos"/>

<br>
<hr>
<!-- Crear -->
<x-controllers.create :miArray="$colNames" ruta="modulopagos" nombrede="Modulo Pago"/>

</x-base>
