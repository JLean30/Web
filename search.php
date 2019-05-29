<?php

namespace Medoo;
require 'Medoo.php';

$database = new Medoo([
    'database_type' => 'mysql',
    'database_name' => 'ai_2018',
    'server' => 'localhost',
    'username' => 'root',
    'password' => ''

]);

//Variable vacía (para evitar los E_NOTICE)
$mensaje = "";

//Variable de búsqueda
if(isset($_GET['valorBusqueda'])){
	$consultaBusqueda = $_GET['valorBusqueda'];
	//Filtro anti-XSS
$caracteres_malos = array("<", ">", "\"", "'", "/", "<", ">", "'", "/");
$caracteres_buenos = array("& lt;", "& gt;", "& quot;", "& #x27;", "& #x2F;", "& #060;", "& #062;", "& #039;", "& #047;");
$consultaBusqueda = str_replace($caracteres_malos, $caracteres_buenos, $consultaBusqueda);

}



//Comprueba si $consultaBusqueda está seteado
if (isset($consultaBusqueda)) {

	$results = $database->select("tb_recipes", "*",[
		"recipe_name[~]" => $consultaBusqueda
	]);
	
	//Obtiene la cantidad de filas que hay en la consulta
	$filas = count($results);

	//Si no existe ninguna fila que sea igual a $consultaBusqueda, entonces mostramos el siguiente mensaje
	if ($filas === 0) {
		$mensaje = "<p>No hay recetas con ese nombre</p>";
	} else {
		
		//La variable $resultado contiene el array que se genera en la consulta, así que obtenemos los datos y los mostramos en un bucle
		if($results) {
			$nombre = $results[0]["recipe_name"];
			$desc=$results[0]["recipe_desc"];

			$mensaje = '<p>'.$nombre.'</p>
			<p>'.$desc.'</p>';
			
		
			
		};//Fin if $resultados

	}; //Fin else $filas

};//Fin isset $consultaBusqueda

//Devolvemos el mensaje que tomará jQuery
echo $mensaje;
?>