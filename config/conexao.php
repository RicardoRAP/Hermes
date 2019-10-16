<?php 
class Dist1{
	public function EjecutarSQl($pSQL){
		$hostname = "localhost:3307";
		$database = "distribuidor1_hermes";
		$username = "root";
		$password = "";
		$capasiet = mysqli_connect($hostname, $username, $password,$database) or trigger_error(mysql_error(),E_USER_ERROR); 
		mysqli_select_db($capasiet, $database);
		$Log = mysqli_query($capasiet, $pSQL) or die(mysql_error());
		$row_q = mysqli_fetch_assoc($Log);		
		return $row_q;
	}
	
	public function EjecutarSQl2($pSQL){
		$hostname = "localhost:3307";
		$database = "distribuidor1_hermes";
		$username = "root";
		$password = "";
		$capasiet = mysqli_connect($hostname, $username, $password,$database) or trigger_error(mysql_error(),E_USER_ERROR); 
		mysqli_select_db($capasiet, $database);
		/* $Log = mysql_query($pSQL, $game_bb) or die(mysql_error());
		$row_q = mysql_fetch_assoc($Log); */
		$row_q = mysqli_query($capasiet, $pSQL) or die(mysql_error());
		return $row_q;
	} 
}

?>