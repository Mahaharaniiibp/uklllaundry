<?php
include "header.php";
?>
<h2 align="center">Histori </h2>
<table class="table table-hover table-striped">
    <thead>
        <th>NO</th>
        <th>Nama Pelanggan</th>
        <th>Tanggal transaksi</th>
        <th>Paket</th>
        <th>Jumlah</th>
        <th>Harga</th>
        <th>Total Harga</th>
        <!-- <th>delete</th> -->

    </thead>
    <tbody>
        <?php
        include "koneksi.php";
        $sql = mysqli_query($conn, "select detail_transaksi.id, member.nama, transaksi.tgl, paket.jenis, detail_transaksi.qty from detail_transaksi JOIN paket ON detail_transaksi.id = paket.id JOIN transaksi ON transaksi.id = detail_transaksi.id_transaksi JOIN member ON member.id = transaksi.id_member order by id desc;");
        // $subtotal = $sql['qty'] * $sql['harga'];
    
        $no = 0;
        if (mysqli_num_rows($sql) > 0) {
            $data_plg = "";
            while ($histori = mysqli_fetch_array($sql)) {
                $no++;
                $hapus="<a href='hapus_histori_petugas.php?id_transaksi=$histori[id_transaksi]' onclick='return confirm(Apakah anda yakin menghapus Histori ini?)' class='btn btn-danger'>X</a>";

                $qry_pdk = mysqli_query($conn, "select P.nama_pelanggan from pelanggan P join transaksi T on P.id_pelanggan=T.id_pelanggan where T.id_transaksi = '" . $histori['id_transaksi'] . "'");
            
                while ($dt_pdk = mysqli_fetch_array($qry_pdk)) {
                    $data_plg = $dt_pdk['nama'];
                }
        ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $data_plg ?></td>
                    <td><?= $histori['tgl'] ?></td>
                    <td><?= $histori['jenis'] ?></td>
                    <td><?= $histori['qty'] ?></td>
                    <td><?= $histori['harga'] ?></td>
                    <td><?= $histori['qty'] * $histori['harga']; ?></td>
                    <!-- <td><?=$hapus?></td>  -->
                </tr>
        <?php
            }
        } else {
            echo ("
            <tr>
             <td colspan='8'><p style='text-align:center'>Tidak Ada Histori</p></td>
            </tr>  
            ");
        }

        ?>