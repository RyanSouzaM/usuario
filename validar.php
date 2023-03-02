<?php
$Usuario = $_POST["Usuario"];
$Senha = $_POST["Senha"];

if($Usuario == "ryan" && $Senha == "123"){
    header("location: usuario-valido.php");
}else{
    header("location: usuario-invalido.php");

}

?>

