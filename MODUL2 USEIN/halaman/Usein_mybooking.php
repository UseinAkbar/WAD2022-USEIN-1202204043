        <section class="mybooking">
            <?php 
                // $book_num = isset($_GET['name']) ? $_GET['name'] : '';
                $name = $_POST['name'];
                $checkin = isset($_POST['date']) ? $_POST['date'] : '';
                $duration = isset($_POST['duration']) ? (int)$_POST['duration'] : 0;
                $checkout = date("Y-m-d", strtotime("+$duration days", strtotime($checkin)));
                $time = isset($_POST['time']) ? $_POST['time'] : '';
                $tipe_mobil = isset($_POST['tipe_mobil']) ? $_POST['tipe_mobil'] : '';
                $phone = isset($_GET['phone']) ? $_POST['phone'] : '';
                $healthcare = isset($_POST['healthcare']) ? $_POST['healthcare'] :  NULL;
                $driver= isset($_POST['driver']) ? $_POST['driver'] :  NULL;
                $fuel= isset($_POST['fuel']) ? $_POST['fuel'] :  NULL;
                $services_price = array();
                $services = array();
                $total_price = 0;

                if(isset($healthcare)) {
                    array_push($services_price, 25000);
                    array_push($services, $healthcare);
                } if (isset($driver)) {
                    array_push($services_price, 100000);
                    array_push($services, $driver);
                } if (isset($fuel)) {
                    array_push($services_price, 250000);
                    array_push($services, $fuel);
                }
                
                switch ($tipe_mobil) {
                    case 'Toyota Fortuner':
                        $total_price = $duration * 1500000;
                        break;
                    case 'Toyota Innova':
                        $total_price = $duration * 550000;
                        break;
                    case 'Pajero Sport':
                        $total_price = $duration * 1750000;
                        break;
                }

                $total_price += array_sum($services_price);

                // foreach ($services_price as $price) {
                //     $total_price += $price;
                // }
            ?>

            <h1>Thank You USEIN AKBAR_1202204043 for Reserving</h1>
            <h2>Please double check your reservation details</h2>
            <table>
                <tr>
                    <td>Booking Number</td>
                    <td>Name</td>
                    <td>Check In</td>
                    <td>Check Out</td>
                    <td>Car Type</td>
                    <td>Phone Number</td>
                    <td>Service(s)</td>
                    <td>Total Price</td>
                </tr>
                <tr>
                    <td class="book-number"><?php echo rand() ?></td>
                    <td><?php echo $names ?></td>
                    <td><?php echo date($checkin) ?> <?php echo $time ?></td>
                    <td><?php echo $checkout; ?> <?php echo $time; ?></td>
                    <td><?php echo $tipe_mobil ?></td>
                    <td><?php echo $phone ?></td>
                    <td>
                        <?php 
                            if (empty($services)) {
                                echo "<p>No Service</p>";
                            } else { ?>
                                <ul>
                                    <?php foreach($services as $service) { ?>
                                        <li><?= $service ?></li>
                                    <?php } ?>
                                </ul>
                        <?php }?>  
                    </td>
                    <td><?= "Rp", number_format($total_prices, 0, ",", "."); ?></td>
                </tr>
            </table>
        </section>
