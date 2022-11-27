<?php

        include "connector.php";

        if(isset($_POST['ubah'])) {
            $id = $_POST['id'];
            $namaMobil = $_POST['nama_mobil'];
            $namaPemilik = $_POST['nama_pemilik'];
            $merk = $_POST['merk'];
            $tglBeli = $_POST['tgl_beli'];
            $deskripsi = $_POST['deskripsi'];
            $gambar = $_FILES['gambar']['name'];
            $file_tmp = $_FILES['gambar']['tmp_name'];
            $statusBayar = $_POST['status_bayar'];
    
            if($file_tmp) {
                move_uploaded_file($file_tmp, '../asset/'.$gambar);
                $query = mysqli_query($connection, "UPDATE showroom_usein_table SET nama_mobil='$namaMobil', pemilik_mobil='$namaPemilik', merk_mobil='$merk', tanggal_beli='$tglBeli', deskripsi='$deskripsi', foto_mobil='$gambar', status_pembayaran='$statusBayar' WHERE id_mobil=$id");
            } else {
               $query = mysqli_query($connection, "UPDATE showroom_usein_table SET nama_mobil='$namaMobil', pemilik_mobil='$namaPemilik', merk_mobil='$merk', tanggal_beli='$tglBeli', deskripsi='$deskripsi', status_pembayaran='$statusBayar' WHERE id_mobil=$id");
            }       

            header('Location: ../index.php?page=myitem&message=update-item');
        }
    
?>