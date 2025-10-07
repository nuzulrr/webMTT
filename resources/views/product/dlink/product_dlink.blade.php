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
          style="color:black;display:inline-block;border-bottom:3px solid red;padding-bottom:10px;max-width:300px; font-size:32px;">
        D-Link Products
      </h1>
    </div>

    <!-- Category Buttons -->
    <div class="row justify-content-center mb-5" style="max-width: 600px; margin: 0 auto;">
      <div class="col-md-4 mb-2">
        <button class="btn btn-danger w-100 rounded-pill category-btn active" 
                data-bs-toggle="collapse" data-bs-target="#switchCards" aria-expanded="true">
          Switch
        </button>
      </div>
      <div class="col-md-4 mb-2">
        <button class="btn btn-secondary w-100 rounded-pill category-btn" 
                data-bs-toggle="collapse" data-bs-target="#apCards" aria-expanded="false">
          Access Point
        </button>
      </div>
      <div class="col-md-4 mb-2">
        <button class="btn btn-secondary w-100 rounded-pill category-btn" 
                data-bs-toggle="collapse" data-bs-target="#moduleCards" aria-expanded="false">
          Module
        </button>
      </div>
    </div>

    <!-- Product Cards -->
    <div class="row g-4" id="productCollapse">

      <!-- Switch Collapse -->
      <div class="collapse show" id="switchCards" data-bs-parent="#productCollapse">
        <div class="row g-4">
          <div class="col-md-4 d-flex">
            <div class="card shadow-lg flex-fill d-flex flex-column" style="border-radius:24px; min-height:420px;">
              <img src="{{ asset('assets/images/products/dlink/switch/switch1.png') }}" class="card-img-top" alt="Server 1">
              <div class="card-body d-flex flex-column">
                <h3 class="card-title">DXS-1210-28S 10 Gigabit Ethernet Smart Managed Switches </h3>
                <a href="{{ url('/#contact') }}" class="btn btn-danger mt-auto "style="border-radius:12px;">Discuss with us</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex">
            <div class="card shadow-lg flex-fill d-flex flex-column" style="border-radius:24px; min-height:420px;">
              <img src="{{ asset('assets/images/products/dlink/switch/switch2.png') }}" class="card-img-top" alt="Server 2">
              <div class="card-body d-flex flex-column">
                <h3 class="card-title">DXS-1210-28T
10 Gigabit Ethernet Smart Managed Switches </h3>
                <a href="{{ url('/#contact') }}" class="btn btn-danger mt-auto "style="border-radius:12px;">Discuss with us</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex">
            <div class="card shadow-lg flex-fill d-flex flex-column" style="border-radius:24px; min-height:420px;">
              <img src="{{ asset('assets/images/products/dlink/switch/switch3.png') }}" class="card-img-top" alt="Server 3">
              <div class="card-body d-flex flex-column">
                <h3 class="card-title">DGS-1510-28X, 
28-port Stackable Gigabit Switch including 4 10GbE SFP+ ports</h3>
                <a href="{{ url('/#contact') }}" class="btn btn-danger mt-auto "style="border-radius:12px;">Discuss with us</a>
              </div>
            </div>
          </div>
                    <div class="col-md-4 d-flex">
            <div class="card shadow-lg flex-fill d-flex flex-column" style="border-radius:24px; min-height:420px;">
              <img src="{{ asset('assets/images/products/dlink/switch/switch4.png') }}" class="card-img-top" alt="Server 3">
              <div class="card-body d-flex flex-column">
                <h3 class="card-title">DGS-1510-52XMP, Gigabit Stackable Smart Managed Switch with 10G Uplinks</h3>
                <a href="{{ url('/#contact') }}" class="btn btn-danger mt-auto "style="border-radius:12px;">Discuss with us</a>
              </div>
            </div>
          </div>
                    <div class="col-md-4 d-flex">
            <div class="card shadow-lg flex-fill d-flex flex-column" style="border-radius:24px; min-height:420px;">
              <img src="{{ asset('assets/images/products/dlink/switch/switch5.png') }}" class="card-img-top" alt="Server 3">
              <div class="card-body d-flex flex-column">
                <h3 class="card-title">DGS-1530-52P,
48-Port Gigabit Stackable Smart Managed PoE Switch</h3>
                <a href="{{ url('/#contact') }}" class="btn btn-danger mt-auto "style="border-radius:12px;">Discuss with us</a>
              </div>
            </div>
          </div>
                    <div class="col-md-4 d-flex">
            <div class="card shadow-lg flex-fill d-flex flex-column" style="border-radius:24px; min-height:420px;">
              <img src="{{ asset('assets/images/products/dlink/switch/switch6.png') }}" class="card-img-top" alt="Server 3">
              <div class="card-body d-flex flex-column">
                <h3 class="card-title">DGS-3130-30PS
30-Port Lite Layer 3 Stackable Managed PoE Switch</h3>
                <a href="{{ url('/#contact') }}" class="btn btn-danger mt-auto "style="border-radius:12px;">Discuss with us</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- access point Collapse -->
      <div class="collapse" id="apCards" data-bs-parent="#productCollapse">
        <div class="row g-4">
          <div class="col-md-4 d-flex">
            <div class="card shadow-lg flex-fill d-flex flex-column" style="border-radius:24px; min-height:420px;">
              <img src="{{ asset('assets/images/products/dlink/ap/ap1.png') }}" class="card-img-top" alt="Switch 1">
              <div class="card-body d-flex flex-column">
                <h3 class="card-title">D-LINK DAP-X1810F WIFI 6 AX1800 Indoor Access Point</h3>
                <a href="{{ url('/#contact') }}" class="btn btn-danger mt-auto "style="border-radius:12px;">Discuss with us</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Module Collapse -->
      <div class="collapse" id="moduleCards" data-bs-parent="#productCollapse">
        <div class="row g-4">
          <div class="col-md-4 d-flex">
            <div class="card shadow-lg flex-fill d-flex flex-column" style="border-radius:24px; min-height:420px;">
              <img src="{{ asset('assets/images/products/dlink/module/module1.png') }}" class="card-img-top" alt="Module 1">
              <div class="card-body d-flex flex-column">
                <h3 class="card-title">Transceiver Multi-Mode SFP+ 10GBASE-SR (300m)</h3>
                <a href="{{ url('/#contact') }}" class="btn btn-danger mt-auto "style="border-radius:12px;">Discuss with us</a>
              </div>
            </div>
          </div>

        </div>
      </div>

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
