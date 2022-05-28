<?php
include_once ("../modelo/api.php");
if(isset($_GET["idCasa"])){

    $idCasa=$_GET["idCasa"];

?>
<?php
}else{
    echo "<h1>No se ha seleccionado ninguna casa</h1>";
}
?>
<link href="../estilos/styles.css" type="text/css" rel="stylesheet">
