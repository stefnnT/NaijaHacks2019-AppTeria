<?php
    include 'dbconfig.php';

    if (isset($_POST['load1'])){

        if ($_POST['load1'] == 'on') {
            //turn off
            // changeState('load1', 0);

            $sqli = " UPDATE devices SET load1 = 0 WHERE id=1";
            mysqli_query($conn, $sqli);
            
        } else {
            //turn on
            // changeState('load1', 1);

            $sqli = " UPDATE devices SET load1 = 1 WHERE id=1";
            mysqli_query($conn, $sqli);
        }
    }

    if (isset($_POST['load2'])){

        if ($_POST['load2'] == 'on') {
            //turn off
            // changeState('load1', 0);

            $sqli = " UPDATE devices SET load2 = 0 WHERE id=1";
            mysqli_query($conn, $sqli);
            
        } else {
            //turn on
            // changeState('load1', 1);

            $sqli = " UPDATE devices SET load2 = 1 WHERE id=1";
            mysqli_query($conn, $sqli);
        }
    }

    if (isset($_POST['load3'])){

        if ($_POST['load3'] == 'on') {
            //turn off
            // changeState('load1', 0);

            $sqli = " UPDATE devices SET load3 = 0 WHERE id=1";
            mysqli_query($conn, $sqli);
            
        } else {
            //turn on
            // changeState('load1', 1);

            $sqli = " UPDATE devices SET load3 = 1 WHERE id=1";
            mysqli_query($conn, $sqli);
        }
    }

    if (isset($_POST['load4'])){

        if ($_POST['load4'] == 'on') {
            //turn off
            // changeState('load1', 0);

            $sqli = " UPDATE devices SET load4 = 0 WHERE id=1";
            mysqli_query($conn, $sqli);
            
        } else {
            //turn on
            // changeState('load1', 1);

            $sqli = " UPDATE devices SET load4 = 1 WHERE id=1";
            mysqli_query($conn, $sqli);
        }
    }

    if (isset($_POST['load5'])){

        if ($_POST['load5'] == 'on') {
            //turn off
            // changeState('load1', 0);

            $sqli = " UPDATE devices SET load5 = 0 WHERE id=1";
            mysqli_query($conn, $sqli);
            
        } else {
            //turn on
            // changeState('load1', 1);

            $sqli = " UPDATE devices SET load5 = 1 WHERE id=1";
            mysqli_query($conn, $sqli);
        }
    }

    if (isset($_POST['load6'])){

        if ($_POST['load6'] == 'on') {
            //turn off
            // changeState('load1', 0);

            $sqli = " UPDATE devices SET load6 = 0 WHERE id=1";
            mysqli_query($conn, $sqli);
            
        } else {
            //turn on
            // changeState('load1', 1);

            $sqli = " UPDATE devices SET load6 = 1 WHERE id=1";
            mysqli_query($conn, $sqli);
        }
    }

    $sqli = "SELECT * FROM devices WHERE id = 1";

    $resulti = mysqli_query($conn, $sqli);

    $rowi = mysqli_fetch_array($resulti);


    // function changeState($load, $state) {
    //     if($state) {
    //         $state = 0;
    //     } else {
    //         $state = 1;
    //     }

    //     $sqli = " UPDATE devices SET ".$load." = '".$state."' WHERE id=1";

    //     $resulti = mysqli_query($conn, $sqli);
    // }

?>