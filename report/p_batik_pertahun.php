<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Penjualan Batik Pertahun</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail penjualan batik-->
        <?php
        include '../config/koneksi.php';
        $ambilthn=$_POST['tahun'];

        ?>

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                       <h2>Sistem Informasi Penjualan Batik Toko XYZ </h2>
                        <h4>Jalan Hessa Air Genting Dusun V Silaut-laut, Hessa Air Genting <br> Kecamatan Air Batu, Kabupaten Asahan, Sumatera Utara, 21272</h4>
                        <hr>
                        <h3>DATA PENJUALAN BATIK TAHUN   <? echo "$ambilthn"; ?></h3>
                        <table class="table table-bordered table-striped table-hover">
                        <tbody>
                <thead>
								<tr>
									<th>No.</th><th width="18%">Konsumen</th><th>Jumlah Batik Terjual</th><th width="14%"><center>Motif Batik</center></th><th width="15%"><center>Harga</center></th><th width="10%">Tota Pembayaran</th><th></center></th>
                                </tr>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tb_penjualanbatik WHERE substr(harga)='$ambilthn'";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    <td><?= $nomor ?></td>
                                    <td><?= $data['konsumen'] ?></td>
                                    <td><?= $data['jumlah_batik_terjual'] ?></td>
                                    <td><?= $data['motif_batik'] ?></td>
                                    <td><?= $data['harga'] ?></td>
                                    <td><?= $data['total_pembayaran'] ?></td>                        </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>

                            <tfoot>
                              <tr>
                                <td colspan="8" class="text-right">
                                        Kisaran,02-02-2021  &nbsp <?= date("d-m-Y") ?>
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
