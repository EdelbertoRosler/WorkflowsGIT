<?php
 
 show_even_numbers();


function show_even_numbers(){
    for ($i=100; $i >= 1; $i--) {
        if ($i % 2 == 0) {
            echo "$i\n";
        }
    }
}