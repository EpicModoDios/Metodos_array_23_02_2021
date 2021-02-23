

<?php

    //Diferentes Metodos de los "ARRAYS"

    $array = (array) ["Miguel", "Marcelo", "Alex", "Walter", "Juan"];
    //Insertar en la lista un dato al final
    $res = array_push($array, "Thomas");
    $array[] = "Alex";         //Forma abreviada

    //Insertar en la lista un dato al inicio
    $res = array_unshift($array, "Thomas");

    //Extrae y Elimina ultimo dato de la lista
    $res = array_pop($array);

    //Extrae y Elimina primer dato de la lista
    $res = array_shift($array);

    //Extraemos los datos necesarios de las lista y afectamos
    //Dicha lista, nos vuelve los datos estraidos de la lista 
    $res = array_splice($array, 2);

    //Si el 3 valor del metos es negativo se pocicionara en el ultimo
    //Elemento y estraera dichos valor
    $res = array_splice($array, 1, -1);
    $res = array_splice($array, 2, 2);

    // Despues del primier datos de nuestra lista eliminamos los demas
    //e insertamos en la lista afecta un nuevo datos despues del dato selecionado
    $res = array_splice($array, 1, count($array), "Thomas");

    
    //Insertamos datos en la lista principal segun el puntero 
    $res = array_splice($array, 2, 0, ["Thomas", "Isabella"] );


    //Duplica los datos de la lista principal sin afectarla
    //Y retorna los dos selecionados con el puntero
    $res = array_slice($array,1,2);

    //Organiza la lista (Organiza 2 o mas tipos de variables)
    $res = sort($array, SORT_NATURAL | SORT_FLAG_CASE );

    print_r($array);
    echo "<br>";
    print_r($res);





?>