<?php

session_start(); 

@include ("cms_functions.php");
$con=new TECH_MySQL();
$con->Conectar();
	


if (isset($_GET['id_planilla'])) {
	  
          $id=$_GET['id_planilla'];

	}else{
		header ("Location: consulta_us.php"); 
		}


          $resp= eliminar_plan($id);
            $pagesstay="consulta_us.php";
            $sucess="Se ha eliminado el registro satisfactoriamente";
            $error="Ha ocurrido un error con la eliminacion de los datos";
          
          
          if($resp!=""){
              ?>
<script>
                parent.alert("<?php echo $sucess; ?>","Alerta");
      
                 parent.window.location = "<?php echo $pagesstay; ?>";
                 </script>
                 
   <?php
          }
          else{
           ?>
                <script>
		parent.alert("<?php echo $error; ?>","Alerta");
		</script>
          
                <?php
                }
?>