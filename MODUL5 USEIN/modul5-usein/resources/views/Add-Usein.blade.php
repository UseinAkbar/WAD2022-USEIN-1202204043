<!DOCTYPE html>
<html lang="en">
    @include('partial.head')
<body>
    @include('partial/navbar')
    <section class="add form-section">
        <div class="add__header">
            <h1 class="add__title form-title">Tambah Mobil</h1>
            <p class="add__desc form-desc">Tambah Mobil baru anda ke list show room</p>
        </div>
        <form action="/insert" method="POST" enctype="multipart/form-data" class="add__form form-rent">
            @csrf
            <div class="mb-4">
                <label for="nama_mobil" class="form-label">Nama Mobil</label>
                <input type="text" name="nama_mobil" class="form-control bg-light" id="nama_mobil" value="" placeholder="Masukkan nama mobil">
            </div>
            <div class="mb-4">
                <label for="nama_pemilik" class="form-label">Nama Pemilik</label>
                <input type="text" name="nama_pemilik" class="form-control bg-light" id="nama_pemilik" value="Usein-1202204043" readOnly>
            </div>
            <div class="mb-4">
                <label for="merk" class="form-label">Merk</label>
                <input type="text" name="merk" class="form-control bg-light" id="merk" value="" placeholder="Masukkan merk mobil">
            </div>
            <div class="mb-4">
                <label for="tgl_beli" class="form-label">Tanggal Beli</label>
                <input type="date" name="tgl_beli" class="form-control" id="date" value="">
            </div>
            <div class="mb-4">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea id="deskripsi" name="deskripsi" rows="5" cols="30" value="" placeholder="Masukkan deskripsi mobil.."></textarea>
            </div>
            <div class="mb-4">
                <label for="gambar" class="form-label">Foto</label>
                <input type="file" name="gambar" id="gambar" accept="image/*">
            </div>
            <div class="mb-4">
                <label class="form-label">Status Pembayaran</label>
                <div class="form-radio-container">
                    <div class="form-radio">
                        <input class="form-radio-input" type="radio" name="status_bayar" id="status1" value="lunas">
                        <label class="form-radio-label" for="status1">Lunas</label>
                    </div>
                    <div class="form-radio">
                        <input class="form-radio-input" type="radio" name="status_bayar" id="status2" value="belum-lunas">
                        <label class="form-radio-label" for="status2">Belum Lunas</label>
                    </div>
                </div>
            </div>
            <input type="submit" class="form-rent-btn btn-primary" name="submit" value="Selesai">
            <!-- <button type="submit" class="form-rent-btn btn-primary">Selesai</button> -->
        </form>
    </section>
</body>
</html>
