<x-base>
    <x-header lugar="/catalogos"/>

    <x-editelimbutt :miArray="$colNames" modo="js"/>

    <br>
    <hr>

    <h1 class="text-center">Consulta</h1>

    <hr>

    <x-controllers.index :miArray="$colNames" :miArray2="$formapagos" ruta="formapagos"/>

    <br>
    <hr>
    <!-- Crear -->
    <x-controllers.create :miArray="$colNames" ruta="formapagos" nombrede="Tipo Pago"/>

    </x-base>

