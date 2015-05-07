<?php
@include ("cms_functions.php");
$con=new TECH_MySQL();
$con->Conectar();
	


if (isset($_GET['cedula'])) {
	  
          $id=$_GET['cedula'];

	}else{
		header ("Location: consulta_adm.php"); 
		}


               $sql="Delete from usuarios where cedula=".$id.";";
        
               $query=  $con->Consulta($sql);
?>  