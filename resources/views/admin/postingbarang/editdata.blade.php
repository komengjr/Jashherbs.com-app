<link rel="stylesheet" href="assets/plugins/summernote/dist/summernote-bs4.css" />
<div class="modal-header">
    <h5 class="modal-title">Edit Data</h5>
    <button type="button" class=" btn-danger" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
<body>
    asd
</body>
</div>
    <div class="card-body">
        <form class="row" method="POST" action="{{ url('postinganbarang/posttambah', []) }}" enctype="multipart/form-data">
            @csrf
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Nama Barang</label>
                <input type="text" name="nama_barang" class="form-control" value="{{$data[0]->nama_item}}" autofocus>
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Harga Barang</label>
                <input type="text" name="harga_barang" class="form-control"  autofocus>
            </div>
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Kategori Barang</label>
                <input type="text" name="kategori_barang" class="form-control"  autofocus>
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Gambar Barang</label>
                <input type="file" name="gambar_barang" id="gambar_barang" class="form-control" autofocus>
            </div>
          
            
            <div class="col-md-12">
                <label for="inputZip" class="form-label">Deskripsi</label>
                <textarea name="deskripsi_barang" id="summernoteEditor" cols="30" rows="10"></textarea>
            </div>
            <div class="col-md-12">
                <div class="icheck-material-primary">
                    <input type="checkbox" id="user-checkbox1" checked="" />
                    <label for="user-checkbox1">I Agree Terms & Conditions</label>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary px-5"><i class="fa fa-save"></i> Simpan & Posting</button>
                </div>
            </div>
        </form>
    </div>
    <script src="{{ url('assets/plugins/summernote/dist/summernote-bs4.min.js', []) }}"></script>
    <script>
        $('#summernoteEditor').summernote({
            height: 400,
            tabsize: 2
        });
    </script>