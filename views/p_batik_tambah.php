<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Penjualan Batik</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">

						 <div class="form-group">
                            <label for="konsumen" class="col-sm-3 control-label">Konsumen</label>
                            <div class="col-sm-9">
                                <input type="text" name="konsumen" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Konsumen" required>
                            </div>
                        </div>

						 <div class="form-group">
                            <label for="jumlah_batik_terjual" class="col-sm-3 control-label">Jumlah Batik Terjual</label>
                            <div class="col-sm-9">
                                <input type="text" name="jumlah_batik_terjual" class="form-control" id="inputEmail3" placeholder="Inputkan Jumlah Batik Yang Terjual" required>
                            </div>
                        </div>

						 <div class="form-group">
                            <label for="motif_batik" class="col-sm-3 control-label">Motif Batik</label>
                            <div class="col-sm-9">
                                <input type="text" name="motif_batikf" class="form-control" id="inputEmail3" placeholder="Inputkan Motif Batik Yang Terjual " required>
                            </div>
                        </div>

						 <div class="form-group">
                            <label for="harga" class="col-sm-3 control-label">Harga</label>
                            <div class="col-sm-9">
                                <input type="text" name="harga" class="form-control" id="inputEmail3" placeholder="Inputkan Harga Batik Yang Terjual" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="total_pembayaran" class="col-sm-3 control-label">Total Pembayaran</label>
                            <div class="col-sm-9">
                                <input type="text" name="total_pembayaran"class="form-control" id="inputEmail3" placeholder="Inputkan Jumlah Total Pembayaran" required>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=p_batik&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Penjualan Batik
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
    $konsumen = $_POST['konsumen'];
	$jumlah_batik_terjual = $_POST['jumlah_batik_terjual'];
	$motif_batik = $_POST['motif_batik'];
	$harga = $_POST['harga'];
    $total_pembayaran = $_POST['total_pembayaran'];
	
    //buat sql
    $sql="INSERT INTO tb_penjualanbatik VALUES ('','$konsumen','$jumlah_batik_terjual','$motif_batik','$harga','$total_pembayaran')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Data Penjualan Batik Error");
    if ($query){
        echo "<script>window.location.assign('?page=p_batik&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
