<section class="regis">
    <form action="config/register.php" method="post" class="regis__form auth-form">
        <h1 class="regis__title auth-title">Register</h1>
        <div class="mb-4">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control bg-light" id="email" value="" placeholder="Masukkan email" required>
        </div>
        <div class="mb-4">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control bg-light" id="nama" value="" placeholder="Masukkan nama" required>
        </div>
        <div class="mb-4">
            <label for="no_hp" class="form-label">Nomor Handphone</label>
            <input type="text" name="no_hp" class="form-control bg-light" id="no_hp" value="" placeholder="Masukkan no handphone" required>
        </div>
        <div class="mb-4">
            <label for="password" class="form-label">Kata Sandi</label>
            <input type="password" name="password" class="form-control bg-light" id="password" value="" placeholder="Masukkan kata sandi" required>
        </div>
        <div class="mb-4">
            <label for="confirm_password" class="form-label">Konfirmasi Kata Sandi</label>
            <input type="password" name="confirm_password" class="form-control bg-light" id="confirm_password" value="" placeholder="Konfirmasi kata sandi" required>
        </div>
        <input type="submit" class="regis__btn auth-btn" name="regis" value="Daftar">
        <!-- <button type="submit" class="regis__btn auth-btn">Daftar</button> -->
        <p class="auth-redirect">Anda sudah punya akun? <a href="index.php?page=login">Login</a></p>
    </form>
</section>