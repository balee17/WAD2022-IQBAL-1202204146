<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="#">
        <title>My Booking</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
            crossorigin="anonymous"
            />
          <script
            src="https://kit.fontawesome.com/6a8b45a968.js"
            crossorigin="anonymous"
          ></script>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
        <nav class="navbar navbar-expand-sm bg-dark justify-content-center">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">Booking</a>
                </li>
            </ul>
        </nav>
        <?php
            $name = isset($_POST['name'])? $_POST['name'] : '';
            $dated = isset($_POST['date'])? $_POST['date'] : '';
            $time = isset($_POST['time'])? $_POST['time'] : '';
            $duration = isset($_POST['duration'])? $_POST['duration'] : '';
            $typeCar = isset($_POST['typeCar'])? $_POST['typeCar'] : '';
            $phone = isset($_POST['phoneNumber'])? $_POST['phoneNumber'] : '';
            $serv = isset($_POST['service'])? $_POST['service'] : '';
            
            
            
            ?>
        <section class="container">
            <h1 class="text-center mb-3 pt-5">THANK YOU <?php echo $name ?></h1>
            <p class="text text-center mb-5">Please double check your reservation details.</p>
            <table class="table table-success table-striped-columns">
                <thead>
                    <tr>
                        <th scope=col>Booking Number</th>
                        <th scope=col>Name</th>
                        <th scope=col>Check In</th>
                        <th scope=col>Check Out</th>
                        <th scope=col>Car Type</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo "$booking" ?></td>
                        <td><?php echo "$name" ?></td>
                        <td>
                            <?php
                                echo date("Y-m-d", strtotime("+$duration day", strtotime($dated)));
                                ?>
                        </td>
                        <td><?php echo "$typeCar" ?></td>
                        <td><?php echo "$phone" ?></td>
                        <td>
                            <?php
                                if ($serv) {
                                    $serv = $_POST['service'];
                                    foreach ($serv as $service){
                                        echo "<li>".$service."<br>";
                                        if($service == "Health Protocol"){
                                            $count += $health;
                                        }
                                        if($service == "Driver"){
                                            $count += $driver;
                                        }
                                        if($service == "Full Filled"){
                                            $count += $fullFilled;
                                        }
                                    }
                                }else{
                                    echo 'No Service';
                                }
                                ?>
                        </td>
                        <td>
                            <?php 
                                if($typeCar == "Toyota Rush 2022"){
                                    $rush = (750000 * $duration)+$count;
                                    echo "Rp.  &nbsp;". number_format($rush,2,',','.') ;
                                }    
                                elseif($typeCar == "Toyota Ayla 2022"){
                                    $ayla = (550000 * $duration)+$count;
                                    echo "Rp.  &nbsp;". number_format($ayla,2,',','.') ;
                                }
                                elseif($typeCar == "Honda Brio 2022"){
                                    $brio = (350000 * $duration)+$count;
                                    echo "Rp.  &nbsp;". number_format($brio,2,',','.') ;
                                }
                                ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>
        </div>
        <footer class="d-flex justify-content-center bg-light text-center">
            <p class="text-dark pt-2">Created by IQBAL_1202204146</p>
        </footer>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    </body>
</html>