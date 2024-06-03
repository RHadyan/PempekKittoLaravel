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
                    <a class="nav-link" aria-current="page" href="{{ route('index') }}">Home</a>
                    <a class="nav-link" href="{{ route('index') }}">Tentang</a>
                    <a class="nav-link" href="{{ route('index') }}">Kategori</a>
                    <a class="nav-link last-navlink" href="{{ route('index') }}">Kontak</a>
                </div>
            </div>
        </div>
    </nav>
    <div  id="kategori" class="text-center menu-text-product">
        <h2>Menu</h2>
        <hr>
    </div>

    <div class="container mx-auto">
        <div class="row justify-content-center text-center">
            @foreach ($menus as $item )
            <div class="col-md-4">
                <div class="card  custom-shadow  mx-auto" style="width: 18rem;">
                    <img src="{{ asset($item->gambar) }}" class="card-img-top" alt="...">
                    <div class="card-body custom-card-menu">
                        <h5 class="card-title">{{$item -> nama_produk}}</h5>
                        <p class="card-text">{{$item -> deskripsi_produk}}</p>
                        <h3>RP {{ number_format($item-> harga, 0, ',', '.') }}/porsi</h3>
                        @if ($item-> stok == 0)
                        <a href="" class="container buton-menu btn btn-danger">Stock Habis</a>
                        @else
                        <a href="https://wa.me/+6281389372857" target="_blank" class="container d-flex gap-2 justify-content-center buton-menu btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 89 89" fill="none">
                            <path d="M70.6437 18.2075C67.2439 14.7733 63.1944 12.0504 58.7312 10.1977C54.2681 8.34493 49.4807 7.3994 44.6483 7.41624C24.4008 7.41624 7.89872 23.9183 7.89872 44.1658C7.89872 50.6554 9.60455 56.9596 12.7937 62.5221L7.60205 81.5829L27.0708 76.4654C32.4479 79.395 38.4925 80.9525 44.6483 80.9525C64.8958 80.9525 81.3979 64.4504 81.3979 44.2029C81.3979 34.3758 77.5783 25.1421 70.6437 18.2075ZM44.6483 74.7225C39.16 74.7225 33.7829 73.2392 29.0733 70.4579L27.9608 69.7904L16.3908 72.8312L19.4687 61.5579L18.7271 60.4083C15.6779 55.5392 14.0588 49.9109 14.0546 44.1658C14.0546 27.33 27.7754 13.6092 44.6112 13.6092C52.7695 13.6092 60.4458 16.7983 66.1937 22.5833C69.0398 25.4164 71.2953 28.7861 72.8294 32.4973C74.3635 36.2084 75.1458 40.1872 75.1308 44.2029C75.205 61.0387 61.4841 74.7225 44.6483 74.7225ZM61.41 51.8791C60.4829 51.4341 55.9587 49.2092 55.1429 48.8754C54.29 48.5787 53.6966 48.4304 53.0662 49.3204C52.4358 50.2475 50.6929 52.3242 50.1737 52.9175C49.6545 53.5479 49.0983 53.6221 48.1712 53.14C47.2441 52.695 44.2775 51.6937 40.7916 48.5787C38.0475 46.1312 36.2304 43.1275 35.6741 42.2004C35.155 41.2733 35.6 40.7912 36.082 40.3092C36.49 39.9012 37.0091 39.2337 37.4541 38.7146C37.8991 38.1954 38.0846 37.7875 38.3812 37.1941C38.6779 36.5637 38.5295 36.0446 38.307 35.5996C38.0845 35.1546 36.2304 30.6304 35.4887 28.7762C34.747 26.9962 33.9683 27.2187 33.4121 27.1817H31.632C31.0016 27.1817 30.0375 27.4042 29.1845 28.3312C28.3687 29.2583 25.9954 31.4833 25.9954 36.0075C25.9954 40.5317 29.2958 44.9075 29.7408 45.5008C30.1858 46.1312 36.2304 55.4021 45.427 59.37C47.615 60.3342 49.3208 60.8904 50.6558 61.2983C52.8437 62.0029 54.8462 61.8916 56.4408 61.6691C58.2208 61.4096 61.892 59.4441 62.6337 57.2933C63.4125 55.1425 63.4125 53.3254 63.1529 52.9175C62.8933 52.5096 62.337 52.3241 61.41 51.8791Z" fill="#F8F8F8"/>
                          </svg>Beli Sekarang</a>
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