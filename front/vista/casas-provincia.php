<head>
    <title>Lista de casas</title>
    <link href="../estilos/styles.css" type="text/css" rel="stylesheet">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
    <style>
        .container{
            border: 15px solid #7ebdc2ff;
        }
        .row>div{
            background-color: #efe6ddff;
        }
    </style>
</head>
<?php
include_once ("../modelo/api.php");
if(isset($_GET["idProvincia"])){

    $idProvincia=$_GET["idProvincia"];
    $hayCasas=false;
    for ($i=0; $i < count($casas); $i++) { 
        if ($casas[$i]["Provincia"]==$idProvincia) {
            echo 
            "<div class='container'>
            <div class='row'>
                <div class='col-3'>
                    <p>Carrousel</p>
                </div>
                <div class='col-6'>
                    <div class='row'>
                        <div class='col-12'>
                           <a href='casa.php?idCasa=".$casas[$i]["id"]."'><p>".$casas[$i]["Descripcion"]."</p></a>
                        </div>
                        <div class='col-12'>
                            <p>Descripcion</p>
                        </div>
                    </div>
                </div>
                <div class='col-3'>
                    <div class='row'>
                        <div class='col-12'>
                            <p>".$casas[$i]["Tipo"]."/".$casas[$i]["Oferta"]."</p>
                        </div>
                        <div class='col-12'>
                            <p>".$casas[$i]["Precio"]."€</p>
                        </div>
                        <div class='col-6'>
                            <p>".$casas[$i]["Habitaciones"]." hab.</p>
                        </div>
                        <div class='col-6'>
                            <p>".$casas[$i]["Metros_cuadrados"]." ㎡</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>";
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
