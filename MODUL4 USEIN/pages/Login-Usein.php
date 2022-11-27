<section class="login">
    <form action="config/login.php" method="post" class="login__form auth-form">
        <h1 class="login__title auth-title">Login</h1>
        <div class="mb-4">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control bg-light" id="email" value="<?= isset($_COOKIE['remember']) ? $_COOKIE['email'] : '' ?>" placeholder="Masukkan email" required>
        </div>
        <div class="mb-4">
            <label for="password" class="form-label">Kata Sandi</label>
            <input type="password" name="password" class="form-control bg-light" id="password" value="<?= isset($_COOKIE['remember']) ? $_COOKIE['password'] : '' ?>" placeholder="Masukkan kata sandi" required>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="remembered" id="rememberMe" name="remember" <?php echo isset($_COOKIE['remember']) ? 'checked' : '' ?> >
            <label class="form-check-label" for="rememberMe">Remember me</label>
        </div>
        <input type="submit" class="regis__btn auth-btn" name="login" value="Login">
        <!-- <button type="submit" class="login__btn auth-btn">Login</button> -->
        <p class="auth-redirect">Anda belum punya akun? <a href="index.php?page=register">Daftar</a></p>
    </form>
</section>