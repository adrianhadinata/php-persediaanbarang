<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Barang</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="controller/barang_controller.php" method="post" enctype="multipart/form-data">

                        <input type="hidden" value="insert" name="action">

                        <div class="form-group">
                            <label for="nama_barang" class="col-sm-3 control-label">Nama Barang</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_barang" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Barang" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="kode" class="col-sm-3 control-label">Kode</label>
                            <div class="col-sm-9">
                                <input type="text" name="kode" class="form-control" id="inputEmail3" placeholder="Inputkan Kode Barang" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="jenis" class="col-sm-3 control-label">Jenis</label>
                            <div class="col-sm-9">
                                <input type="text" name="jenis" class="form-control" id="inputEmail3" placeholder="Inputkan Jenis Barang" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="satuan" class="col-sm-3 control-label">Satuan</label>
                            <div class="col-sm-3">
                                <input type="text" name="satuan" class="form-control" id="inputEmail3" placeholder="Inputkan Satuan Barang" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="stok" class="col-sm-3 control-label">Stok Barang</label>
                            <div class="col-sm-3">
                                <input type="text" name="stok" class="form-control" id="inputEmail3" placeholder="Inputkan Stok Barang" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="stok" class="col-sm-3 control-label">Foto Barang</label>
                            <div class="col-sm-3">
                                <input type="file" name="fileToUpload" id="fileToUpload">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data Barang
                                </button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=barang&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Barang
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>