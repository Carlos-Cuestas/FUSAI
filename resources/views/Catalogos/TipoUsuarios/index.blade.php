<x-base>
<x-header lugar="/catalogos"/>

<x-editelimbutt :miArray="$colNames" modo="js"/>

<br>
<hr>

<h1 class="text-center">Consulta</h1>

<hr>

<x-controllers.index :miArray="$colNames" :miArray2="$tipousuarios" ruta="tipousuarios" lugarr="tipo"/>

<br>
<hr>
<!-- Crear -->
<x-controllers.create :miArray="$colNames" ruta="tipousuarios" nombrede="Tipo Usuario"/>

</x-base>
