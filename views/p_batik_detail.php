<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Penjualan Batik</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail penjualan batik-->
                    <?php
                    $sql = "SELECT *FROM tb_penjualanbatik WHERE id ='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">Konsumen</td> <td><?= $data['konsumen'] ?></td>
                        </tr>
                        <tr>
                            <td>Jumlah Batik Terjual</td> <td><?= $data['jumlah_batik_terjual'] ?></td>
                        </tr>
                        <tr>
                            <td>Jenis Motif</td> <td><?= $data['motif_batik'] ?></td>
                        </tr>
						<tr>
                            <td>Harga</td> <td><?= $data['harga'] ?></td>
                        </tr>
                        <tr>
                            <td>Total Pembayaran</td> <td><?= $data['total_pembayaran'] ?></td>
                        </tr>
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=p_batik&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Penjualan Batik </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

