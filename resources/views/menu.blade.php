<ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="{{ url('home') }}">
        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
          <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
        </div>
        <span class="nav-link-text ms-1">Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{ ($title === "Profil") ? 'active' : '' }}" href="{{ url('profil') }}">
        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
          <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
        </div>
        <span class="nav-link-text ms-1">Profil Asrama</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{ ($title === "Data Santri") ? 'active' : '' }}" href="/posts">
        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
          <i class="ni ni-app text-info text-sm opacity-10"></i>
        </div>
        <span class="nav-link-text ms-1">Data Santri Tahfidz</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{ ($title === "Data Wisuda") ? 'active' : '' }}" href="{{ url('data2') }}">
        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
          <i class="ni ni-app text-info text-sm opacity-10"></i>
        </div>
        <span class="nav-link-text ms-1">Data Santri Wisuda</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{ ($title === "Calendar") ? 'active' : '' }}" href="{{ url('calender') }}">
        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
          <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
        </div>
        <span class="nav-link-text ms-1">Calender</span>
      </a>
    </li>
    <li class="nav-item mt-3">
      <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
    </li>
      <a class="nav-link active" href="../pages/profile.html">
        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
          <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
        </div>
        <span class="nav-link-text ms-1">Profile Admin</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{ ($title === "Login") ? 'active' : '' }}" href="{{ url('login.index') }}">
        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
          <i class="ni ni-single-02 text-warning text-sm opacity-10"></i>
        </div>
        <span class="nav-link-text ms-1">Login</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="../pages/sign-up.html">
        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
          <i class="ni ni-collection text-info text-sm opacity-10"></i>
        </div>
        <span class="nav-link-text ms-1">Sign Up</span>
      </a>
    </li>
  </ul>