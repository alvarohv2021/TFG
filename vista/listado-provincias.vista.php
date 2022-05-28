
<?php

include_once ("../modelo/api.php");
?>
<table>
    <tr>
        <th>Provincias</th>
        <th>Poblacion</th>
        <th>Densidad (hab/㎡)</th>
        <th>Superficie (㎢)</th>
        <th>Numero de ofertas</th>
    </tr>
<?php
for ($i=0; $i < count($provincias); $i++) { 
    $numCasasProvincia=0;
    for ($j=0; $j < count($casas); $j++) { 
        if ($casas[$j]["Provincia"]==$provincias[$i]["id"]) {
            $numCasasProvincia++;
        }
    }
    echo 
    "<tr onclick='myFunction(".$provincias[$i]["id"].")'>
            <td>".$provincias[$i]["Nombre"]."</td>
            <td>".$provincias[$i]["Poblacion"]."</td>
            <td>".$provincias[$i]["Densidad"]."</td>
            <td>".$provincias[$i]["Superficie"]."</td>
            <td>".$numCasasProvincia."</td>
    </tr>
";
}
?>
</table>

<!-- Script para hacer de las filas un link que pasara por el metodo $_GET el id de la provincia clicada-->
<script>
    function myFunction(x){
        window.open("casas-provincia.php?idProvincia="+x)
    }
</script>
<link href="../estilos/styles.css" type="text/css" rel="stylesheet">
