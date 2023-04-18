<x-base>
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

    <x-header lugar="menu"/>

    <section>
    <div class="container">
    <div class="menu">
    <div class="text-center">
    <a href="{{route('agencias.index')}}"><button class="btn btn-primary">Agencia</button></a>

           <a href="{{route('tipopagos.index')}}"><button class="btn btn-primary">Tipo Pago</button></a>

           <a href="{{route('formapagos.index')}}"><button class="btn btn-primary">Forma de Pago</button></a>

           <a href="{{route('tipousuarios.index')}}"><button class="btn btn-primary">Tipo Usuarios</button></a>
           <a href="{{route('tipomovimientos.index')}}"><button class="btn btn-primary">Tipo Movimiento</button></a>
           <a href="{{route('tipocolectores.index')}}"><button class="btn btn-primary">Tipo Colector</button></a>
    </div>
    </div>
  </div>
    </section>






</x-base>
