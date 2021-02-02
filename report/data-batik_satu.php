<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Batik</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail data batik-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM tb_databatik WHERE id='" . $_GET ['id'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                         <h2>Sistem Informasi Penjualan Batik Toko XYZ </h2>
                         <h4>Jalan Hessa Air Genting Dusun V Silaut-laut, Hessa Air Genting <br> Kecamatan Air Batu, Kabupaten Asahan, Sumatera Utara, 21272</h4>
                        <hr>
                        <h3>DATA Batik</h3>
                        <table class="table table-bordered table-striped table-hover">
                            <tbody>
								<tr>
                                    <td>Jenis Batik</td> <td><?= $data['jenis_batik'] ?></td>
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
                                    <td>Supplier</td> <td><?= $data['supplier'] ?> hari</td>
                                </tr>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2" class="text-right">
                                        Kisaran 02-02-2021 <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Indah Wullandari<strong></u><br>
                                        Pemilik Toko
									</td>
								</tr>
							</tfoot>
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>
