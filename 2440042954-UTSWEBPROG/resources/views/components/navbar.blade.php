<div class="d-flex justify-content-center text-center align-items-center" style="height: 110px; background-color: #395144;">
    <h1 class="text-white">Giant Book Supplier</h1>
</div>
<nav class="navbar navbar-expand-lg align-items-center sticky-top" style="background-color: #F0EBCE;">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link text-primary" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-primary" href="#" role="button" data-bs-toggle="dropdown">
            Category
          </a>
          <ul class="dropdown-menu">
            @foreach ($categories as $category)
                <li><a class="dropdown-item" href="/category/{{ $category->id }}">{{ $category->CategoryName }}</a></li>
            @endforeach
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link text-primary" href="/publisher">Publisher</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-primary" href="/contact">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
