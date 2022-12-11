<!DOCTYPE html>
<html lang="en">
    @include('partial.head')
    <body>
        @include('partial.navbar')

        <section class="detail form-section">
            <?php 
                $image = $detail_mobil[0]['image'];    
            ?>
            <div class="detail__header">
                <h1 class="detail__title form-title">{{$detail_mobil[0]['name']}}</h1>
                <p class="detail__desc form-desc">Detail Mobil {{$detail_mobil[0]['name']}}</p>
            </div>
            <div class="detail__container">
                <img src='{{"/asset/$image"}}' alt="" class="detail__img">
                <form action="" method="POST" class="detail__form form-rent">
                    <div class="mb-4">
                        <label for="nama_mobil" class="form-label">Nama Mobil</label>
                        <input type="text" name="nama_mobil" class="form-control bg-light" id="nama_mobil" value='{{$detail_mobil[0]["name"]}}' readOnly>
                    </div>
                    <div class="mb-4">
                        <label for="nama_pemilik" class="form-label">{{$detail_mobil[0]['owner']}}</label>
                        <input type="text" name="nama_pemilik" class="form-control bg-light" id="nama_pemilik" value="Usein-1202204043" readOnly>
                    </div>
                    <div class="mb-4">
                        <label for="merk" class="form-label">Merk</label>
                        <input type="text" name="merk" class="form-control bg-light" id="merk" value="{{$detail_mobil[0]['brand']}}" readOnly>
                    </div>
                    <div class="mb-4">
                        <label for="date" class="form-label">Tanggal Beli</label>
                        <input type="date" name="date" class="form-control" id="date" value="{{$detail_mobil[0]['purchase_date']}}" readOnly>
                    </div>
                    <div class="mb-4">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea id="deskripsi" name="deskripsi" rows="5" cols="30" placeholder="Masukkan deskripsi mobil.." readOnly>{{$detail_mobil[0]['description']}}</textarea>
                    </div>
                    <div class="mb-4">
                        <label for="image" class="form-label">Foto</label>
                        <input type="file" name="image" id="image" accept="image/*" disabled>
                        <p class='form-img-detail'>current image: <span>{{$detail_mobil[0]['image']}}</span></p>
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Status Pembayaran</label>
                        <div class="form-radio-container">
                            <div class="form-radio">
                                <input class="form-radio-input" type="radio" name="status_bayar" id="status1" {{ $detail_mobil[0]['status'] == 'Lunas' ? 'checked' : '' }} {{ $detail_mobil[0]['status'] == 'Belum-Lunas' ? 'disabled' : '' }}>
                                <label class="form-radio-label" for="status1">Lunas</label>
                            </div>
                            <div class="form-radio">
                                <input class="form-radio-input" type="radio" name="status_bayar" id="status2" {{ $detail_mobil[0]['status'] == 'Belum-Lunas' ? 'checked' : '' }} {{ $detail_mobil[0]['status'] == 'Lunas' ? 'disabled' : '' }}>
                                <label class="form-radio-label" for="status2">Belum Lunas</label>
                            </div>
                        </div>
                    </div>
                    <a href="/edit/{{$detail_mobil[0]['id']}}" class="form-rent-btn btn-primary">Edit</a>
                </form>
            </div>
        </section>
    </body>
</html>