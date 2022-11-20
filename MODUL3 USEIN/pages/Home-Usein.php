<section class="home">
    <div class="home__left">
        <h1 class="home__title">Selamat Datang di Show Room Usein</h1>
        <p class="home__desc">At lacus vitae nulla sagittis scelerisque nisl. Pellentesque duis cursus vestibulum, facilisi ac, sed faucibus.</p>
        <a href="index.php?page=<?php echo mysqli_num_rows($result) ? "myitem&message=none" : "additem" ?>" class="home__btn">MyCar</a>
        <div class="home__footnote">
            <img src="asset/logo-ead.svg" alt="" class="home__logo">
            <p>Usein Akbar_1202204043</p>
        </div>
    </div>
    <div class="home__right">
        <img src="asset/home-img.png" alt="">
    </div>
</section>