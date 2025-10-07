<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Site metas -->
    <title>Media Touch Technology</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/images/mtt.png') }}">

    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    

    <!-- Bootstrap CSS -->
      <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    <!-- Favicon -->
    <link rel="icon" href="{{asset('assets/images/fevicon.png')}}" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Sen:400,700,800&display=swap" rel="stylesheet">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.mCustomScrollbar.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- AOS Animation -->
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css"/>
</head>
<body data-bs-spy="scroll" data-bs-target="#navbarSupportedContent" data-bs-offset="70" tabindex="0">


    <!-- Header Section -->
    
<section id="home" class="header_section layout_padding position-relative">
    <!-- Background Video -->
      @include('nav')
    <video autoplay muted loop playsinline class="position-absolute w-100 h-100 top-0 start-0 object-fit-cover" style="z-index:0; min-height:100%; min-width:100%; max-width:100vw; max-height:100vh;" onended="this.play()">
        <source src="{{ asset('assets/images/bg.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
   
    <!-- Banner -->
    <div class="banner_section layout_padding position-relative" style="z-index:2;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7" data-aos="fade-right" data-aos-delay="150">
                    <h3 class="banner_taital mb-3">PT. MEDIA TOUCH TECHNOLOGY</h3>
                    <h1 class="lh-sm text-white mb-3" style="font-size: 70px; font-weight: bold;">
                        Powerful Digital Solution
                    </h1>
                    <h4 class="text-white" style="padding-bottom: 65px; text-align: justify;">
                        Information technology is a field concerned with the use of computers and software to store, transmit, and manage information.
                    </h4>
                </div>
                <div class="col-md-5 text-center" data-aos="fade-left" data-aos-delay="150">
                    <!-- You can add content here if needed -->
                </div>
            </div>
        </div>
    </div>
    <!-- Overlay for better text visibility -->
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background:rgba(0,0,0,0.45); z-index:1;"></div>
</section>
        <!-- domain section start -->
        <!-- domain section end -->
        <!-- about section start -->
<!-- About Section -->
<section id="about" class="about_section" style="text-align: center;">
  <div class="container">
    <div class="col-12">
      <div class="d-flex justify-content-center">
        <h1 class="services_taital fw-bold mb-4 pb-20"
            style="color: black; display: inline-block; border-bottom: 3px solid red; padding-bottom: 10px; max-width: 200px;">
          About Us
        </h1>
      </div>
      <div class="row" style="padding-bottom:100px;" >
        <div class="col-md-6">
          <div id="aboutCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-aos="fade-right" data-aos-delay="50" style="padding-top:50px; padding-bottom:20px;">
             <div class="carousel-indicators mb-5 " style="padding-top:20px;">
  <button type="button" data-bs-target="#aboutCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
  <button type="button" data-bs-target="#aboutCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
  <button type="button" data-bs-target="#aboutCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
</div>

<style>
  /* Warna indikator carousel */
  #aboutCarousel .carousel-indicators [data-bs-target] {
    background-color: gray;           /* warna titik */
    width: 23px;                     /* ukuran */
    height: 23px;
             /* biar bulat */
  }

  /* Warna saat aktif */
  #aboutCarousel .carousel-indicators .active {
    background-color: darkred;       /* warna titik aktif */
  }
</style>
            <div class="carousel-inner text-center">
              <div class="carousel-item active">
                <img src="{{ asset('assets/images/about.png') }}" class="d-block mx-auto w-75 img-fluid mb-3" alt="About Us 1">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('assets/images/about2.png') }}" class="d-block mx-auto w-75 img-fluid mb-3" alt="About Us 2">
              </div>
               <div class="carousel-item">
                <img src="{{ asset('assets/images/about3.png') }}" class="d-block mx-auto w-75 img-fluid mb-3" alt="About Us 3">
              </div>
            </div>

          </div>
        </div>
        <div class="col-md-6 content" data-aos="fade-left" data-aos-delay="150">
          <p class="about_taital text-start fw-semibold fs-5 text-dark">
            PT. Media Touch Technology
          </p>
          <p class="about_text text-dark" style="text-align: justify;">
            Information technology is a field concerned with the use of computers and software to store,
            transmit, and manage information. In the digital era, information technology has become very
            important in almost all aspects of our lives. By using information technology, we can easily
            access and share information via the internet. Apart from that, information technology also
            plays an important role in business, education, and government. In business, information
            technology allows companies to improve operational efficiency and increase productivity. In
            the world of education, information technology makes the learning process more interactive and
            allows students to access learning resources online. Meanwhile, in government, information
            technology is used to store data and facilitate public services.
          </p>
          <p class="about_text text-dark" style="text-align: justify;">
            Our company provides efficient strategic solutions for digital needs such as hardware, storage
            devices, security networks, network infrastructure implementation, implementation services,
            and uninterruptible power supply. We collaborate with research and technology system
            development for several intelligence equipment technologies.
          </p>
        </div>
      </div>
    </div>
  </div>

  <!-- Vision & Mission -->
  <div class="hosting_section layout_padding text-align-center">
    <div class="container text-center">
      <div class="d-flex justify-content-center" style="margin-bottom: 60px;">
        <h1 class="services_taital fw-bold"
            style="display: inline-block; border-bottom: 3px solid red; padding-bottom: 10px; max-width: 350px;">
          Vision & Mission
        </h1>
      </div>
      <div class="row g-2">
        <!-- Vision -->
        <div class="col-md-4 mb-3">
          <div class="card text-white p-4 h-100 card-transparent-visi" data-aos="fade-right" data-aos-delay="150">
            <h4 class="fw-bold mb-3 text-white fs-3">Our Vision</h4>
            <ul class="list-unstyled">
              <li class="d-flex text-start mb-2">
                <i class="bi bi-check-circle-fill me-2 fs-6"></i>
                <span class="fs-6">Our Vision is Become best strategic company for digital solution</span>
              </li>
            </ul>
          </div>
        </div>

        <!-- Mission -->
        <div class="col-md-8">
          <div class="card text-white p-4 h-100 card-transparent-misi" data-aos="fade-left" data-aos-delay="150">
            <h4 class="fw-bold mb-3 text-white fs-3">Our Mission</h4>
            <ul class="list-unstyled">
              <li class="d-flex align-items-start mb-2">
                <i class="bi bi-check-circle-fill me-2 fs-6"></i>
                <span class="fs-6 text-start">Commitment to be the best efficient digital solution.</span>
              </li>
              <li class="d-flex align-items-start mb-2">
                <i class="bi bi-check-circle-fill me-2 fs-6"></i>
                <span class="fs-6 text-start">Continue development opportunities with integration network.</span>
              </li>
              <li class="d-flex align-items-start">
                <i class="bi bi-check-circle-fill me-2 fs-6"></i>
                <span class="fs-6 text-start">Development opportunities for surveillance and intelligence equipment system.</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- hosting section end -->
<!-- pricing section start -->

<!-- pricing section end -->
<!-- services section start -->
<section id="product" class="product_section layout_padding">
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-center" style="margin-bottom: 50px;">
                <h1
                    class="services_taital fw-bold"
                    style="color: black; display: inline-block; border-bottom: 3px solid red; padding-bottom: 10px; max-width: 300px;">Our Products</h1>
            </div>
        </div>
    </div>
    
    <!-- Products Grid: 3 items per row -->
    <div class="row" data-aos="zoom-in-up" data-aos-delay="150">
        @php
            $products = [
                [
                    'route' => 'dell.server',
                    'image' => 'dell.png',
                    'alt' => 'DELL',
                    'title' => 'DELL',
                    'desc' => 'PowerEdge Server, VXRail, Rack, Switches'
                ],
                [
                    'route' => 'lenovo',
                    'image' => 'lenovo.png',
                    'alt' => 'LENOVO',
                    'title' => 'LENOVO',
                    'desc' => 'ThinkSystem Server, All In One PC'
                ],
                [
                    'route' => 'apc',
                    'image' => 'apc.png',
                    'alt' => 'APC',
                    'title' => 'APC',
                    'desc' => 'Smart UPS, Rack, KVM LCD Monitor, Power Delivery Unit'
                ],
                [
                    'route' => 'vmware',
                    'image' => 'vmware.png',
                    'alt' => 'VMware',
                    'title' => 'VMware',
                    'desc' => 'VSphere, VSAN, VCenter'
                ],
                [
                    'route' => 'sophos',
                    'image' => 'sophos.png',
                    'alt' => 'SOPHOS',
                    'title' => 'SOPHOS',
                    'desc' => 'Cloud Firewall'
                ],
                [
                    'route' => 'fortinet',
                    'image' => 'fortinet.png',
                    'alt' => 'Fortinet',
                    'title' => 'Fortinet',
                    'desc' => 'Fortigate, Fortiswitch'
                ],
                [
                    'route' => 'dlink',
                    'image' => 'dlink.png',
                    'alt' => 'D-LINK',
                    'title' => 'D-LINK',
                    'desc' => 'Enterprise Switches'
                ],
                [
                    'route' => 'edgecore',
                    'image' => 'edgecore.png',
                    'alt' => 'EDGECORE',
                    'title' => 'EDGECORE',
                    'desc' => 'Enterprise Switches'
                ],
                [
                    'route' => 'aten',
                    'image' => 'aten.png',
                    'alt' => 'ATEN',
                    'title' => 'ATEN',
                    'desc' => 'LCD KVM Switch'
                ],
                [
                    'route' => 'synology',
                    'image' => 'synology.png',
                    'alt' => 'SYNOLOGY',
                    'title' => 'SYNOLOGY',
                    'desc' => 'NAS Server'
                ],
                [
                    'route' => 'qnap',
                    'image' => 'qnap.png',
                    'alt' => 'QNAP',
                    'title' => 'QNAP',
                    'desc' => 'NAS Server'
                ],
                [
                    'route' => 'citrix',
                    'image' => 'citrix.png',
                    'alt' => 'CITRIX',
                    'title' => 'CITRIX',
                    'desc' => 'Load Balancer'
                ],
                [
                    'route' => 'vertiv',
                    'image' => 'vertif.png',
                    'alt' => 'VERTIV',
                    'title' => 'VERTIV',
                    'desc' => 'Smart UPS, Smart Panel View'
                ],
                [
                    'route' => 'mcafee',
                    'image' => 'McAfee.png',
                    'alt' => 'MCAFEE',
                    'title' => 'MCAFEE',
                    'desc' => 'McAfee Security Information and Event Management (SIEM)'
                ],
                [
                    'route' => 'alcatel',
                    'image' => 'alcatel.png',
                    'alt' => 'ALCATEL LUCENT ENTERPRISE',
                    'title' => 'ALCATEL LUCENT ENTERPRISE',
                    'desc' => 'POE Switches, Enterprise Switches, Access Point'
                ],
                [
                    'route' => 'mikrotik',
                    'image' => 'mikrotik.png',
                    'alt' => 'Mikrotik',
                    'title' => 'Mikrotik',
                    'desc' => 'Router, Switches,'
                ],
                [
                    'route' => 'cisco',
                    'image' => 'cisco.png',
                    'alt' => 'cisco',
                    'title' => 'Cisco',
                    'desc' => 'Switches,'
                ],
                [
                    'route' => 'allied.telesis',
                    'image' => 'allied.png',
                    'alt' => 'ALLIED TELESIS',
                    'title' => 'ALLIED TELESIS',
                    'desc' => 'Switches, Access Point'
                ],
                [
                    'route' => 'ubiquiti',
                    'image' => 'ubiquiti.png',
                    'alt' => 'UBIQUITI',
                    'title' => 'UBIQUITI',
                    'desc' => 'Switches, Access Point, Router'
                ],
                
            ];
        @endphp

        @foreach($products as $product)
        <div class="col-lg-4 col-md-6 mb-4 d-flex align-items-stretch">
            <a href="{{ route($product['route']) }}" target="_blank" style="text-decoration: none;" class="w-100">
                <div class="card shadow card-hover w-100 h-100"
                     style="border-radius: 24px; box-shadow: 0 4px 12px rgba(0,0,0,0.15); min-height: 370px; display: flex; flex-direction: column; justify-content: center;">
                    <div class="card-body text-center d-flex flex-column justify-content-center align-items-center" style="height: 100%;">
                        <img src="{{ asset('assets/images/' . $product['image']) }}"
                             class="img-fluid mb-3 mx-auto"
                             alt="{{ $product['alt'] }}"
                             style="width: 150px; height: 150px; object-fit: contain;">
                        <h5 class="fw-bold mb-2">{{ $product['title'] }}</h5>
                        <p class="card-text">{{ $product['desc'] }}</p>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
</section>
    <!-- services section end -->
    <!-- testimonial section start -->
 <section class="news_section layout_padding" id="news">
  <div class="container">
    
    <!-- Section Title -->
    <div class="row">
    <div class="d-flex justify-content-center" style="margin-bottom: 10px;">
                            <h1
                                class="services_taital fw-bold mb-5"
                                style="color: black; display: inline-block; border-bottom: 3px solid red; padding-bottom: 10px; max-width: 200px;">News</h1>
                        </div>

    </div>

    <!-- News Cards -->
    <div class="row g-4">
      @foreach($news as $item)
        <div class="col-md-4 d-flex">
          <div class="card shadow-lg flex-fill d-flex flex-column" style="border-radius: 16px; min-height: 420px;">
            
            @if(!empty($item['urlToImage']))
              <img src="{{ $item['urlToImage'] }}" 
                   class="card-img-top" 
                   alt="News Image" 
                   style="height:180px; object-fit:cover; border-top-left-radius:16px; border-top-right-radius:16px;">
            @endif

            <div class="card-body d-flex flex-column">
              <h5 class="card-title">{{ $item['title'] ?? 'No Title' }}</h5>
              <p class="text-muted small mb-2">
                {{ $item['source']['name'] ?? 'Unknown Source' }} | 
                {{ !empty($item['publishedAt']) ? \Carbon\Carbon::parse($item['publishedAt'])->translatedFormat('d F Y H:i') : '' }}
              </p>
              <p class="card-text flex-grow-1">
                {{ \Illuminate\Support\Str::limit($item['description'] ?? 'No description available.', 100) }}
              </p>
              <a href="{{ $item['url'] ?? '#' }}" target="_blank" class="btn btn-danger mt-auto">Read more</a>
            </div>
          </div>
        </div>
      @endforeach
    </div>

  </div>




    <!-- testimonial section end -->
    <!-- contact us section start -->

    <section class="contact_section layout_padding" id="contact">
        <div class="container">
            <div class="row" >
                    <div class="col-12">
                        <div class="d-flex justify-content-center" style="margin-bottom: 10px;">
                            <h1
                                class="services_taital fw-bold mb-5"
                                style="color: black; display: inline-block; border-bottom: 3px solid red; padding-bottom: 10px; max-width: 300px;">Contact us</h1>
                        </div>
                        <div>
                            <iframe
                                style="border:0; width: 100%; height: 270px;"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.302412256583!2d106.80649432499035!3d-6.223797993764259!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f151bcf7200f%3A0x6ee40b271a82586a!2sBursa%20Efek%20Indonesia!5e0!3m2!1sid!2sid!4v1719589150319!5m2!1sid!2sid"
                                frameborder="0"
                                allowfullscreen=""></iframe>
                        </div>
                        <div class="container my-5">
<div class="row">
    <!-- Contact Info -->
    <div class="col-lg-4 mb-4">

        <!-- Office & Workshop -->
        <div class="d-flex mb-3">
            <div class="icon-box d-flex align-items-center justify-content-center bg-danger rounded-3" style="width:48px; height:48px;">
                <i class="bi bi-geo-alt-fill text-white fs-4"></i>
            </div>
            <div class="ms-3">
                <h5 class="fw-bold mb-1 fs-5">Office:</h5>
                <h6 class="mb-3 small fs-6 text-body-secondary" >
                    Indonesia Stock Exchange Tower 1 <br>
                    Level 3, Unit 304,<br>
                    Jl. Jendral Sudirman Kav 52-53
</h6>
                <h5 class="fw-bold mb-1 fs-5">Workshop:</h5>
                <h6 class="mb-0 small fs-6 text-body-secondary">Jl. Klp. Hijau No.99A, Jagakarsa</h6>
            </div>
        </div>

        <!-- Email -->
        <div class="d-flex mb-4">
            <div class="icon-box d-flex align-items-center justify-content-center bg-danger rounded-3" style="width:48px; height:48px;">
                <i class="bi bi-envelope-fill text-white fs-4"></i>
            </div>
            <div class="ms-3">
                <h5 class="fw-bold mb-1 fs-5">Email:</h5>
                <h6 class="mb-0 small fs-6 text-body-secondary">
                    saleshw@mttech.co.id <br>
                    info@mttech.co.id
</h6>
            </div>
        </div>

        <!-- Call -->
        <div class="d-flex">
            <div class="icon-box d-flex align-items-center justify-content-center bg-danger rounded-3" style="width:48px; height:48px;">
                <i class="bi bi-telephone-fill text-white fs-4"></i>
            </div>
            <div class="ms-3">
                <h5 class="fw-bold mb-1 fs-5">Call:</h5>
                <h6 class="mb-0 small fs-6 text-body-secondary">+6221 5589 55488</h6>
            </div>
        </div>
    </div>

    <!-- Contact Form -->
    <div class="col-lg-8">
        <form>
            <div class="row mb-3">
                <div class="col-md-6 mb-3 mb-md-0">
                    <input type="text" class="form-control bg-light" placeholder="Your Name" required>
                </div>
                <div class="col-md-6">
                    <input type="email" class="form-control bg-light" placeholder="Your Email" required>
                </div>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control bg-light" placeholder="Subject" required>
            </div>
            <div class="mb-3">
                <textarea class="form-control bg-light" rows="5" placeholder="Message" required></textarea>
            </div>
            <button type="submit" class="btn btn-danger px-4">Send Message</button>
        </form>
    </div>
</div>
                    </div>
            </div>
        </div>
    </section>
</div>
</div>
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
AOS.init({
    duration: 1000, // durasi animasi
    once: true // animasi hanya jalan sekali
});

// ambil semua nav-link
document.addEventListener("DOMContentLoaded", function () {
    const sections = document.querySelectorAll("section"); // semua section
    const navLinks = document.querySelectorAll(".navbar-nav .nav-link");

    window.addEventListener("scroll", () => {
      let current = "";

      sections.forEach(section => {
        const sectionTop = section.offsetTop - 80; // tinggi offset navbar
        const sectionHeight = section.clientHeight;

        if (pageYOffset >= sectionTop && pageYOffset < sectionTop + sectionHeight) {
          current = section.getAttribute("id"); // ambil id section aktif
        }
      });

      navLinks.forEach(link => {
        link.classList.remove("active");
        if (link.getAttribute("href") === "#" + current) {
          link.classList.add("active");
        }
      });
    });
});
</script>

</body>
<!-- newslatter section end -->
<!-- footer section start -->
<!-- footer section end -->
<!-- copyright section start -->
@include('footer')
<!-- copyright section end -->
<!-- Javascript files-->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/jquery-3.0.0.min.js')}}"></script>
<script src="{{asset('assets/js/plugin.js')}}"></script>
<!-- sidebar -->
<script src="{{asset('assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
</html>

