<?php
include'conexao.php';
$id =$_REQUEST['txtcodigo'];
$sql ="delete from produto where id = $id";
if(mysqli_query($con,$sql))
{echo"Produto excluído com sucesso!";}

else

{$erro =mysqli_error($con);echo"Erro : $erro";}

mysqli_close($con);