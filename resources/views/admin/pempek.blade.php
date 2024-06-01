@include('template.navbar-header')
        <!-- End Navbar -->
        <!-- Header -->
        <div class="header pb-8 pt-5 pt-md-8">
            <div class="container-fluid">
                <div class="header-body">

                    <a href="" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah Menu</a>
                    <!-- Card stats -->
                    <div class="row d-flex justify-content-center ">
                        <!-- taro card disini -->
                        <div class="card menu mt-3 custom-margin-card" style="width: 18rem;">
                            <img src="{{ asset('/images/Pempek1.png') }}" class="card-img-top" alt="...">
                            <div class="card-body card-menu">
                                <div class="card-body custom-card-menu">
                                    <h2 class="card-title mb-0 text-center ">Nama Pempek</h2>
                                    <p class="card-text text-center">Lorem ipsum dolor sit amet consectetur adipisicing
                                        elit. Eos?</p>
                                    <h3 class="text-center">RP 0.000/porsi</h3>

                                    <div class="d-flex justify-content-center">

                                        <a href="#" class="buton-edit btn btn-warning">Edit</a>
                                        <a href="#" class="buton-delete btn btn-danger">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel">Tambah Menu</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
                    <div class="modal-body">
                        <form action="">

                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Nama Pempek : </label>
                                <input type="text" class="form-control">

                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Deskripsi : </label>
                                <textarea type="text" class="form-control"> </textarea>

                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Harga : </label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Kategori : </label>
                                <select class="form-control" name="" id="">
                                    <option class="option" value="">Pempek</option>
                                    <option class="option" value="">Tekwan</option>
                                    <option class="option" value="">Mie</option>

                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Stock : </label>
                                <select class="form-control" name="" id="">
                                    <option class="option" value="">Habis</option>
                                    <option class="option" value="">Ada Stock</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="message-text" class="col-form-label">Gambar : </label>
                                <input type="file" class="form-control">
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>








        <!--   Core   -->


        @include('template.footer')
</body>

</html>