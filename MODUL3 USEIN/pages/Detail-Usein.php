<section class="detail form-section">
    <?php 
        include 'config/connector.php';

        $id = $_GET['id'];

        $result = mysqli_query($connection, "SELECT * FROM showroom_usein_table WHERE id_mobil=$id");
        $data = mysqli_fetch_assoc($result);
    ?>

    <div class="detail__header">
        <h1 class="detail__title form-title"><?= $data['nama_mobil'] ?></h1>
        <p class="detail__desc form-desc">Detail Mobil <?= $data['nama_mobil'] ?></p>
    </div>
    <div class="detail__container">
        <img src="asset/<?= $data['foto_mobil'] ?>" alt="" class="detail__img">
        <form action="" method="POST" class="detail__form form-rent">
            <div class="mb-4">
                <label for="nama_mobil" class="form-label">Nama Mobil</label>
                <input type="text" name="nama_mobil" class="form-control bg-light" id="nama_mobil" value="<?= $data['nama_mobil'] ?>" readOnly>
            </div>
            <div class="mb-4">
                <label for="nama_pemilik" class="form-label">Nama Pemilik</label>
                <input type="text" name="nama_pemilik" class="form-control bg-light" id="nama_pemilik" value="Usein-1202204043" readOnly>
            </div>
            <div class="mb-4">
                <label for="merk" class="form-label">Merk</label>
                <input type="text" name="merk" class="form-control bg-light" id="merk" value="<?= $data['merk_mobil'] ?>" readOnly>
            </div>
            <div class="mb-4">
                <label for="date" class="form-label">Tanggal Beli</label>
                <input type="date" name="date" class="form-control" id="date" value="<?= $data['tanggal_beli']?>" readOnly>
            </div>
            <div class="mb-4">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea id="deskripsi" name="deskripsi" rows="5" cols="30" placeholder="Masukkan deskripsi mobil.." readOnly><?= $data['deskripsi'] ?></textarea>
            </div>
            <div class="mb-4">
                <label for="image" class="form-label">Foto</label>
                <input type="file" name="image" id="image" accept="image/*" disabled>
                <p class='form-img-detail'>current image: <span><?= $data['foto_mobil'] ?></span></p>
            </div>
            <div class="mb-4">
                <label class="form-label">Status Pembayaran</label>
                <div class="form-radio-container">
                    <div class="form-radio">
                        <input class="form-radio-input" type="radio" name="status_bayar" id="status1" <?php echo $data['status_pembayaran'] == 'lunas' ? 'checked' : '' ?> <?php echo $data['status_pembayaran'] == 'belum lunas' ? 'disabled' : '' ?>>
                        <label class="form-radio-label" for="status1">Lunas</label>
                    </div>
                    <div class="form-radio">
                        <input class="form-radio-input" type="radio" name="status_bayar" id="status2" <?php echo $data['status_pembayaran'] == 'belum lunas' ? 'checked' : '' ?> <?php echo $data['status_pembayaran'] == 'lunas' ? 'disabled' : '' ?>>
                        <label class="form-radio-label" for="status2">Belum Lunas</label>
                    </div>
                </div>
            </div>
            <a href="index.php?page=edit&id=<?= $data['id_mobil'] ?>" class="form-rent-btn btn-primary">Edit</a>
        </form>
    </div>
</section>