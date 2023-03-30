<x-base>

        <header style="background-color: #5E7AD7;">
            <nav class="navbar bg-body-tertiary">
              <div class="navbar-brand container-fluid">
                <ul class="nav">
                  <li class="nav-item">
                    <a class="form-control me-2 bg-primary" href="catalogos"><i class="bi bi-arrow-90deg-left"></i></a>
                  </li>
                </ul>
              </div>
            </nav>
      </header>

    <style>
        body{
            background-color: #E5E4E4;
        }
    </style>


<script>
    let lastestId = -1;
    function hideBtn(id, modify = false) {
        hideShowModificationButtons(id, false);
        lastestId = id;

        hideShowModificationButtons(lastestId, modify);

    }

    function hideShowModificationButtons(id, show = true) {
        if (id < 0) {
            return;
        }

        document.getElementById('nombre-'+id).disabled = !show ? true : false;
        document.getElementById('jefe-'+id).disabled = !show ? true : false;
        document.getElementById('estado-'+id).disabled = !show ? true : false;

        document.getElementById('btn'+id+'-1').style.display = show ? "none" : "inline-block";
        document.getElementById('btn'+id+'-2').style.display = show ? "inline-block" : "none";
        document.getElementById('btn'+id+'-3').style.display = show ? "inline-block" : "none";
    }

</script>



<br>
<hr>
<h1 class="text-center">Consulta</h1>
<hr>
    <div class="container" style="width: 48rem;">
        <table class="table table-warning table-striped">
            <thead>
                <th>Id</th>
                <th>Nombre</th>
                <th>Jefe</th>
                <th>Estado</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </thead>
            <tbody>
                @foreach ($agencias as $agencia)
                    <tr>
                        <form id="myform{{$agencia->id}}" method="POST" action="{{ route('agencias.update', $agencia->id) }}">
                            @csrf
                            @method('PUT')
                            <td><p>{{$agencia->id}}</p></td>

                        <td><input id="{{ 'nombre-'.$agencia->id }}" type="text" class="form-control" name="nombre" value="{{$agencia->nombre}}" disabled></td>
                        <td><input id="{{ 'jefe-'.$agencia->id }}" type="text" class="form-control" name="jefe" value="{{$agencia->jefe}}" disabled></td>
                        <td>
                            <select id="{{ 'estado-'.$agencia->id }}" name="estado" disabled>
                                <option value="Activo" {{ $agencia->estado === 'Activo' ? 'selected' : '' }}>Activo</option>
                                <option value="Inactivo" {{ $agencia->estado === 'Inactivo' ? 'selected' : '' }}>Inactivo</option>
                            </select>

                        </td>
                        </form>

                        <td>
                            <button id="{{ 'btn'.$agencia->id.'-1' }}" class="btn btn-warning" onclick="hideBtn({{ $agencia->id }}, true)"><i class="bi bi-pencil"></i></button>
                            <button id="{{ 'btn'.$agencia->id.'-2' }}" form="myform{{$agencia->id}}" class="btn btn-success" onclick="hideBtn({{ $agencia->id }}, true)" style="display:none;"><i class="bi bi-check-lg"></i></button>
                            <button id="{{ 'btn'.$agencia->id.'-3' }}" class="btn btn-danger" onclick="hideBtn({{ $agencia->id }})" style="display:none;"><i class="bi bi-x"></i></button>

                        </td>
                        <td class="text-center">
                            <form action="{{ route('agencias.destroy', $agencia->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"><i class="bi bi-trash3"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <br>

    <script>
        const alertCloseBtns = document.querySelectorAll('.alert .btn-close');
        alertCloseBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const alert = btn.closest('.alert');
                alert.remove();
            });
        });
    </script>

    @if(session('success'))
    <div class="container alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if(session('error'))
    <div class="container alert alert-success alert-dismissible fade show" role="alert">
        {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="container">
        <h1>Agregar Agencia</h1>
        <form method="POST" action="{{ route('agencias.store') }}">
            @csrf
            <div class="form-group">
                <label>Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre">
            </div>
            <br>
            <div class="form-group">
                <label>Jefe</label>
                <input type="text" class="form-control" name="jefe">
            </div>
            <br><br>
            <div class="form-group">
                <select name="estado" class="form-select">
                    <option value="Activo">Activo</option>
                    <option value="Inactivo">Inactivo</option>
                </select>
            </div>
            <br><br>
            <button type="submit" class="btn btn-success">Agregar</button>
        </form>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div>

      <br><br><br><br><br><br><br><br>
</x-base>
