<?php
// Conectando y seleccionado la base de datos  
$dbconn = pg_connect("host=localhost dbname=DB_TRIP user=postgres password=Cronopio2625")
    or die('No se ha podido conectar: ' . pg_last_error());

// Realizando una consulta SQL
$query = 'SELECT * FROM hotelgv.hgv_guests';
$result = pg_query($query) or die('La consulta fallo: ' . pg_last_error());

// Imprimiendo los resultados en HTML
?>
<table style="border: 1; background: #f0f0f0; color: #000" >
<?php	
//echo "<table border='1'>\n";
while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
    echo "\t<tr>\n";
    foreach ($line as $dog) {
        echo "\t\t<td>$dog</td>\n";
    }
    echo "\t</tr>\n";
}
echo "</table>\n";

// Liberando el conjunto de resultados
pg_free_result($result);

// Cerrando la conexión
pg_close($dbconn);
?>