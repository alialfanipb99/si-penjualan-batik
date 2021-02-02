<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Penjualan Batik</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM tb_penjualanbatik WHERE id='" . $_GET ['id'] . "'";
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
                        <h3>DATA PENJUALAN BATIK</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>
								<tr>
                                    <td>Konsumen</td> <td><?= $data['konsumen'] ?></td>
                                </tr>
                                <tr>
                                    <td width="200">Jumlah Batik Terjual</td> <td><?= $data['jumlah_batik_terjual'] ?></td>
                                </tr>
                                <tr>
                                    <td>Motif Batik</td> <td><?= $data['motif_batik'] ?></td>
                                </tr>
								<tr>
                                    <td>Harga</td> <td><?= $data['harga'] ?></td>
                                </tr>
								<tr>
                                    <td>Total Pembayaran</td> <td><?= $data['total_pembayaran'] ?></td>
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