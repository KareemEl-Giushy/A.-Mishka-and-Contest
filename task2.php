<?php
    /*
        Didn't Need K the number of problems because I store it into an array
        Created By: Kareem El-Giushy
    */
    function mishka($n = 0, $arr = []) {
        $counter = 0;
        for($i = 0; $i < count($arr);$i++) {
            if($n < $arr[$i]) {
                break;
            }
            $counter++;
        }
        // echo $counter . "\n"; // Testing Perposes

        for($k = count($arr) - 1; $k < count($arr);$k--) {
            if($n < $arr[$k]) {
                break;
            }

            $counter++;
        }

        echo $counter;
    }


    mishka(4, [4 ,2, 3, 1, 5, 1, 6, 4]);