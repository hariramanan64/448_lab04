<?php

    $email = "";
    $pass = "";
    $tb = "";
    $mc = "";
    $bk = "";
    $ship = "";
    $total = "";
    
    function get_data($data) {
        return $data;
    }
    
    $email = get_data($_POST["email"]);
    $pass = get_data($_POST["password"]);
    $tb = get_data($_POST["tb1"]);
    $mc = get_data($_POST["mc1"]);
    $bk = get_data($_POST["bk1"]);
    $ship = get_data($_POST["ship"]);
    
    echo "<link rel='stylesheet' type='text/css' href='style.css' />";
    
    echo "Thank you for visiting the late night fast food web store! <br>";
    echo "Your email is <strong>" .$email. "</strong> <br>";
    echo "Your pass is <strong>" .$pass. "</strong> <br>";
    echo "<br>";
    
    echo "<strong> Your itemized receipt: </strong><br>";
    
    echo "5 layer taco ...   " .$tb .  " @ 3.99 ea. <br>";
    
    echo "Burger .........   " .$mc. " @ 2.49 ea. <br>";
    
    echo "Nuggets ........   " .$bk. " @1.49 ea. <br>";
    
    echo "Shipping: " .$ship. " <br>";
    
    
    $total = (3.99 * $tb) + (2.49 * $mc) + (1.49 * $bk);
    
    if($ship == "50.00 Overnight")
        $total = $total + 50;
    else if($ship == "5.00 Three Day")
        $total = $total + 5;
        
    echo "Your total is: <strong>$" .$total . "</strong><br>";

?>