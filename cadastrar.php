<?php
include'conexao.php';
 $nome =$_REQUEST['txtnome'];
 $qtd =$_REQUEST['txtqtd'];
 $preco =$_REQUEST['txtpreco'];
 $sql ="insert into produto values (default,'
 $nome',$qtd, $preco)";
 $resultado =mysqli_query($con,$sql);mysqli_close($con);?>