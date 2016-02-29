<?php

    $q1 = $q2 = $q3 = $q4 = $q5 = "";
    
    
    function get_data($data) {
        return $data;
    }
    
    //getting values from data fields in HTML file with specified parameter name
    $q1 = get_data($_POST["q1"]);
    $q2 = get_data($_POST["q2"]);
    $q3 = get_data($_POST["q3"]);
    $q4 = get_data($_POST["q4"]);
    $q5 = get_data($_POST["q5"]);

    echo "Question 1: What is the world's largest airline by passengers carried (2015)? <br> You answered: " . $q1 . "<br>";
    if($q1 == "Delta")
    {
        echo "Correct <br>";
        $correct++; //counter for num of correct answers
    }
    else
        echo "Incorrect. Correct answer: Delta <br>";
    
    echo "Question 2: What is the world's busiest airport by passengers? (2015) <br> You answered: " . $q2 . "<br>";
    if($q2 == "Atlanta")
    {
        echo "Correct <br>";
        $correct++;
    }
    else
        echo "Incorrect. Correct answer: Atlanta <br>";
    
    echo "Question 3: Approx. how many passengers traveled through Heathrow in 2015? <br> You answered: " . $q3 . "<br>";
    if($q3 == "75 mil.")
    {
        echo "Correct <br>";
        $correct++;
    }
    else
        echo "Incorrect. Correct answer: 75 mil. <br>";
    
    echo "Question 4: Which European low-cost carrier aims to control more than 30 transatlantic routes by the end of 2016? <br> You answered: " . $q4 . "<br>";
    if($q4 == "Norweigian")
    {
        echo "Correct <br>";
        $correct++;
    }
    else
        echo "Incorrect. Correct answer: Norweigian <br>";
    
    echo "Question 5: Which airline currently flies the world's longest nonstop flight (by distance)? <br> You answered: " . $q5 . "<br>";
    if($q5 == "Qantas")
    {
        echo "Correct <br>";
        $correct++;
    }
    else
        echo "Incorrect. Correct answer: Qantas <br>";
    
    echo "You answered " .$correct . " out of 5 <br>";
    $percent = ($correct / 5) * 100;
    echo "for " . $percent . " percent <br>";
?>