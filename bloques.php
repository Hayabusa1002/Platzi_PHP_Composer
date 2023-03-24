<?php
    /* PHP flow control statements */

    // if, elseif and else statements
    if (condition) {
        # code...
    } elseif (condition) {
        # code...
    } else {
        # code...
    }

    // switch statements; as a recomendation, if we have more than 3 conditions 'switch' is better than 'if - elseif - else'
    switch ($variable) {
        case 'value':
            # code...
            break;
        case 'value':
            # code...
            break;
        default:
            # code...
            break;
    }

    // foreach loop
    $variable = [ $key => $value ];

    foreach ($variable as $key => $value) {
        # code...
    }

    foreach ($variable as $value) {
        # code...
    }

    // for loop. In order to $i variable increases in one value: $i = $i + 1 --> $i++
    for ($i=0; $i < 10; $i++) { 
        # code...
    }

    // while loop. In order to $a variable increases in one value: $a = $a + 1 --> $a++
    while ($a <= 10) {
        # code...
    }

    // do while loop. This loop is similar to 'while', but the '# code...' is executed at least once
    do {
        # code...
    } while ($a <= 10);
?>