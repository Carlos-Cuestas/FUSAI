@props(['lugar'])
<header style="background-color: #5E7AD7;">
    <nav class="navbar bg-body-tertiary">
      <div class="navbar-brand container-fluid">
        <ul class="nav">
          <li class="nav-item">
            @if ($lugar != "nada")
            <a class="form-control me-2 bg-primary" href="{{$lugar}}"><i class="bi bi-arrow-90deg-left"></i></a>
            @endif
              
          </li>
        </ul>
      </div>
    </nav>
</header>
