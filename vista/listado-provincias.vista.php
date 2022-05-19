
<?php

include_once ("../modelo/api.php");
?>
<table>
    <tr>
        <th>Provincias</th>
        <th>Poblacion</th>
        <th>Densidad (hab/㎡)</th>
        <th>Superficie (㎢)</th>
    </tr>
<?php
for ($i=0; $i < count($provincias); $i++) { 
    echo 
    "<tr id=".$provincias[$i]["id"]." onclick='myFunction(this)'>
            <td>".$provincias[$i]["Nombre"]."</td>
            <td>".$provincias[$i]["Poblacion"]."</td>
            <td>".$provincias[$i]["Densidad"]."</td>
            <td>".$provincias[$i]["Superficie"]."</td>
    </tr>
";
}
?>
</table>

<!-- Script para hacer de las filas un link que pasara por el metodo $_GET el id de la provincia clicada-->
<script>
    function myFunction(x){
        window.open("casas-provincia.php?idProvincia="+x.rowIndex)
    }
</script>
<link href="../estilos/styles.css" type="text/css" rel="stylesheet">