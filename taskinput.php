<?php
    /*
        Didn't Need K the number of problems because I store it into an array
        Created By: Kareem El-Giushy
    */
    
    // Get the power (Strength)
    $n = (int)readline('Enter Mishka Power: ');
    
    // Get the number of querstions
    $num = (int)readline('Enter Number Of Questions: ');
    
    // Get Input Questions
    $arr = [];
    for($j = 0;$j < $num;$j++) {
        $arr[] = (int)readline('Enter Question difficulty: ');
    }
        
    $counter = 0;
    for($i = 0; $i < $num;$i++) {
        if($n < $arr[$i]) {
            break;
        }
        $counter++;
    }
    // echo $counter . "\n"; // Testing Perposes

    for($k = $num; $k < $num;$k--) {
        if($n < $arr[$k]) {
            break;
        }

        $counter++;
    }

    echo $counter;