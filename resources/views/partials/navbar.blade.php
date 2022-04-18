<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="/">PENGELOLAAN DATA JASA KIRIM</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($tittle === "Admin") ? 'active' : '' }}" href="/Admin">Admin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($tittle === "Barang") ? 'active' : '' }}" href="/Barang">Barang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($tittle === "Pengiriman") ? 'active' : '' }}" href="/Pengiriman">Pengiriman</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($tittle === "Kurir") ? 'active' : '' }}" href="/Kurir">Kurir</a>
          </li>
        </ul>

        <ul class="navbar-nav ms-auto">
          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Selamat Datang, {{ auth()->user()->name }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-window-reverse"></i>Dashboardku</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
                
                <form action="/logout" method="post">
                  @csrf
                  <button type="submit" class="dropdown-item"><i class="bi bi-person-x"></i>Keluar</button>
                </form>
          </li>
            </ul>
          </li>
            @else   
          <li class="nav-item">
            <a href="/login" class="nav-link {{ ($tittle === "login") ? 'active' : '' }} "><i class="bi bi-person-rolodex"></i>
              Masuk</a> 
          </li>
          @endauth
        </ul>


      </div>
    </div>
  </nav>