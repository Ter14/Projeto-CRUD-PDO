<?php

$nota=[];
$nota[1] = 7;
$nota[2] = 6;
$nota[3] = 8;
$nota[4] = 5;

echo "A nota é = $nota[1] <br>";

$media = ($nota[1]+$nota[2]+$nota[3]+$nota[4])/4;

echo"<hr>";

echo "A média é: ".$media."<br>";
$situacao = $media>=6 ?"Aprovado":"Reprovado";

echo "situacao = ".$situacao."<br>";
echo "<hr>";
?>
