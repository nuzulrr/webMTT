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
        APC Products
      </h1>
    </div>

    <!-- Category Buttons -->
    <div class="row justify-content-center mb-5" style="max-width: 600px; margin: 0 auto;">
      <div class="col-md-3 mb-2">
        <button class="btn btn-danger w-100 rounded-pill category-btn active" 
                data-bs-toggle="collapse" data-bs-target="#upsCards" aria-expanded="true">
          UPS
        </button>
      </div>
      <div class="col-md-3 mb-2">
        <button class="btn btn-secondary w-100 rounded-pill category-btn" 
                data-bs-toggle="collapse" data-bs-target="#rackCards" aria-expanded="false">
          Rack
        </button>
      </div>
      <div class="col-md-3 mb-2">
        <button class="btn btn-secondary w-100 rounded-pill category-btn" 
                data-bs-toggle="collapse" data-bs-target="#kvmCards" aria-expanded="false">
          KVM
        </button>
      </div>
      <div class="col-md-3 mb-2">
        <button class="btn btn-secondary w-100 rounded-pill category-btn " 
                data-bs-toggle="collapse" data-bs-target="#pduCards" aria-expanded="true">
          PDU
        </button>
      </div>
    </div>

    <!-- Product Cards -->
    <div class="row g-4" id="productCollapse">

      <!-- ups Collapse -->
      <div class="collapse show" id="upsCards" data-bs-parent="#productCollapse">
        <div class="row g-4">
          <div class="col-md-4 d-flex">
            <div class="card shadow-lg flex-fill d-flex flex-column" style="border-radius:24px; min-height:420px;">
              <img src="{{ asset('assets/images/products/apc/ups/ups1.png') }}" class="card-img-top" alt="Server 1">
              <div class="card-body d-flex flex-column">
                <h3 class="card-title">APC Smart-UPS On-Line, SRT10KXLI</h3>
                <a href="{{ url('/#contact') }}" class="btn btn-danger mt-auto "style="border-radius:12px;">Discuss with us</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex">
            <div class="card shadow-lg flex-fill d-flex flex-column" style="border-radius:24px; min-height:420px;">
              <img src="{{ asset('assets/images/products/apc/ups/ups2.png') }}" class="card-img-top" alt="Server 2">
              <div class="card-body d-flex flex-column">
                <h3 class="card-title">APC Smart-UPS On-Line, SRT6KXLI </h3>
                <a href="{{ url('/#contact') }}" class="btn btn-danger mt-auto "style="border-radius:12px;">Discuss with us</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex">
            <div class="card shadow-lg flex-fill d-flex flex-column" style="border-radius:24px; min-height:420px;">
              <img src="{{ asset('assets/images/products/apc/ups/ups3.png') }}" class="card-img-top" alt="Server 3">
              <div class="card-body d-flex flex-column">
                <h3 class="card-title">APC Smart-UPS On-Line, 20kVA/20kW,SRTG20XLI</h3>
                <a href="{{ url('/#contact') }}" class="btn btn-danger mt-auto "style="border-radius:12px;">Discuss with us</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex">
            <div class="card shadow-lg flex-fill d-flex flex-column" style="border-radius:24px; min-height:420px;">
              <img src="{{ asset('assets/images/products/apc/ups/ups4.png') }}" class="card-img-top" alt="Server 3">
              <div class="card-body d-flex flex-column">
                <h3 class="card-title">APC Smart-UPS On-Line, 5kVA </h3>
                <a href="{{ url('/#contact') }}" class="btn btn-danger mt-auto "style="border-radius:12px;">Discuss with us</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex">
            <div class="card shadow-lg flex-fill d-flex flex-column" style="border-radius:24px; min-height:420px;">
              <img src="{{ asset('assets/images/products/apc/ups/ups5.png') }}" class="card-img-top" alt="Server 3">
              <div class="card-body d-flex flex-column">
                <h3 class="card-title">APC Smart-UPS On-Line, UPS 3KVA</h3>
                <a href="{{ url('/#contact') }}" class="btn btn-danger mt-auto "style="border-radius:12px;">Discuss with us</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- rack Collapse -->
      <div class="collapse" id="rackCards" data-bs-parent="#productCollapse">
        <div class="row g-4">
          <div class="col-md-4 d-flex">
            <div class="card shadow-lg flex-fill d-flex flex-column" style="border-radius:24px; min-height:420px;">
              <img src="{{ asset('assets/images/products/apc/rack/rack1.png') }}" class="card-img-top" alt="Monitor 1">
              <div class="card-body d-flex flex-column">
                <h3 class="card-title">APC NetShelter SX, Server Rack Enclosure, 42U, Black, 1991H x 600W x 1200D mm,AR 3300</h3>
                <a href="{{ url('/#contact') }}" class="btn btn-danger mt-auto "style="border-radius:12px;">Discuss with us</a>
              </div>
            </div>
          </div>
                    <div class="col-md-4 d-flex">
            <div class="card shadow-lg flex-fill d-flex flex-column" style="border-radius:24px; min-height:420px;">
              <img src="{{ asset('assets/images/products/apc/rack/rack2.png') }}" class="card-img-top" alt="Monitor 1">
              <div class="card-body d-flex flex-column">
                <h3 class="card-title">APC Easy Rack, 42U, Black, With Roof, Castors, Feet, 4 Brackets, and Side Panels, No Bottom, 1991H x 600W x 1200D mm,ER 6222</h3>
                <a href="{{ url('/#contact') }}" class="btn btn-danger mt-auto "style="border-radius:12px;">Discuss with us</a>
              </div>
            </div>
          </div>
                    <div class="col-md-4 d-flex">
            <div class="card shadow-lg flex-fill d-flex flex-column" style="border-radius:24px; min-height:420px;">
              <img src="{{ asset('assets/images/products/apc/rack/rack3.png') }}" class="card-img-top" alt="Monitor 1">
              <div class="card-body d-flex flex-column">
                <h3 class="card-title">APC NetShelter SX, Server Rack Enclosure, 24U, Black, 1198.5H x 600W x 1070D mm, AR3104 24U</h3>
                <a href="{{ url('/#contact') }}" class="btn btn-danger mt-auto "style="border-radius:12px;">Discuss with us</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--kvm Collapse -->
      <div class="collapse" id="kvmCards" data-bs-parent="#productCollapse">
        <div class="row g-4">
          <div class="col-md-4 d-flex">
            <div class="card shadow-lg flex-fill d-flex flex-column" style="border-radius:24px; min-height:420px;">
              <img src="{{ asset('assets/images/products/apc/kvm/kvm1.png') }}" class="card-img-top" alt="pc 1">
              <div class="card-body d-flex flex-column">
                <h3 class="card-title">17" Rack LCD Console with Integrated 16 Port Analog KVM Switch, AP5816</h3>
                <a href="{{ url('/#contact') }}" class="btn btn-danger mt-auto "style="border-radius:12px;">Discuss with us</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex">
            <div class="card shadow-lg flex-fill d-flex flex-column" style="border-radius:24px; min-height:420px;">
              <img src="{{ asset('assets/images/products/apc/kvm/kvm2.png') }}" class="card-img-top" alt="pc 1">
              <div class="card-body d-flex flex-column">
                <h3 class="card-title">APC KVM USB Cable - 6 ft (1.8 m), AP5253</h3>
                <a href="{{ url('/#contact') }}" class="btn btn-danger mt-auto "style="border-radius:12px;">Discuss with us</a>
              </div>
            </div>
          </div>
      </div>
      </div>
<!-- pdu Collapse -->
<div class="collapse" id="pduCards" data-bs-parent="#productCollapse">
  <div class="row g-4">
    <div class="col-md-4 d-flex">
      <div class="card shadow-lg flex-fill d-flex flex-column" style="border-radius:24px; min-height:420px;">
        <img src="{{ asset('assets/images/products/apc/pdu/pdu1.png') }}" class="card-img-top" alt="pc 1">
        <div class="card-body d-flex flex-column">
          <h3 class="card-title">AP8853, APC Rack PDU 2G, Metered, ZeroU, 32A, 230V, (36) C13 & (6) C19	</h3>
          <a href="{{ url('/#contact') }}" class="btn btn-danger mt-auto "style="border-radius:12px;">Discuss with us</a>
        </div>
      </div>
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
