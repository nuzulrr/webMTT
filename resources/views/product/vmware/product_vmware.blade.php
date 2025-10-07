<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>Media Touch Technology</title>
  <link rel="icon" type="image/png" href="{{ asset('assets/images/mtt.png') }}">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Sen:400,700,800&display=swap" rel="stylesheet">
</head>
<body>

<section class="prod">
  <div class="container">
    <!-- Title -->
    <div class="d-flex justify-content-center mb-4">
      <h1 class="fw-bold mb-5"
          style="color:black;display:inline-block;border-bottom:3px solid red;padding-bottom:10px; font-size:32px;">
        VMware Products
      </h1>
    </div>

    <!-- Category Buttons -->
    <div class="row justify-content-center mb-5" style="max-width: 600px; margin: 0 auto;">
      <div class="col-md-3 mb-2">
        <button class="btn btn-danger w-100 rounded-pill category-btn active" 
                data-bs-toggle="collapse" data-bs-target="#softwareCards" aria-expanded="true">
          Software
        </button>
      </div>
      </div>

    <!-- Product Cards -->
    <div class="row g-4" id="productCollapse">

     <!-- software Collapse -->
<div class="collapse show" id="softwareCards" data-bs-parent="#productCollapse">
  <div class="row g-4">



  </div>
</div>
</div>
<!-- tutup productCollapse -->
</div>
    <p class="text-center mt-5" style="padding-top: 20px;">
      <span><i class="bi bi-arrow-left"></i></span> Back to 
      <a href="{{ route('landing') }}" style="text-decoration: none; color: red;">Home</a>
    </p>
  </div>
</section>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

@include('footer')

<script>
  // ambil semua tombol kategori
  const buttons = document.querySelectorAll(".category-btn");

  buttons.forEach(btn => {
    btn.addEventListener("click", function() {
      buttons.forEach(b => {
        b.classList.remove("btn-danger");
        b.classList.add("btn-secondary");
      });
      this.classList.remove("btn-secondary");
      this.classList.add("btn-danger");
    });
  });
</script>
</body>
</html>
