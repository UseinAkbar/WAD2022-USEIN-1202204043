<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Rental EAD</title>
</head>
<body>
    <div class="app">
        <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link" aria-current="page" href="Usein_index.php">Home</a>
                        <a class="nav-link" href="Usein_index.php?page=booking">Booking</a>
                    </div>
                </div>
            </div>
        </nav>

        <?php 
            if (isset($_GET['page'])) {
                $page = $_GET['page'];
        
                switch ($page) {
                    case 'booking':
                        include "halaman/Usein_booking.php";
                        break;
                    case 'mybooking':
                        include "halaman/Usein_mybooking.php";
                        break;			
                    default:
                        echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                        break;
                }
            } else if (isset($_GET['tipe'])) {
                $tipe = $_GET['tipe'];
                
                if(in_array($tipe, ['fortuner', 'innova', 'pajero'])) {
                    include "halaman/Usein_booking.php";
                }
            } else {
                include "halaman/Usein_home.php";
            }
	 ?>

        <footer class='bg-light'>Created by USEIN AKBAR_1202204043</footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>