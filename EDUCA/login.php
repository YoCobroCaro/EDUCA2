<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "login";

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if (!$conn) {
   die("No hay conexion... ".mysqli_connect_error());
}
$nombre = $_POST["txtusuario"];
$pass = $_POST["txtpassword"];

$query = mysqli_query($conn, "SELECT * FROM usuarios where usuario = '".$nombre."' and clave = '".$pass."' ");
$nr = mysqli_num_rows($query);

if($nr == 1)
{
    //header ("Location: pagina.html")
echo "BIENVENIDO HDTPM: " .$nombre;
header ("location: NOTAS.html");
}
else if  ($nr == 0)
echo "VAYASE ALV";

?>