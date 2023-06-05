<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand ms-2 me-0 pe-2" href="../"><img id="MDB-logo" src="/img/logo_axl_light.png" alt="MDB Logo" draggable="false" width="100"/></a>    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <li>
          <form action="/logout" method="post">
            @csrf
            <button type="submit" class="nav-link px-3">Logout <i class="bi bi-box-arrow-right"></i></button>
          </form>
        </li>
      </div>
    </div>
  </header>