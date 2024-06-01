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
                        @foreach ($pempek as $item)
                        <div class="card menu mt-3 custom-margin-card" style="width: 18rem;">
                            <img src="{{ asset($item->gambar) }}" class="card-img-top" alt="...">
                            <div class="card-body card-menu">
                                <div class="card-body custom-card-menu">
                                    <h2 class="card-title mb-0 text-center ">{{$item -> nama_produk}}</h2>
                                    <p class="card-text text-center">{{$item -> deskripsi_produk}}</p>
                                    <h3 class="text-center">{{$item -> harga}}</h3>
                                    

                                    <div class="d-flex justify-content-center">
                                        
                                        <a href="{{route('admin.editpempek', ['menu' => $item -> kode_produk])}}"  class="buton-edit btn btn-warning" data-toggle="modal" data-target="#exampleModalEdit">Edit</a>
                                        <form method="POST" action="{{route('admin.deletepempek', ['menu' => $item -> kode_produk])}}" id="delete">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" value="Delete" class="buton-edit btn btn-danger"/>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>



{{-- MODAL CREATE --}}
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
                        <form method="POST" action="{{route('admin.savepempek')}}" enctype="multipart/form-data">
                            @csrf
                            @method('post')
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Nama Pempek : </label>
                                <input type="text" name="nama_produk" class="form-control">

                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Deskripsi : </label>
                                <textarea type="text" name="deskripsi_produk" class="form-control"> </textarea>

                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Harga : </label>
                                <input type="text" name="harga" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Kategori : </label>
                                <select class="form-control" name="kode_kategori" id="">
                                    <option class="option" value="Pempek">Pempek</option>
                                    <option class="option" value="Tekwan">Tekwan</option>
                                    <option class="option" value="Mie">Mie</option>

                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Stock : </label>
                                <select class="form-control" name="stok" id="">
                                    <option class="option" value="0">Habis</option>
                                    <option class="option" value="1">Ada Stock</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="message-text" class="col-form-label">Gambar : </label>
                                <input type="file" name="gambar" class="form-control">
                            </div>

                            <div>
                                <button type="submit" class="btn btn-primary">Save Changes </button>
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

{{-- MODAL edit --}}
        <div class="modal fade" id="exampleModalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel">Edit Menu</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="" enctype="multipart/form-data">
                            @csrf
                            @method('post')
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Nama Pempek : </label>
                                <input type="text" name="nama_produk" class="form-control">

                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Deskripsi : </label>
                                <textarea type="text" name="deskripsi_produk" class="form-control"> </textarea>

                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Harga : </label>
                                <input type="text" name="harga" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Kategori : </label>
                                <select class="form-control" name="kode_kategori" id="">
                                    <option class="option" value="Pempek">Pempek</option>
                                    <option class="option" value="Tekwan">Tekwan</option>
                                    <option class="option" value="Mie">Mie</option>

                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Stock : </label>
                                <select class="form-control" name="stok" id="">
                                    <option class="option" value="0">Habis</option>
                                    <option class="option" value="1">Ada Stock</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="message-text" class="col-form-label">Gambar : </label>
                                <input type="file" name="gambar" class="form-control">
                            </div>

                            <div>
                                <button type="submit" class="btn btn-primary">Save Changes </button>
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