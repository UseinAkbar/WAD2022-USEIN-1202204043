<section class="booking">
    <h1 class="booking-title">Rent Your Car Now!</h1>
    <div class="booking-container">
        <div class="booking-left">
            <img src="asset/<?php echo isset($_GET['tipe']) ? $_GET['tipe'] : "camry" ?>.png" alt="car" class="booking-img">
        </div>
        <div class="booking-right">
            <form action="Usein_index.php?page=mybooking" method="POST" class="booking-form">
                <div class="mb-4">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control bg-light" id="name" value="USEIN AKBAR_1202204043" readOnly>
                </div>
                <div class="mb-4">
                    <label for="date" class="form-label">Book Date</label>
                    <input type="date" name="date" class="form-control" id="date" value="">
                </div>
                <div class="mb-4">
                    <label for="time" class="form-label">Start Time</label>
                    <input type="time" name="time" class="form-control" id="time" value="">
                </div>
                <div class="mb-4">
                    <label for="duration" class="form-label">Duration (Days)</label>
                    <input type="number" min="1" name="duration" class="form-control" id="duration" value="">
                </div>
                <?php
                    if(isset($_GET['page'])) {
                        echo '<div class="mb-4">
                        <label for="car" class="form-label">Car Type</label>
                        <select id="car" class="form-select" name="tipe_mobil">
                            <option value="">Pilih Jenis Mobil</option>
                            <option value="Toyota Fortuner">Toyota Fortuner</option>
                            <option value="Toyota Innova">Toyota Innova</option>
                            <option value="Pajero Sport">Pajero Sport</option>
                        </select>
                    </div>';
                    } else {
                        $state = '';
                        switch ($tipe) {
                            case 'fortuner':
                                $state = 'Toyota Fortuner';
                                break;
                            case 'innova':
                                $state = 'Toyota Innova';
                                break;	
                            case 'pajero':
                                $state = 'Pajero Sport';
                                break;		
                        }

                        echo "<div class='mb-4'>
                        <label for='car' class='form-label'>Car Type</label>
                        <select id='car' class='form-select' name='tipe_mobil'>
                            <option value='$state'>$state</option>
                        </select>
                    </div>";
                    }
                ?>
                <div class="mb-4">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="text" name="phone" class="form-control" id="phone" value="">
                </div>
                <div class="mb-4 supir">
                    <label>Add Service(s)</label>
                    <div class="form-check-container">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="healthcare" id="check1" value="Health Protocol">
                            <label class="form-check-label" for="check1">Health Protocol / Rp25.000</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="driver" id="check2" value="Driver">
                            <label class="form-check-label" for="check2">Driver / Rp100.000</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="fuel" id="check3" value="Fuel Filled">
                            <label class="form-check-label" for="check3">Fuel Filled / Rp250.000</label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Book</button>
            </form>
        </div>
    </div>
</section>