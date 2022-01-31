<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/dashboard">
              <i class="bi bi-house-fill"></i>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/dashboard/post">
              <i class="bi bi-folder-fill"></i>
            Data Post
          </a>
        </li>
      </ul>
      @can('admin')
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link" href="/dashboard/akses">
              <i class="bi bi-folder-fill"></i>
            Akses Admin
          </a>
        </li>
      </ul>
      @endcan
    </div>
  </nav>