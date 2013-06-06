<?php
try 
{
	echo 10/0;
}
catch (Exception $e)
{
	echo $e->getMessage(). "<br />\n";
}
/*
Produce la siguiente salida
Warning: Division by zero in C:\servidor\Apache2\htdocs\manejo-errores\ejemplo-simple\ejem1-division-por-cero-parte-2-capturar-error.php on line 4

Y como vemos no se ha producido ningun cambio. Esto es porque, 
efectivamente es un error y no una excepcion.
Como explique en la parte anterior del videotutorial, en PHP5, 
aunque ya existe el manejo de excepciones, la mayoria, por no decir
todas las funciones del lenguajen php, siguen produciendo 
errores en lugar de excepciones.
¿como lo solucionamos?, ver siguiente ejemplo
 */
?>