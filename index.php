<?php
    // autoload.php loads all files that are in the folder 'composer/'
    require __DIR__ . '/vendor/autoload.php';

    // Print a word in uppercase using the following syntax: namespace\class::method(parameter)
    echo Text\Format::upperText('hola'); # this echo works with src/Format.php file, and it will return 'HOLA'
?>