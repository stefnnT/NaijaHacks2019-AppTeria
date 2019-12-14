<?php

    include 'dbconfig.php';

    $status = '';
    
    // if (array_key_exists('submit', $_GET)) {

    if (isset($_GET['email']) && isset($_GET['apikey'])) {
        $email = $_GET['email'];
        $password = $_GET['apikey'];
        
        $sqli = "SELECT * FROM devices WHERE email = '".mysqli_real_escape_string($conn, $email)."'";
        
        $resulti = mysqli_query($conn, $sqli);

        $rowi = mysqli_fetch_array($resulti);

        if ($password == $rowi['apikey']) {
            $status = $rowi['load1'].$rowi['load2'].$rowi['load3'].$rowi['load4'].$rowi['load5'].$rowi['load1'];
        }
    }

    // }

    echo $status;


    //localhost/devicestate.php?email=xxx&apikey=xxx
    //'@' sign is %40

    //http://localhost/NaijaHacks2019-AppTeria/user/devicestate.php?email=stephensolomon48%40gmail.com&password=07012345678
?>

