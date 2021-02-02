<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Data Batik</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail data batik-->
                    <?php
                    $sql = "SELECT *FROM tb_databatik WHERE id='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">Jenis Batik</td> <td><?= $data['jenis_batik'] ?></td>
                        </tr>
                         <tr>
                            <td>Jenis Bahan</td> <td><?= $data['jenis_bahan'] ?></td>
                        </tr>
                        <tr>
                            <td>Kategori Produk</td> <td><?= $data['kategori_produk'] ?></td>
                        </tr>
                        <tr>
                            <td>Jumlah Persediaan</td> <td><?= $data['jumlah_persediaan'] ?></td>
                        </tr>
						<tr>
                            <td>Supplier</td> <td><?= $data['supplier'] ?></td>
                        </tr>
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=data_batik&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Batik </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

