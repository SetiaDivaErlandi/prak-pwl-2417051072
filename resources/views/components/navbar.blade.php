<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm mb-4">
  <div class="container">
    <a class="navbar-brand fw-bold text-pink" href="#" style="color: #ff8fa3;">Praktikum PWL</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link text-white" href="{{ url('/user') }}">Daftar Pengguna</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="{{ route('user.create') }}">Tambah Pengguna</a>
        </li>
      </ul>
    </div>
  </div>
</nav>