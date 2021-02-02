<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tb_penjualanbatik WHERE id ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Penjualan Batik</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                       
                           
                        <div class="form-group">
                            <label for="konsumen" class="col-sm-3 control-label">Konsumen</label>
                            <div class="col-sm-9">
                                <input type="text" name="konsumen" value="<?=$data['konsumen']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Konsumen" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="jumlah_batik_terjual" class="col-sm-3 control-label">Jumlah Batik Terjual</label>
                            <div class="col-sm-9">
                                <input type="text" name="jumlah_batik_terjual" value="<?=$data['jumlah_batik_terjual']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Jumlah Batik Yang Terjual" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="motif_batik" class="col-sm-3 control-label">Motif Batik</label>
                            <div class="col-sm-9">
                                <input type="text" name="motif_batik" value="<?=$data['motif_batik']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Motif Batik Yang Terjual " required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="harga" class="col-sm-3 control-label">Harga</label>
                            <div class="col-sm-9">
                                <input type="text" name="harga" value="<?=$data['harga']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Harga Batik Yang Terjual" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="total_pembayaran" class="col-sm-3 control-label">Total Pembayaran</label>
                            <div class="col-sm-9">
                                <input type="text" name="total_pembayaran" value="<?=$data['total_pembayaran']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Total Pembayaran" required>
                            </div>
                        </div>           

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Penjualan Batik</button>
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
    $sql="UPDATE tb_penjualanbatik SET konsumen='$konsumen',jumlah_batik_terjual='$jumlah_batik_terjual',motif_batik='$motif_batik',harga='$harga',total_pembayaran='$total_pembayaran' WHERE id ='$id'";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=p_batik&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



