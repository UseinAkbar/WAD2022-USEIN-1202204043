<?php
    
        include "connector.php";

        $namaMobil = $_POST['nama_mobil'];
        $namaPemilik = $_POST['nama_pemilik'];
        $merk = $_POST['merk'];
        $tglBeli = $_POST['tgl_beli'];
        $deskripsi = $_POST['deskripsi'];
        $gambar = $_FILES['gambar']['name'];
        $file_tmp = $_FILES['gambar']['tmp_name'];
        $statusBayar = $_POST['status_bayar'];
        
        move_uploaded_file($file_tmp, '../asset/'.$gambar);
        $query = mysqli_query($connection, "INSERT INTO showroom_usein_table(nama_mobil, pemilik_mobil, merk_mobil, tanggal_beli, deskripsi, foto_mobil, status_pembayaran) VALUES('$namaMobil','$namaPemilik','$merk','$tglBeli','$deskripsi','$gambar','$statusBayar')");

        if($query) {
            header('Location: ../index.php?page=myitem&message=add-item');
        }
?>