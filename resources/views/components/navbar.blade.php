<nav class="navbar navbar-expand-lg bg-body-tertiary nav-fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand fs-3 ps-3" href="#">{{config('app.name')}}</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav justify-content-evenly w-25 fs-5">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('welcome') }}"><span >Home</span></a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" href="{{ route('cars.index') }}">Auto</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" href="{{ route('orders.index') }}">Ordini</a>
            </li>
        </ul>
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          
            <li class="nav-item dropdown ms-auto">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Tasto
                    </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="">Aggiungi Auto</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li>
                        <form action="" method="POST">
                            @csrf
                            <button class="dropdown-item" type="submit">Logout</button>
                        </form>
                    </li>
                </ul>
            </li>
         
            <li class="nav-item">
                <a class="nav-link active" href="/register">Registrati</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="/login">Login</a>
            </li>
           
        </ul>
        
    </div>
  </div>
</nav>