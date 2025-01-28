<?php
/**
 * 
 * 2º ASIR I.E.S Doctor Alarcón Santón
 * @author Escribe aquí tu nombre
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Resultado tienda
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="examen.css" title="Color">
</head>

<body>
  <h1>Tienda (Resultado)</h1>
  
<?php
// DEFINICION DE FUNCIONES
// Function muestraysuma
function muestraysuma($a)
{
  $sumatotal=0;
  //modificación 2801 GitHUb
  echo "<table border='1' width='300px'><td>ARTICULO</td><td>PRECIO</td><tr>";
  foreach ($a as $nombre => $precio)
   {
    echo "<td>".$nombre."</td><td> ".$precio."</td></tr>";
    $sumatotal+=$precio;
   }
   echo "<tr><td> TOTAL </td><td>".$sumatotal."</td></tr>";
   echo "</table>";


}

// COMIENZO DEL PROGRAMA PRINCIPAL

if(isset($_GET["articulo"]) && !empty($_GET["articulo"]))
{
$art=$_GET["articulo"];


muestraysuma($art);


}
else
{
echo "Error, existe alguna palabra en blanco ";
}
?>
  <footer>
    <p>Escribe aquí tu nombre</p>
  </footer>
</body>
</html>