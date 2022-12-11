<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>EAD Rent Car</title>
</head>
<body>
    <div class="app">
        <?php
            include "config/connector.php";

            $result = mysqli_query($connection, "SELECT * FROM `showroom_usein_table`");

            function handleNavbar($value) {
                echo $value;
            };
        ?>
        
        <nav class="navbar navbar-expand-lg bg-primary <?= isset($_COOKIE['warna']) ? handleNavbar($_COOKIE['warna']) : '' ?>" id="<?= isset($_GET['page']) && in_array($_GET['page'], ['register', 'login']) ? 'hide' : '' ?>">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse navbar-container-auth" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a> 
                        <a class="nav-link" id="<?= !isset($_COOKIE['nama']) ? 'hide' : '' ?>" href="index.php?page=<?php echo mysqli_num_rows($result) ? "myitem&message=none" : "additem" ?>">MyCar</a>
                    </div>
                    <div class="nav-user">
                        <a id="<?= isset($_COOKIE['nama']) ? 'hide' : '' ?>" class="nav-link nav-login" href="index.php?page=login">Login</a> 
                        <a href="index.php?page=additem" class="nav-additem" id="<?= isset($_COOKIE['nama']) ? '' : 'hide' ?>">Add Item</a>
                        <div class="dropdown" id="<?= !isset($_COOKIE['nama']) ? 'hide' : '' ?>">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?= $_COOKIE['nama'] ?>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="./index.php?page=profile&user=<?= $_COOKIE['nama'] ?>">Profile</a></li>
                                <li><a class="dropdown-item" href="config/logout.php">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <?php 
            if (isset($_GET['page']) && isset($_GET['id'])) {
                $page = $_GET['page'];

                switch ($page) {
                    case 'detail':
                        include "pages/Detail-Usein.php";
                        break;
                    case 'edit':
                        include "pages/Edit-Usein.php";
                        break;
                    default:
                        echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                        break;
                }
            } else if (isset($_GET['page']) && isset($_GET['message'])) {
                include "pages/ListCar-Usein.php";
            } else if (isset($_GET['page']) && isset($_GET['user'])) {
                $page = $_GET['page'];

                switch ($page) {
                    case 'profile':
                        include "pages/Profile-Usein.php";
                        break;
                    default:
                        echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                        break;
                }
            } else if (isset($_GET['page'])) {
                $page = $_GET['page'];

                switch ($page) {
                    case 'additem':
                        include "pages/Add-Usein.php";
                        break;
                    case 'register':
                        include "pages/Register-Usein.php";
                        break;
                    case 'login':
                        include "pages/Login-Usein.php";
                        break;
                    default:
                        echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                        break;
                }
            }
             else {
                include "pages/Home-Usein.php";
            }
	 ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>