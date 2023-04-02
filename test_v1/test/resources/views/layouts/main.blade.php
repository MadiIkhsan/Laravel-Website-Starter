<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- <link rel="stylesheet" href="css/style.css"> -->
        <link
            rel="stylesheet"
            href="bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css"
        />
        <title>CRUD | {{ $title }}</title>
    </head>
    <body>
        
        @include('partials.judul')

        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <nav class="nav">
                    <a class="btn btn-outline-success m-2 {{ ($title === "home") ? 'active' : '' }}" href="/">Home</a>
                    <a class="btn btn-outline-success m-2 {{ ($title === "create") ? 'active' : '' }}" href="/create">Tambahkan</a>
                    <a class="btn btn-outline-success m-2 {{ ($title === "read") ? 'active' : '' }}" href="/read">Lihat</a>
                </nav>
                <form class="d-flex m-2" role="search">
                    <input
                        class="form-control me-2"
                        type="search"
                        placeholder="Search"
                        aria-label="Search"
                    />
                    <button class="btn btn-outline-success" type="submit">
                        Search
                    </button>
                </form>
            </div>
        </nav>

        
        
        
        
        
        
        <!-- isi program -->
        <div class="container-fluid">
            @yield('container')
        </div>







             
            {{-- <h3>{{ $nama }}</h3>
            <p>{{ $NIM }}</p>
            <p>{{ $kelas }}</p>
            <img src="img/{{ $image }}" alt="{{ $nama }}" width="200"> --}}

        <script src="js/script.js"></script>
        <!-- javascript untuk bootstrap -->
        <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
