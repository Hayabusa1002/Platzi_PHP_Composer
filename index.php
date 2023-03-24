<?php
    // autoload.php loads all files that are in the folder 'composer/'
    require __DIR__ . '/vendor/autoload.php';

    // Print a word in uppercase using the following syntax: namespace\class::method(parameter)
    echo Text\Format::upperText('hola'); # this echo works with src/Format.php file, and it will return 'HOLA'

    echo "<br>"; # In order to separate these echos, we use <br> HTML element

    // Print a word in uppercase using by simply calling the function
    echo upper('hola'); # upper() function doesn't exists, so it's created with src/helpers.php file

    echo "<br>"; # In order to separate these echos, we use <br> HTML element

    // Print a word in lowercase using the following syntax: namespace\class::method(parameter)
    echo Text\Format::lowerText('HOLA'); # this echo works with src/Format.php file, and it will return 'hola'

    echo "<br>"; # In order to separate these echos, we use <br> HTML element

    // Print a word in lowercase using by simply calling the function
    echo lower('HOLA'); # lower() function doesn't exists, so it's created with src/helpers.php file
?>