@include('template.navbar-header')
<nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
    <div class="container-fluid">
      <h1 class=" mb-0 text-black text-uppercase d-none d-lg-inline-block">Mie</h1>
    </div>
  </nav>
        <!-- End Navbar -->
        <!-- Header -->
        <div class="header pb-8 pt-5 pt-md-8">
            <div class="container-fluid">
                <div class="header-body">

                    <a href="" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah Menu</a>
                    <!-- Card stats -->
                    <div class="row d-flex justify-content-center ">
                        <!-- taro card disini -->
                        @foreach ($mie as $item)
                        <div class="card menu mt-3 custom-margin-card" style="width: 18rem;">
                            <img src="{{ asset($item->gambar) }}" class="card-img-top" alt="...">
                            <div class="card-body card-menu">
                                <div class="card-body custom-card-menu">
                                    @if ($item-> stok == 0)
                                    <div class="d-inline" style="margin-left: 200px; margin-bottom: 200px;">
                                        <svg  xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                                            <circle cx="8.5" cy="8.5" r="8.5" fill="#FA0C0C"/>
                                        </svg>
                                    </div>
                                        
                                    @else
                                    <div class="d-inline" style="margin-left: 200px;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                                            <circle cx="8.5" cy="8.5" r="8.5" fill="#00B012"/>
                                            </svg>
                                    </div>
                                    @endif
                                    <h2 class="card-title mb-0 text-center ">{{$item -> nama_produk}}</h2> 
                                    
                                    <p class="card-text text-center">{{$item -> deskripsi_produk}}</p>
                                    <h3 class="text-center">{{$item -> harga}}</h3>
                                    
                                    
                                    <div class="d-flex justify-content-center">
                                        
                                        <a href=""  class="buton-edit btn btn-warning" data-toggle="modal" data-target="#exampleModalEdit{{ $item->kode_produk }}">Edit</a>
                                        <form method="POST" action="{{route('admin.deletepempek', ['menu' => $item -> kode_produk])}}" id="delete">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" onclick="alert('Apakah Kamu yakin')" value="Delete" class="buton-edit btn btn-danger"/>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

{{-- MODAL edit --}}
<div class="modal fade" id="exampleModalEdit{{ $item->kode_produk }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
            <form method="POST" action="{{ route('admin.update',$item->kode_produk) }}" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Nama Pempek : </label>
                    <input type="text" name="nama_produk" value="{{$item -> nama_produk}}" class="form-control">

                </div>
                <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Deskripsi : </label>
                    <textarea type="text" name="deskripsi_produk" value="" class="form-control"> {{$item -> deskripsi_produk}} </textarea>

                </div>
                <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Harga : </label>
                    <input type="text" value="{{$item -> harga}}" name="harga" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Kategori : </label>
                    <select  class="form-control" name="kode_kategori" id="">
                        <option {{ $item->kode_kategori == 'Pempek'?'selected':''}} class="option" value="Pempek">Pempek</option>
                        <option {{ $item->kode_kategori == 'Tekwan'?'selected':''}} class="option" value="Tekwan">Tekwan</option>
                        <option {{ $item->kode_kategori == 'Mie'?'selected':''}} class="option" value="Mie">Mie</option>

                    </select>
                </div>
                <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Stock : </label>
                    <select class="form-control" name="stok" id="">
                        <option {{ $item->stok == "0"?'selected':'' }} class="option" value="0">Habis</option>
                        <option {{ $item->stok == "1"?'selected':'' }} class="option" value="1">Ada Stock</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="message-text" class="col-form-label">Gambar : </label>
                    <img src="{{ asset($item->gambar) }}" width="120px" alt="">
                    <input type="file" name="gambar" class="form-control mt-2">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
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
                                    <option class="option" selected value="Mie">Mie</option>

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
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>







        <!--   Core   -->


        @include('template.footer')
</body>

</html>