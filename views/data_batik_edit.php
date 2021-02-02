<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tb_databatik WHERE id='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Update Data Batik</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">

                        <div class="form-group">
                            <label for="jenis_batik" class="col-sm-3 control-label">Jenis Batik</label>
                             <div class="col-sm-9">
								<input type="text" name="jenis_batik" value="<?=$data['jenis_batik']?>"class="form-control" id="inputEmail3" placeholder="Jenis Batik">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="jenis_bahan" class="col-sm-3 control-label">Jenis Bahan</label>
                            <div class="col-sm-9">
                                <input type="text" name="jenis_bahan" value="<?=$data['jenis_bahan']?>"class="form-control" id="inputEmail3" placeholder="jenis_bahan">
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="kategori_produk" class="col-sm-3 control-label">Kategori Produk</label>
                            <div class="col-sm-9">
                                <input type="text" name="kategori_produk" value="<?=$data['kategori_produk']?>" class="form-control" id="inputPassword3" placeholder="Kategori Produk">
                            </div>
                         </div>

                        <div class="form-group">
                            <label for="jumlah_persediaan" class="col-sm-3 control-label">Jumlah Persediaan</label>
                            <div class="col-sm-9">
                                <input type="text" name="jumlah_persediaan" value="<?=$data['jumlah_persediaan']?>"class="form-control" id="inputEmail3" placeholder="jumlah_persediaan">
                            </div>

                         </div>
                        <div class="form-group">
                            <label for="supplier" class="col-sm-3 control-label">Supplier</label>
                            <div class="col-sm-9">
                                <input type="text" name="supplier" value="<?=$data['supplier']?>"class="form-control" id="inputEmail3" placeholder="supplier">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Batik</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=data_batik&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Batik
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
    $jenis_batik = $_POST['jenis_batik'];
	$jenis_bahan = $_POST['jenis_bahan'];
	$kategori_produk = $_POST['kategori_produk'];
	$jumlah_persediaan = $_POST['jumlah_persediaan'];
    $supplier = $_POST['supplier'];
    //buat sql
    $sql="UPDATE tb_databatik SET jenis_batik = '$jenis_batik', jenis_bahan='$jenis_bahan', kategori_produk='$kategori_produk', jumlah_persediaan='$jumlah_persediaan', supplier='$supplier',
	supplier='$supplier' WHERE id='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=data_batik&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



