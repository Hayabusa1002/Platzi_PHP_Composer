<?php
    /* PHP basic syntax */

    // Assignment
    $num  = 9;                  # Syntax: $variable_name = variable_value; ('$' define any variable and ';' is for marking the end of the line)
    $lang = [                   # Syntax: $array_name = [ 'item_key' => 'item_value', ... ]; (PHP array = Python dictionary)
        'es' => 'español',
        'en' => 'inglés'
    ];

    // Arithmetic
    echo "<pre>";                                          # <pre> is an HTML element that preformats the text  
    echo "Suma 2 + 2 = "         . ((int) 2 + (int) 2);    # '.' is for concatenate strings in PHP and '(int)' defines '2' as a integer
    echo "<br>";                                           # <br> is an HTML element that makes a jumpt to the next line
    echo "Resta 2 - 2 = "        . ((int) 2 - (int) 2);
    echo "<br>";
    echo "Multiplica 2 * 2 = "   . ( 2 * 2);
    echo "<br>";
    echo "Divide 2 / 2 = "       . ( 2 / 2);
    echo "<br>";
    echo "Módulo 2 % 2 = "       . ( 2 % 2);              # '%' is for obtaining the remainder of a division.
    echo "<br>";
    echo "Exponencial 2 ** 2 = " . ( 2 ** 2);             # 'a**b' = 'a^b'
    echo "<br>";
    echo "</pre>";
?>