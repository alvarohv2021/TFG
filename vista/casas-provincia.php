<?php
include_once ("../modelo/api.php");
if(isset($_GET["idProvincia"])){

    $idProvincia=$_GET["idProvincia"];
    $hayCasas=false;
echo "<table>
        <tr>
            <th>Tipo</th>
            <th>Habitaciones</th>
            <th>Descripcion</th>
            <th>Metros_cuadrados</th>
            <th>Precio</th>
            <th>Oferta</th>
        </tr>";
    for ($i=0; $i < count($casas); $i++) { 
        # code...
        if ($casas[$i]["Provincia"]==$idProvincia) {
            # code...
            echo 
            "<tr id=".$casas[$i]["id"]." onclick='myFunction(this)'>
                <td>".$casas[$i]["Tipo"]."</td>
                <td>".$casas[$i]["Habitaciones"]."</td>
                <td>".$casas[$i]["Descripcion"]."</td>
                <td>".$casas[$i]["Metros_cuadrados"]."㎡</td>
                <td>".$casas[$i]["Precio"]."€</td>
                <td>".$casas[$i]["Oferta"]."</td>
            </tr>";
            $hayCasas=true;
        }else{
            
        }
        
    }
    echo "</table>";
    if (!$hayCasas) {
        # code...
        echo "<h1>No se encuentran ofertas en esta provincia</h1>";
    }
?>
<?php
}else{
    echo "<h1>No se ha seleccionado ninguna provincia</h1>";
}
?>
<link href="../estilos/styles.css" type="text/css" rel="stylesheet">