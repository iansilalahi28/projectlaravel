<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"> 
    <title> Admin KSI </title>
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
            <div class="col-1"><a href="{{ route('input.inputberita') }}" style="text-decoration: none">
                    <p class="text-start text-black fw-semibold"> Input Berita </p>
                </a></div>
          </li>
          <li class="nav-item">
            <div class="col"></div>
            <div class="col-1"><a href="{{ route('input.inputdosen') }}" style="text-decoration: none">
                    <p class="text-start text-black fw-semibold"> Input Dosen </p>
                </a></div>
          </li>
          <div class="col"></div>
            <div class="col-1"><a href="{{ route('logout') }}" style="text-decoration: none">
                    <p class="text-start text-black fw-semibold"> Logout </p>
                </a></div>
        <form class="d-flex mt-3" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
</nav>
    <div class="container" style="margin-top: 70px">
       <div class="row">
            <div class="col-12 text-right">
                <h4 class="text-secondary">  Selamat Datang {{Auth::user()->name}} !</h4>
                 <h6 class="mt-3">
            </div> 
        </div>
  </div>
<div class="row mt-3">
          <nav class="navbar navbar-expand-lg">
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <h5>
               <a class="nav-link active" aria-current="page" href="{{ route('admin.home') }}"> Home </a>
                  </h5>
                </li>
                 <li class="nav-item" style="margin-left: 30px">
                   <h5>
                     <a class="nav-link" aria current="page" href="{{ route('admin.buku') }}"> Buku </a>
                   </h5>
                </li>
                <li class="nav-item" style="margin-left: 30px">
                  <h5>
                     <a class="nav-link" aria current="page" href="{{ route('admin.peminjaman') }}"> Peminjaman </a>
                    </h5>
                </li>
              </ul>
            </div>
          </nav>
        </div>

          <div class="container mt-3">
              @if (Session::get('success'))
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong> Berhasil </strong> {{ Session::get('success')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close></button>
                  </div>
                @endif

                @if (Session::get('failed'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      <strong> Gagal! </strong> {{ Session::get('success') }}
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close></button>
                  </div>
                @endif
            </div>

            <div class="row mt-4">
                <div class="col></div>
                <div class="col-6">
                    <form actiom="{{ route('admin.home') }}" method="GET">
                    @csrf
                    <div class="input-group">
                    <input type="search" name="search" class="form-control rounded" placeholder="Cari nama admin" aria-label="search" aria-describedby="search-addon" />
                <button type="submit" class="btn btn-outline-primary"> Search </button>
                </div>
              </form>
            </div>
            <div class="col"></div>
          </div>
          <div class="row mt-5">
              <div class="col"></div>
              <div class="col"></div>
              <div class="col-2"></div>
                  <a class="btn btn-success" href="{{ route('admin.tambah') }}" style="text-decoration: none; margin-left: 30px"> Tambah Data+ </a>
              </div>
            </div>
            <table class="table" style="margin-top: 80px">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Email</th>
                  <th scope="col">Gender</th>
                  <th scope="col">Jabatan</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
            <tbody class="table-group-divider">
              @foreach ($data as $index => $userAdmin)
                <tr>
                    <td> {{ $index + $data->firstItem() }}</td>
                    <td scope="row"> {{ $userAdmin->name }}</td>
                    <td> {{ $userAdmin->email }}</td>
                    <td> {{ $userAdmin->jenis_kelamin }}</td>
                    <td> {{ $userAdmin->level }}</td>
                    <td>
                        <a class="btn btn-outline-warning" href="/editAdmin/{{ $userAdmin->id }}">Edit</a>
                        <a class="btn btn-outline-danger" href="/deleteAdmin/{{ $userAdmin->id }}">Delete</a>
                    </td>
                </tr>
              @endforeach
            </tbody>
            </table><br>
            {{ $data->links() }}
          </div><br><br>
</div>
</div>
</div>       
</div>

    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>