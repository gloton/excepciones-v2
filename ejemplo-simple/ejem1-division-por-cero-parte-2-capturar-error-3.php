<?php
//la solucion es usar la funcion http://youtu.be/THqRg5KqAeM?t=3m41s
function exception_error_handler($errno,$errstr,$errfile,$errline)
{
	//el throw lanzara la exepcion, que ahora sera capturada en el catch
	throw new ErrorException($errstr,0,$errno,$errfile,$errline);
}

//esta funcion me permite asignar un manejador que recivira
//los eventos de error, esta funcion(exception_error_handler) la defino antes. 
set_error_handler("exception_error_handler");
try 
{
	echo 10/0;
}
catch (Exception $e)
{
	echo "Se ha producido una excepcion ". $e->getMessage(). "<br />\n";
}

?>