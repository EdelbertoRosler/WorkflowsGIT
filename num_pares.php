<?php
 
// Apresente os números pares maiores que 0, até o 100, um número por linha.
for ($i=1; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        echo "$i\n";
    }
}
