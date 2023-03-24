<?php
    /* PHP basic syntax */

    // Assignment
    $num  = 9;                  # Syntax: $variable_name = variable_value; ('$' define any variable and ';' is for marking the end of the line)
    $lang = [                   # Syntax: $array_name = [ 'item_key' => 'item_value', ... ]; (PHP array = Python dictionary)
        'es' => 'español',
        'en' => 'inglés'
    ];

    // Arithmetic
    echo "<pre>";                                                   # <pre> is an HTML element that preformats the text
    echo "Suma 2 + 2 = "         . ((int) 2 + (int) 2);             # '.' is for concatenate strings in PHP and '(int)' defines '2' as a integer
    echo "<br>";                                                  # <br> is an HTML element that makes a jumpt to the next line
    echo "Resta 2 - 2 = "        . ((int) 2 - (int) 2);
    echo "<br>";
    echo "Multiplica 2 * 2 = "   . ( 2 * 2);
    echo "<br>";
    echo "Divide 2 / 2 = "       . ( 2 / 2);
    echo "<br>";
    echo "Módulo 2 % 2 = "       . ( 2 % 2);                        # '%' is for obtaining the remainder of a division.
    echo "<br>";
    echo "Exponencial 2 ** 2 = " . ( 2 ** 2);                       # 'a**b' = 'a^b'
    echo "<br>";

    // Comparison
    echo "Igual 9 == '9' : "        . ((int) 9 == (string) '9');    # Equal: compares only the value of the elements: 9 = 9 TRUE
    echo "<br>";
    echo "Idéntico 9 === '9' : "    . ((int) 9 === (string) '9');   # Identical: compares the value and the type of the elements: 9 = 9, but (int) != (string) FALSE
    echo "<br>";
    echo "Diferente 9 != '9' : "    . ((int) 9 != (string) '9');    # Not equal: compares the value and the type of the elements: 9 != 9 FALSE
    echo "<br>";
    echo "Diferente 9 <> '9' : "    . ((int) 9 <> (string) '9');    # Not equal: '!=' = '<>'
    echo "<br>";
    echo "No idéntico 9 !== '9' : " . ((int) 9 !== (string) '9');   # Not identical: compares the value and the type of the elements: (int) != (string) TRUE
    echo "<br>";
    echo "Menor que 9 < '9' : "     . ((int) 9 < (string) '9');     # Less than: compares only the value of the elements: 9 < 9 FALSE
    echo "<br>";
    echo "Mayor que 9 > '9' : "     . ((int) 9 > (string) '9');     # Greater than: compares only the value of the elements: 9 > 9 FALSE
    echo "<br>";
    echo "Menor o igual que 9 <= '9' : " . ((int) 9 <= (string) '9');       # Less than or equal to: compares only the value of the elements: 9 <= 9 TRUE
    echo "<br>";
    echo "Mayor o igual que 9 >= '9' : " . ((int) 9 >= (string) '9');       # Greater than or equal to: compares only the value of the elements: 9 >= 9 TRUE
    echo "<br>";
    echo "Nave espacial 9 <=> '9' : "    . ((int) 9 <=> (string) '9');      # Spaceship: compares only the value of the elements: 9 <=> 9 return 0
    echo "<br>";
    echo "Fusión de null null ?? 9 ?? '9' : " . ((null) ?? (int) 9 ?? (string) '9'); # Return the first not null element: (int) 9
    echo "<br>";
    
    // Variable variable
    $app  = 'name';     # 'app'  variable has the value: (string) 'name'
    $name = 'Platzi';   # 'name' variable has the value: (string) 'Platzi'
    # however, since $app = 'name' and variable $name exists (value and variable have the same name), then $app = 'name' and $$app = 'Platzi'

    echo $app;
    echo "<br>";
    echo $$app;
    echo "</pre>";
?>