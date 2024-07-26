<?php

function classifyNumber($number){
    switch(true){

        case($number >= 1 && $number <=10):
        echo'small';
          break;
        case($number >= 11 && $number <= 100):
            echo'medium';
            break;
            case($number >100):
                echo'large';
                 break;
                default:
                echo'undefined';
    }
}


