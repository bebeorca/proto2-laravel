<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
      <a class="navbar-brand" href="#">KaSeT</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($title == "Home") ? 'active' : '' }}" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title == "Kategori Menu") ? 'active' : '' }}" href="/categories">Kategori Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title == "Menus") ? 'active' : '' }}" href="/menus">Semua Menu</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>