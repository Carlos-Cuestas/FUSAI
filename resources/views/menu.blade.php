<x-base>
    <x-header lugar="nada"/>
    <section>
    <div class="container">
    <div class="menu">
    <div class="text-center">



    @auth
        @if (Auth::user()->tipousuario_id === 1 || Auth::user()->tipousuario_id === 3)
        <a href="catalogos" class="btn btn-primary">
            <img src="/3486568.png" width="50px" height="60px"/>
            <br>
            <button class="btn text-light">Catalogos</button>
          </a>
        @endif
    @endauth

    @auth
        @if (Auth::user()->tipousuario_id === 2 || Auth::user()->tipousuario_id === 1)
        <a href="modulopagos" class="btn btn-primary">
            <img src="/cajasic.png" width="50px" height="60px"/>
            <br>
            <button class="btn text-light">Modulo Pagos</button>
          </a>
        @endif
    @endauth

    @auth
        @if (Auth::user()->tipousuario_id === 1)
            <a href="users" class="btn btn-primary">
                <img src="/pngegg.png" width="50px" height="60px"/>
                <br>
                <button class="btn text-light">Usuarios</button>
            </a>
        @endif
    @endauth

    @auth
        @if (Auth::user()->tipousuario_id === 1 || Auth::user()->tipousuario_id === 3)
        <a href="{{route('regs.index')}}" class="btn btn-primary">
            <img src="/3486568.png" width="50px" height="60px"/>
            <br>
            <button class="btn text-light">Registro de Edicion</button>
          </a>
        @endif
    @endauth


    </div>
    </div>
  </div>
    </section>
<style>
    section {
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.container {
  width: 80%;
}

.menu {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-evenly;
}

button {
  width: auto;
  height: 50px;
  margin: 5px;
}

   </style>

</x-base>
