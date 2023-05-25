<?php
include'conexao.php';
$id =$_REQUEST['txtcodigo'];
$nome =$_REQUEST['txtnome'];
$qtd =$_REQUEST['txtqtd'];
$preco =$_REQUEST['txtpreco'];
$sql ="update produto set nome='$nome', "."qtd=$qtd, "."preco=$precowhere id = $id";
$resultado =mysqli_query($con,$sql);echo$resultado;
mysqli_close($con);