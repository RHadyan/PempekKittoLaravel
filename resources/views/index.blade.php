<!doctype html>
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
    <!-- nav -->
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container-fluid">
            <a href=#"><img src="images/Logo.png" width="149px" height="56px" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" aria-current="page" href="#">Home</a>
                    <a class="nav-link" href="#tentang">Tentang</a>
                    <a class="nav-link" href="#kategori">Kategori</a>
                    <a class="nav-link last-navlink" href="#kontak">Kontak</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- nav -->

    <!-- jumbotren -->

    <div class="jumbotron d-flex flex-column justify-content-center">
        <h1 class="text-white kitto">KITTO</h1>
        <h2 class="text-white pempek">Pempek.</h2>
    </div>
    <!-- jumbotron -->


    <!-- tentang -->

    <div class="tentang" id="tentang" style="font-size:20px;">
        <div class="row row-tentang ">
            <div class="col-md-4 col-tentang">
                <img class="" src="images/tentang.png" width="118px" height="120px" alt="">
                <div class="text-white">
                    <h2 class="text-white text-tentang mt-3">Tentang</h2>
                    <p class="text-white text-tentang-deskirpsi mt-3">Usaha ini didirikan pada tahun 2011, oleh bu Arinih. Awalnya bu Arinih terima pesanan dari permintaan orang terdekat saja, namun seiring berjalannya waktu bu Arinih mulai membuka warung pempek sederhana di rumah sendiri pada tahun 2016. Hingga saat ini masih bertahan dengan banyaknya pedagang pempek baru.</p>
                    <p>Dengan Tujuan</p>
                    <ul class="text-white">
                        <li>Menyediakan pempek dan makanan khas palembang yang lezat dengan bahan-bahan berkualitas dan resep tradisional.</li>
                        <li>Memberikan pelayanan yang ramah dan memuaskan kepada setiap pelanggan.</li>
                        <li>Berinovasi dalam menyajikan berbagai varian pempek yang sesuai dengan selera pelanggan masa kini.</li>
                    </ul>
                </div>
            </div>

            <div class="col col-tentang">
                <img class="jembatan" src="images/tentang_jembatan.png" alt="">

            </div>
        </div>
    </div>

    <!-- tentang -->


    <!-- card kelebihan -->
    <div  class="container-fluid menus">
        <div class="row text-center">
            <div class="col-md-4">
                <img src="images/Higienis.png" width="95px" height="100px" alt="">
                <h4 class="menus-margin">Higienis</h4>
                <div class="d-flex justify-content-center">
                    <p class="col-md-7 text-center menus-margin">Kami menerapkan standar kebersihan yang ketat dalam setiap tahap produksi. Dari pemilihan bahan hingga penyajian, kebersihan dan higienitas adalah hal yang tidak bisa ditawar.</p>
                </div>
            </div>
            <div class="col-md-4 border-customer-menus">
                <img src="images/Customer.png" width="95px" height="100px" alt="">
                <h4 class=" menus-margin">Pelayanan Baik</h4>
                <div class="d-flex justify-content-center">
                    <p class="col-md-7 text-center menus-margin">Kami percaya bahwa pelayanan yang baik adalah kunci dari kepuasan pelanggan, Oleh karena itu kami memberikan pelayanan yang ramah, cepat, dan profesional.</p>
                </div>
            </div>
            <div class="col-md-4">
                <img src="images/menu.png" width="95px" height="100px" alt="">
                <h4 class="menus-margin">Keberagaman Menu</h4>
                <div class="d-flex justify-content-center">
                    <p class=" menus-margin col-md-7 text-center">Kami menawarkan berbagai jenis pempek yang dirancang untuk memenuhi berbagai selera dan preferensi pelanggan. Mulai dari pempek kapal selam, pempek lenjer, pempek adaan, hingga pempek kulit, semua tersedia dengan cita rasa khas Palembang.</p>
                </div>
            </div>
        </div>

        <div  id="kategori" class="text-center menu-text">
            <h2>Kategori</h2>
            <hr>
        </div>


        <div class="container mx-auto">
            <div class="row justify-content-center text-center">

                <div class="col-md-4">
                    <div class="card  custom-shadow mx-auto" style="width: 25rem;">
                        <img src="images/Pempek1.png" height="300px" class="card-img-top" alt="...">
                        <div class="card-body custom-card-menu">
                            <h5 style="font-size: 20" class="card-title">Pempek</h5>
                            <p class="card-text fw-normal">Pempek asli dari ikan tenggiri, dibuat dengan bahan-bahan segar dan berkualitas. Nikmati kelezatan rasa tradisional Palembang.</p>
                            <h3>RP {{ number_format($pempek->harga, 0, ',', '.') }}/porsi</h3>
                            <a href="{{ route('product',['kategori'=>'Pempek']) }}" class="container buton-menu btn btn-warning">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card  custom-shadow  mx-auto" style="width: 25rem;">
                        <img src="images/tekwanFoto.jpeg" height="300px" class="card-img-top" alt="...">
                        <div class="card-body custom-card-menu">
                            <h5 class="card-title">Tekwan</h5>
                            <p class="card-text">Tekwan lezat dengan kuah kaldu udang yang gurih, disajikan dengan soun dan irisan bengkoang. Sempurna untuk dinikmati kapan saja.</p>
                            <h3>RP {{ number_format($tekwan->harga, 0, ',', '.') }}/porsi</h3>
                            <a href="{{ route('product',['kategori'=>'Tekwan']) }}" class="container buton-menu btn btn-warning">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card custom-shadow  mx-auto" style="width: 25rem;">
                        <img src="images/miecelor.jpeg" height="300px" class="card-img-top" alt="...">
                        <div class="card-body custom-card-menu">
                            <h5 class="card-title">Mie Celor</h5>
                            <p class="card-text">Mie celor khas Palembang dengan kuah santan kental dan udang segar, disajikan dengan taburan daun seledri dan bawang goreng.</p>
                            <h3>RP {{ number_format($mie->harga, 0, ',', '.') }}/porsi</h3>
                            <a href="{{ route('product',['kategori'=>'Mie']) }}" class="container buton-menu btn btn-warning">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
    <!-- card kelebihan -->







    <!-- kontak -->

    <div id="kontak" class="kontak">

        <div class="text-center text-kontak text-white">
            <h1>Kontak</h1>
        </div>

        <div class="container mx-auto">
            <div class="row justify-content-center">

                <div class="col-md-4">
                    <div class="card mt-4 custom-card card-kontak text-center mb-3 ">
                        <div class="card-body">
                            <img src="images/email.png" width="92px" height="77px" alt="">
                            <h5 class="card-title mt-3">Email</h5>
                            <p class="card-text">Email@example.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mt-4 custom-card card-kontak text-center mb-3 ">
                        <div class="card-body">
                            <img src="images/telepon.png" width="92px" height="77px" alt="">
                            <h5 class="card-title mt-3">Email</h5>
                            <p class="card-text">Email@example.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mt-4 custom-card card-kontak text-center mb-3 ">
                        <div class="card-body">
                            <img src="images/instagram.png" width="77px" height="77px" alt="">
                            <h5 class="card-title mt-3">Email</h5>
                            <p class="card-text">Email@example.com</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>




    <!-- footer -->

    <!-- Remove the container if you want to extend the Footer to full width. -->
    <div class="footer">

        <footer class="bg-black text-center text-lg-start text-white">
            <!-- Grid container -->
            <div class="container">
                <!--Grid row-->
                <div class="row my-4">
                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">


                        <img src="images/Logo_putih.png" height="70" alt="" loading="lazy" />

                        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quis vel
                            iusto natus culpa quas voluptas mollitia necessitatibus nulla, voluptatibus alias quasi
                            quidem perferendis aut provident similique praesentium consequatur tenetur.
                        </p>

                    </div>
                    <!--Grid column-->


                    <!--Grid column-->
                    <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase mb-4">Konten</h5>

                        <ul class="list-unstyled">
                            <li class="mb-2">
                                <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Home</a>
                            </li>
                            <li class="mb-2">
                                <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Tentang</a>
                            </li>
                            <li class="mb-2">
                                <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Menu</a>
                            </li>
                            <li class="mb-2">
                                <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Kontak</a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase mb-4">Contact</h5>

                        <ul class="list-unstyled">
                            <li>
                                <p><i class="fas fa-map-marker-alt pe-2"></i>Email</p>
                            </li>
                            <li>
                                <p><i class="fas fa-phone pe-2"></i>Telepon</p>
                            </li>
                            <li>
                                <p><i class="fas fa-envelope pe-2 mb-0"></i>Instagram</p>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </div>
            <!-- Grid container -->


        </footer>

    </div>









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>