<?php

// Call function using: RandomUKPostcode();

function RandomUKPostcode($StyleID = null){
    $StyleID = empty($StyleID) ? rand(0,5) : $StyleID;

    switch($StyleID){
        case 0: // AA9A 9AA
            return chr(rand(65,90)) . chr(rand(65,90)) . rand(1,9) . chr(rand(65,90)) . " " . rand(1,9) . chr(rand(65,90)) . chr(rand(65,90));
        case 1: // A9A 9AA
            return chr(rand(65,90)) . rand(1,9) . chr(rand(65,90)) . " " . rand(1,9) . chr(rand(65,90)) . chr(rand(65,90));
        case 2: // A9 9AA
            return chr(rand(65,90)) . rand(1,9) . " " . rand(1,9) . chr(rand(65,90)) . chr(rand(65,90));
        case 3: // A99 9AA
            return chr(rand(65,90)) . rand(11,50) . " " . rand(1,9) . chr(rand(65,90)) . chr(rand(65,90));
        case 4: // AA9 9AA
            return chr(rand(65,90)) . chr(rand(65,90)) . rand(1,9) . " " . rand(1,9) . chr(rand(65,90)) . chr(rand(65,90));
        case 5: // AA99 9AA
            return chr(rand(65,90)) . chr(rand(65,90)) . rand(11,50) . " " . rand(1,9) . chr(rand(65,90)) . chr(rand(65,90));
    }
}
