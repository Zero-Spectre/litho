<?php

include "koneksi.php";

?>
<h2>LATIHAN MENAMPILKAN DATA DARI DATABASE DENGAN TABEL</h2>
<table border="1">
    <tr>
        <td>Nomor</td>
        <td>Nama</td>
        <td>jenis Kelamin</td>
        <td>Alamat</td>
        <td>Aksi</td>
    </tr>
    <?php

    $tampil = mysqli_query($mysqli, "select * from identitas");
    $no = 1;
    while ($hasil = mysqli_fetch_array($tampil)) {
    ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $hasil['nama']; ?></td>
            <td><?php echo $hasil['jeniskelamin']; ?></td>
            <td><?php echo $hasil['alamat']; ?></td>
            <td>
                <a>edit</a>|
                <a>hapus</a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>