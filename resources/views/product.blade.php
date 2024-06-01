<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kitto Pempek</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- style -->
    <link rel="stylesheet" href="{{ asset('css/style_user.css') }}">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
</head>
<body>

    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container-fluid">
            <a href="{{ route('index') }}"><img src="../images/Logo.png" width="159px" height="66px" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" aria-current="page" href="#">Home</a>
                    <a class="nav-link" href="#">Tentang</a>
                    <a class="nav-link" href="#">Menu</a>
                    <a class="nav-link last-navlink" href="#">Kontak</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mx-auto">
        <div class="row justify-content-center text-center">
            @foreach ($menus as $item )
            <div class="col-md-4">
                <div class="card  custom-shadow  mx-auto" style="width: 18rem;">
                    <img src="{{ asset($item->gambar) }}" class="card-img-top" alt="...">
                    <div class="card-body custom-card-menu">
                        <h5 class="card-title">{{$item -> nama_produk}}</h5>
                        <p class="card-text">{{$item -> deskripsi_produk}}</p>
                        <h3>RP {{$item -> harga}}/porsi</h3>
                        @if ($item-> stok == 0)
                        <a href="" class="container buton-menu btn btn-danger">Stock Habis</a>
                        @else
                        <a href="https://wa.me/+6281389372857" target="_blank" class="container buton-menu btn btn-success">Beli Sekarang</a>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>



 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>
</html>