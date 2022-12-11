<!DOCTYPE html>
<html lang="en">
    @include('partial.head')
<body>
    @include('partial.navbar')

    <section class="edit form-section">
        <?php 
            $image = $edit_mobil[0]['image'];    
        ?>
        
        <div class="edit__header">
            <h1 class="edit__title form-title">Edit</h1>
            <p class="edit__desc form-desc">Edit Mobil {{$edit_mobil[0]['name']}}</p>
        </div>
        <div class="edit__container">
        <img src='{{"/asset/$image"}}' alt="" class="edit__img">
            <form action="/edit/{{$edit_mobil[0]['id']}}" method="POST" enctype="multipart/form-data" class="edit__form form-rent">
                @csrf
                <div class="mb-4">
                    <label for="nama_mobil" class="form-label">Nama Mobil</label>
                    <input type="text" name="nama_mobil" class="form-control bg-light" id="nama_mobil" value="{{$edit_mobil[0]['name']}}" >
                </div>
                <div class="mb-4">
                    <label for="nama_pemilik" class="form-label">Nama Pemilik</label>
                    <input type="text" name="nama_pemilik" class="form-control bg-light" id="nama_pemilik" value="Usein-1202204043" readOnly>
                </div>
                <div class="mb-4">
                    <label for="merk" class="form-label">Merk</label>
                    <input type="text" name="merk" class="form-control bg-light" id="merk" value="{{$edit_mobil[0]['brand']}}">
                </div>
                <div class="mb-4">
                    <label for="tgl_beli" class="form-label">Tanggal Beli</label>
                    <input type="date" name="tgl_beli" class="form-control" id="tgl_beli" value="{{$edit_mobil[0]['purchase_date']}}">
                </div>
                <div class="mb-4">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea id="deskripsi" name="deskripsi" rows="5" cols="30" value="" placeholder="Masukkan deskripsi mobil..">{{$edit_mobil[0]['description']}}</textarea>
                </div>
                <div class="mb-4">
                    <label for="gambar" class="form-label">Foto</label>
                    <input type="file" name="gambar" id="gambar" accept="image/*">
                    <p class='form-img-detail'>current image: <span>{{$edit_mobil[0]['image']}}</span></p>
                </div>
                <div class="mb-4">
                    <label class="form-label">Status Pembayaran</label>
                    <div class="form-radio-container">
                        <div class="form-radio">
                            <input class="form-radio-input" type="radio" name="status_bayar" id="status1" value="lunas" {{ $edit_mobil[0]['status'] == 'Lunas' ? 'checked' : '' }}>
                            <label class="form-radio-label" for="status1">Lunas</label>
                        </div>
                        <div class="form-radio">
                            <input class="form-radio-input" type="radio" name="status_bayar" id="status2" value="belum-lunas" {{ $edit_mobil[0]['status'] == 'Belum-Lunas' ? 'checked' : '' }}>
                            <label class="form-radio-label" for="status2">Belum Lunas</label>
                        </div>
                    </div>
                </div>
                <input type="submit" class="form-rent-btn btn-primary" name="ubah" value="Simpan">
                <input type="hidden" name="id" value="{{$edit_mobil[0]['id']}}">
                <!-- <button type="submit" class="form-rent-btn btn-primary">Simpan</button> -->
            </form>
        </div>
    </section>
</body>
</html>