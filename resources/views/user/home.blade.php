<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title> KSI </title>
</head>

<body>
    <nav class="navbar bg-primary fixed-top " >
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Politeknik Negeri Bengkalis | KSI</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Politeknik Negeri Bengkalis | KSI</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <div class="col"></div>
            <div class="col-1"><a href="{{ route('low.beritaksi') }}" style="text-decoration: none">
                    <p class="text-start text-black fw-semibold"> BeritaKSI </p>
                </a></div>
          </li>
          <li class="nav-item">
            <div class="col"></div>
            <div class="col-1"><a href="{{ route('low.dosen') }}" style="text-decoration: none">
                    <p class="text-start text-black fw-semibold"> DosenKSI </p>
                </a></div>
          </li>
          <div class="col"></div>
            <div class="col-1"><a href="{{ route('logout') }}" style="text-decoration: none">
                    <p class="text-start text-black fw-semibold"> Logout </p>
                </a></div>
      </nav>
        <div class="container">
        <div class="row mt-3">
            <div class="col">       
                <h4 class="text text-secondary" >  Selamat Datang {{Auth::user()->name}} </h4>                     
            </div>
        </div>
    </div>
      </div>
    </div>
  </div>


</div>
    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>