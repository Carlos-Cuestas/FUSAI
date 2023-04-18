<x-base>

    <x-header lugar="/menu"/>

    <x-editelimbutt :miArray="$colNames" modo="js"/>

    <br>
    <hr>

    <h1 class="text-center">Consulta</h1>

    <hr>

    <x-controllers.index :miArray="$colNames" :miArray2="$regs" max="2" ruta="regs" />

    <br>
    <hr>

    </x-base>
