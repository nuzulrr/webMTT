<!-- Navbar -->
<nav id="mainNavbar" 
     class="navbar navbar-expand-lg fixed-top navbar-light  bg-white" 
     style="box-shadow: 0 2px 6px rgba(0,0,0,0.1);">

  <div class="container">
    <!-- Logo -->
    <section id="home" class="d-flex align-items-center">
      <a href="{{ route('landing') }}" class="d-block ms-lg-0 ms-3">
        <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" style="width:140px; height:auto;">
      </a>
    </section>

    <!-- Toggle button (mobile) -->
    <button class="navbar-toggler me-3" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Menu -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto fs-5">
        <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
        <li class="nav-item"><a class="nav-link" href="#product">Products</a></li>
        <li class="nav-item"><a class="nav-link" href="#news">News</a></li>
        <li class="nav-item"><a class="nav-link" href="#contact">Contact Us</a></li>
      </ul>
    </div>
  </div>
</nav>