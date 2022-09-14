<?php
 
 show_even_numbers();


// Apresente os números pares maiores que 0, até o 100, um número por linha.
function show_even_numbers(){
    for ($i=1; $i <= 100; $i++) {
        if ($i % 2 == 0) {
            echo "$i\n";
        }
    }
}