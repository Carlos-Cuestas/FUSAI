@props(['modo'=> null,'id'=> null])

@if ($modo == 'js')
@foreach ($attributes['miArray'] as $colName => $name)
    @if ($colName >= 1)

<script>
    let lastestId = -1;
    var datos = <?php echo json_encode($attributes['miArray']); ?>;;


    function hideBtn(id, modify = false) {
        hideShowModificationButtons(id, false);
        lastestId = id;
        hideShowModificationButtons(lastestId, modify);
    }

    function hideShowModificationButtons(id, show = true) {
        if (id < 0) {
            return;
        }

        datos.forEach(function(elemento) {
        if(elemento != "id"){
            document.getElementById(elemento+"-"+id).disabled = !show ? true : false;
        }
    });


        /*document.getElementById('nombre-'+id).disabled = !show ? true : false;*/
        document.getElementById('btn'+id+'-1').style.display = show ? "none" : "inline-block";
        document.getElementById('btn'+id+'-2').style.display = show ? "inline-block" : "none";
        document.getElementById('btn'+id+'-3').style.display = show ? "inline-block" : "none";
    }

</script>
@endif
@endforeach
@endif


@if ($modo == 'boton')
<button  id="{{ 'btn'.$id.'-1' }}" class="btn btn-warning" onclick="hideBtn({{ $id }}, true)" form="nada"><i class="bi bi-pencil"></i></button>
<button  id="{{ 'btn'.$id.'-2' }}" class="btn btn-success" onclick="hideBtn({{ $id }}, true)" style="display:none;" form="myform{{$id}}"><i class="bi bi-check-lg"></i></button>
<button id="{{ 'btn'.$id.'-3' }}" class="btn btn-danger" onclick="hideBtn({{ $id }})" style="display:none;" form="myform{{$id}}"><i class="bi bi-x"></i></button>



@endif
