<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Batik Perbulan</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail data batikp-->
        <?php
        include '../config/koneksi.php';
        $ambilbln=$_POST['bulan'];
        $ambilthn=$_POST['tahun'];
        $bulanNama;
        if ($ambilbln==12) {
          $bulanNama="DESEMBER";
        } elseif ($ambilbln==11) {
          $bulanNama="NOVEMBER";
        } elseif ($ambilbln==10) {
          $bulanNama="OKTOBER";
        } elseif ($ambilbln==9) {
          $bulanNama="SEPTEMBER";
        } elseif ($ambilbln==8) {
          $bulanNama="AGUSTUS";
        } elseif ($ambilbln==7) {
          $bulanNama="JULI";
        } elseif ($ambilbln==6) {
          $bulanNama="JUNI";
        } elseif ($ambilbln==5) {
          $bulanNama="MEI";
        } elseif ($ambilbln==4) {
          $bulanNama="APRIL";
        } elseif ($ambilbln==3) {
          $bulanNama="MARET";
        } elseif ($ambilbln==2) {
          $bulanNama="FEBRUARI";
        } elseif ($ambilbln==1) {
          $bulanNama="JANUARI";
        }

        ?>

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                         <h2>Sistem Informasi Penjualan Batik Toko XYZ </h2>
                         <h4>Jalan Hessa Air Genting Dusun V Silaut-laut, Hessa Air Genting <br> Kecamatan Air Batu, Kabupaten Asahan, Sumatera Utara, 21272</h4>
                         <hr>
                        <h3>DATA BATIK BULAN   <? echo "$bulanNama $ambilthn"; ?></h3>
                        <table class="table table-bordered table-striped table-hover">
                        <tbody>
                <thead>
								<tr>
									<th>No.</th><th>Jenis Batik</th><th>Jenis Bahan</th><th>Kategori Produk </th><th>Jumlah Persediaan</th><th>Supplier</th>
								</tr>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tb_databatik WHERE substr(jumlah_persediaan)='$ambilthn-$ambilbln'";
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
								    <td><?= $data['jenis_batik'] ?></td>
                                    <td><?= $data['jenis_bahan'] ?></td>
                                    <td><?= $data['kategori_produk'] ?></td>
                                    <td><?= $data['jumlah_persediaan'] ?></td>
								    <td><?= $data['supplier'] ?></td>
                                </tr>
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
