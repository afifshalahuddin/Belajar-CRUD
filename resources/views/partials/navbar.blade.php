    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container">
        <a class="navbar-brand" href="/">Latihan Laravel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link {{ ($title === "Home")? 'active' : '' }}" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ ($title === "About")? 'active' : '' }} " href="/about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ ($title === "Blog")? 'active' : '' }}" href="/blog">Blog</a>
            </li>
            </ul>

            
            
            <ul class="navbar-nav ms-auto">
            @auth
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Selamat Datang, {{ auth()->user()->name }}
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                @can('admin')
                <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>  
                @endcan
                <li><a class="dropdown-item" href="/profile/{{ auth()->user()->id }}">Profile</a></li>
                <li><hr class="dropdown-divider"></li>
                <form action="/logout" method="post">
                  @csrf
                  <button type="submit" class="dropdown-item">Logout <i class="bi bi-box-arrow-right"></i></button>
                </form>
              </ul>
            </li>
              @else
              <li class="nav-item">
                <a href="/login" class="nav-link {{ ($title === "Login")? 'active' : '' }}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
              </li>
            </ul>
            @endauth
        </div>
      </div>
    </nav>