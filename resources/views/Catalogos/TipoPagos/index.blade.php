<x-base>
    <x-header/>

    <x-editelimbutt :miArray="$colNames" modo="js"/>

    <br>
    <hr>

    <h1 class="text-center">Consulta</h1>

    <hr>

    <x-controllers.index :miArray="$colNames" :miArray2="$tipopagos" ruta="tipopagos"/>

    <br>
    <hr>
    <!-- Crear -->
    <x-controllers.create :miArray="$colNames" ruta="tipopagos" nombrede="Tipo Pagos" />



    </x-base>
