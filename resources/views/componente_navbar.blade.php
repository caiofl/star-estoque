<nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded">
  <div class="container-fluid">
      <ul class="navbar-nav mr-auto">
        <li @if($current=="home") class="nav-item active" @else class="nav-item" @endif>
          <a class="nav-link"  href="/">Vendas</a>
        </li>
        <li  @if($current=="clientes") class="nav-item active" @else class="nav-item" @endif>
          <a class="nav-link" href="/clientes">Clientes</a>
        </li>  
        <li  @if($current=="produtos") class="nav-item active" @else class="nav-item" @endif>
          <a class="nav-link" href="/produtos">Produtos</a>
        </li>
      <ul>
  </div>
</nav>
