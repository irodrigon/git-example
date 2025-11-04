<?php

    echo "Ejercicio 1 - Escribe un programa que determine si un número es par o impar:";

    echo "<br>";

    echo "<br>";

    $numero = 2;

    if ($numero % 2 == 0) { //Si el resto de 2 es igual a 0, el número es par.
        
        echo "El numero $numero es par";
    
    } else {

        echo "El numero $numero es impar";

    }

    echo "<br>";
    
    echo "<br>";

    echo "<-------------------------------------------------------------------------------------->";

    echo "<br>";
    
    echo "<br>";

    echo "Ejercicio 2 - Escribe un programa que determine si un número es positivo, negativo o cero:";

    echo "<br>";

    echo "<br>";

    $numero = 0;

    if( $numero == 0){

        echo "El numero $numero es igual a cero.";

    } else if ($numero < 0) {

        echo "El numero $numero es negativo.";

    } else { 

        echo "El numero $numero es positivo.";

    }

    echo "<br>";
    
    echo "<br>";

    echo "<-------------------------------------------------------------------------------------->";

    echo "<br>";
    
    echo "<br>";

    echo "Ejercicio 3 - Dada una nota (0-10), muestra si está aprobado (≥4.5) o suspenso:";

    echo "<br>";

    echo "<br>";

    $nota = 5;

    if ($nota >= 0 && $nota <= 10) { //Se comprueba si la nota está entre 0 y 10.

        if ($nota >= 4.5) {

            echo "La asignatura esta aprobada.";

        } else {

            echo "La asignatura esta suspendida.";

        }

    } else {

        echo "La nota debe estar entre uno y diez.";

    }

    echo "<br>";
    
    echo "<br>";

    echo "<-------------------------------------------------------------------------------------->";

    echo "<br>";
    
    echo "<br>";

    echo "Ejercicio 4 - Según un número del 1 al 7, muestra el nombre del día de la semana correspondiente:";

    echo "<br>";

    echo "<br>";

    $dia = 1;

    switch ($dia) { // La variable $dia controla el día que se muestra.

        case 1:
            echo "Lunes.";
            break;

        case 2:
            echo "Martes.";
            break;

        case 3:
            echo "Miercoles.";
            break;

        case 4:
            echo "Jueves.";
            break;
        
        case 5:
            echo "Viernes.";
            break;

        case 6:
            echo "Sabado.";
            break;

        case 7:
            echo "Domingo";
            break;

        default:
            echo "Ese no es un dia de la semana";
            break;

    }

    echo "<br>";
    
    echo "<br>";

    echo "<-------------------------------------------------------------------------------------->";

    echo "<br>";
    
    echo "<br>";

    echo "Ejercicio 5 - Determina si un año es bisiesto o no:";

    echo "<br>";
    
    echo "<br>";

    $ano = 1984;

    if( $ano % 4 == 0 || $ano % 100 == 0 || $ano % 400 == 0 ) { // Esta operación se debe realizar para determinar si un año es bisiesto o no.

        echo "El año $ano es bisiesto.";

	} else {
    	
        echo "El año $ano no es bisiesto.";
        
    }

    echo "<br>";
    
    echo "<br>";

    echo "<-------------------------------------------------------------------------------------->";

    echo "<br>";
    
    echo "<br>";

    echo "Ejercicio 6 - Escribe un programa que determine si dos números son par o impar, si ambos son par suma y multiplica los números, en cambio resta y divídelos:";

    echo "<br>";

    echo "<br>";

    $numero1 = 2;

    $numero2 = 2;

    $suma = 0;

    $resta = 0;

    $multiplicacion = 0;

    $division = 0;

    if ( $numero1 % 2 == 0 && $numero2 % 2 == 0 ) { //Si los dos números son pares, se suma y se multiplica, sino se multiplican y se dividen los números.

        $suma = $numero1 + $numero2; 
        $resta = $numero1 - $numero2;

        echo "La suma es $suma";
        echo "<br>";
        echo "<br>";
        echo "La resta es $resta";

    } else {

        $multiplicacion = $numero1 + $numero2;
        $division = $numero1 / $numero2;

        echo "La suma es $suma";
        echo "<br>";
        echo "<br>";
        echo "La resta es $resta";

    }

    echo "<br>";
    
    echo "<br>";

    echo "<-------------------------------------------------------------------------------------->";

    echo "<br>";
    
    echo "<br>";

    echo "Ejercicio 7 - Aplica descuento del 20% al precio de un producto si es menor de 18 años o mayor de 65. Y muestra el valor a pagar por la persona:";

    echo "<br>";

    echo "<br>";

    $precio = 15;

    $edad = 17;

    $preciodescuento = 0;

    if ( $edad < 18 || $edad > 65) { // Se comprueba la edad y se aplica el descuento si es mayor de 65 o menor de 18.

        $preciodescuento = $precio - (($precio * 20)/100);

        echo "El total a pagar con descuento es $preciodescuento";

    } else {

        echo "El total a pagar es $precio";
        
    }


    echo "<br>";
    
    echo "<br>";

    echo "<-------------------------------------------------------------------------------------->";

    echo "<br>";
    
    echo "<br>";

    echo "Ejercicio 8 - Clasifica una nota en: Suspenso (0-4), Aprobado (5-6), Notable (7-8), Sobresaliente (9-10):";

    echo "<br>";

    echo "<br>";

    $nota = 10;

    if ($nota >=0 && $nota <= 10) { //Se comprueba si la nota está entre 0 y 10.

        if ($nota >= 0 && $nota <= 4) { //Se aplica a cada nota una categoría.

            echo "La nota $nota es un suspenso.";

        } else if ($nota >= 5 && $nota <= 6) {

            echo "La nota $nota es un aprobado.";

        } else if ($nota >= 7 && $nota <= 8 ) {

            echo "La nota $nota es notable.";

        } else {

            echo "La nota $nota es sobresaliente.";

        }
    
    } else {

        echo "La nota $nota tiene que estar entre cero y 10";

    }

    echo "<br>";
    
    echo "<br>";

    echo "<-------------------------------------------------------------------------------------->";

    echo "<br>";
    
    echo "<br>";

    echo "Ejercicio 9 - Dados tres números, ordénalos de mayor a menor:";

    echo "<br>";

    echo "<br>";
	
    $numero1 = 5;
	$numero2 = 3;
    $numero3 = 1;

    if ($numero1 > $numero2 && $numero1 > $numero3) { //Se comprueba el orden de los números.

    	echo "$numero1";

       	if ($numero2 > $numero3) {
        	
            echo "$numero2$numero3";
            
        } else {
        	
            echo "$numero3$numero2";
            
        }

    }
    
    if ($numero2 > $numero1 && $numero2 > $numero3) { //Se repite la comprobación hasta tres veces.

    	echo "$numero2";

       	if ($numero1 > $numero3) {
        	
            echo "$numero1$numero3";
            
        } else {
        	
            echo "$numero3$numero1";
            
        }

    }
    
    if ($numero3 > $numero1 && $numero3 > $numero2) {

    	echo "$numero3";

       	if ($numero1 > $numero3) {
        	
            echo "$numero1$numero3";
            
        } else {
        	
            echo "$numero2$numero1";
            
        }

    }

    echo "<br>";
    
    echo "<br>";

    echo "<-------------------------------------------------------------------------------------->";

    echo "<br>";
    
    
    echo "<br>";

    echo "Ejercicio 10 - Muestra todos los números pares entre 1 y 50:";

    echo "<br>";

    echo "<br>";

    $numero = 1;

    while ($numero <= 50) { //Se usa un bucle while para imprimir todos los numeros de 1 a 50.

        if ($numero % 2 == 0){
            
            echo "$numero ";
        
        }
        
        $numero++; //Se incrementa el contador para salir del bucle.
    }

    echo "<br>";
    
    echo "<br>";

    echo "<-------------------------------------------------------------------------------------->";

    echo "<br>";
    
    echo "<br>";

    echo "Ejercicio 11 - Cuenta cuántos dígitos tiene un número ingresado por el usuario:";

    echo "<br>";

    echo "<br>";

    $numero = 5000;

    $digitos = 0;

    if ($numero == 0) { //Se comprueba si el número es igual a 0.

        echo "El numero tiene 1 digito.";

    } else {

        while($numero > 1) { //Se comprueba que el número sea mayor que uno.
        
            $numero = $numero / 10; //Se divide el numero entre 10 para comprobar los dígitos.
    	    $digitos++; //Se suman los dígitos de la división entre 10.
        
        }

    }
            
    echo "Este numero tiene $digitos digitos.";

    echo "<br>";
    
    echo "<br>";
 

    echo "<-------------------------------------------------------------------------------------->";

    echo "<br>";
    
    echo "<br>";

    echo "Ejercicio 12 - Muestra si un número es primo o no:";

    echo "<br>";

    echo "<br>";

    $numero = 5;
    $primo = 0;
    
    for ($i = 1; $i < $numero; $i++) { //Se comprueban los divisores hasta sí mismo.
        
        if ($numero % $i == 0) {
            
            $primo ++; //Se suman el número de divisores.
        
        }
    }

    if ($primo == 1) { //Se comprueba que el número es primo, si sólo sale un divisor, el uno no se cuenta.

        echo "El numero $numero es primo.";

    } else {
        
        echo "El numero $numero no es primo.";

    }

?>