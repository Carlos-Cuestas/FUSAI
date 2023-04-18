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

<form action="/recibo">
<div style="text-align: center">
    <button type="submit" class="btn btn-secondary" >Recibo</button>
</div>
<br>
</form>

<x-controllers.index :miArray="$colNames" :miArray2="$modulopagos"  :miArray3="$agencias" :miArray4="$formapagos" :miArray5="$tipomovimientos" :miArray6="$tipocolectores" :miArray7="$tipopagos" ruta="modulopagos" max="7"/>

<br>
<hr>
<!-- Crear -->
<x-controllers.create :miArray="$colNames" :miArray2="$modulopagos" :miArray3="$agencias" :miArray4="$formapagos" :miArray5="$tipomovimientos" :miArray6="$tipocolectores" :miArray7="$tipopagos"  ruta="modulopagos" nombrede="Modulo Pago" max="7"/>

</x-base>
