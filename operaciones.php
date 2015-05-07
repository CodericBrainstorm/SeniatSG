<?php
session_start();
@include ("cms_functions.php");

      
  
if (isset($_POST['login']) && isset($_POST['clave'])) {
			
                        $valor= obtener_admin($_POST['login'],$_POST['clave']); 
                        //nvo_user($_POST['cedula'],$_POST['firstname'],$_POST['lastname'],$_POST['email'],$_POST['username'],$_POST['password'],$_POST['estatus']); 

                        //$sucess="Usuario Registrado. ¿Desea Registrar otro Usuario?";
		        //administrador
                        if($valor['id_tipo']==1){
                             $pagesstay="index_adm.php";
                              $_SESSION["nomape"]=$valor["nombre"]." ".$valor["apellido"];
                              $_SESSION["login"]= $valor["login"];
                              $_SESSION["clave"]= $valor["clave"];
                              $_SESSION["id_tipo"]=$valor["id_tipo"];
                                $_SESSION["cedula"]=$valor["cedula"];
                              
                        }
                        // usurios
                        else if($valor['id_tipo']==2){
                              $pagesstay="index_fun.php";
                              $_SESSION["nomape"]=$valor["nombre"]." ".$valor["apellido"];
                              $_SESSION["login"]= $valor["login"];
                              $_SESSION["clave"]= $valor["clave"];
                              $_SESSION["id_tipo"]=$valor["id_tipo"];
                              $_SESSION["cedula"]=$valor["cedula"];
                              
                        }
                        //funcionario
                        else if($valor['id_tipo']==3){
                              $pagesstay="index_us.php";
                              $_SESSION["nomape"]=$valor["nombre"]." ".$valor["apellido"];
                              $_SESSION["login"]= $valor["login"];
                              $_SESSION["clave"]= $valor["clave"];
                              $_SESSION["id_tipo"]=$valor["id_tipo"];
                              $_SESSION["cedula"]=$valor["cedula"];
                              
                        }
                        
                        
                        $sucess="Accediendo al Sistema, Bienvenido ".$_SESSION["nomape"];
                        $error="Ha ocurrido un error. El usuario ".$_POST['login']." no se encuentra registrado";
			$pagegoback="usuarios.php";
                        
                       
                       
			}
    
                        //nuevo usuario
       if(isset($_POST['cedula']) && isset($_POST['nombre']) && isset($_POST['apellido']) && 
            isset($_POST['logins']) && isset($_POST['claves']) && isset($_POST['correo']) && isset($_POST['id_tipo']) ){
       
            $valor=  nvo_user($_POST['cedula'], $_POST['nombre'], $_POST['apellido'], $_POST['logins'], $_POST['claves'], $_POST['correo'], $_POST['id_tipo']);
   
            $pagesstay="registro_adm.php";
            $sucess="Registro realizado satisfactoriamente";
            $error="Ha ocurrido un error con el registro del usuario ".$_POST['logins']."";
	    $pagegoback="usuarios.php";
            
        }
   
               //actualizar usuario
       if(isset($_POST['id_usuario'])){
       
            $valor=  upd_user($_POST['cedula'], $_POST['nombre'], $_POST['apellido'], $_POST['login'], $_POST['clave'], $_POST['correo'], $_POST['id_tipo'],$_POST['id_usuario']);
       
            $pagesstay="consulta_adm.php";
            $sucess="Se han actualizado los datos satisfactoriamente";
            $error="Ha ocurrido un error con el registro del usuario ";
	    $pagegoback="usuarios.php";
       
      }
  
      //nueva planilla
      
      if( isset($_POST['plan'])){
          
		  if(!isset($_POST['desayuno']))
				$_POST['desayuno']=1;
		 
		 if(!isset($_POST['cena'])) 
			   $_POST['cena']=1;
	      
		  if(!isset($_POST['almuerzo']) )
		     $_POST['almuerzo']=1;
		  
   
         
           $valor= crear_planilla($_POST['contrib'],$_POST['rif'], $_POST['vehic'], $_POST['muelle'], $_POST['fec_arr'], 
                                  $_POST['fec_sal'], $_POST['fech'],'107',
                                  $_POST['fec_vis'],$_POST['hora_vis_d'],$_POST['hora_vis_h'],$_POST['tot_hor_vis'],$_POST['tot_vis'],$_POST['ut_vis'], 
                                  $_POST['fec_ope'],$_POST['hora_ope_d'],$_POST['hora_ope_h'],$_POST['tot_hor_ope'],$_POST['tot_ope'],$_POST['ut_ope'],
                                  $_POST['fec_alc'],$_POST['hora_alc_d'],$_POST['hora_alc_h'],$_POST['tot_hor_alc'],$_POST['tot_alc'],$_POST['ut_alc'],
                                  $_POST['fec_des'],$_POST['hora_des_d'],$_POST['hora_des_h'],$_POST['tot_hor_des'],$_POST['tot_desp'],$_POST['ut_des'],
                                  $_POST['fec_otros'],$_POST['puertos'],$_POST['tot_otros'],$_POST['desayuno'],$_POST['almuerzo'],$_POST['cena'],
                                  $_POST['ced'], $_POST['hora1'],$_POST['total']);
           
         
          
           $pagesstay="servicios_usu.php";
           $sucess="Se han registrados los datos  satisfactoriamente";
          $error="Ha ocurrido un error con el registro del usuario ";
		  
      }
      
      
      
      if(isset($_POST['editar'])){
          
		  
		    if(!isset($_POST['desayuno']))
				$_POST['desayuno']=1;
		 
		 if(!isset($_POST['cena'])) 
			   $_POST['cena']=1;
	      
		  if(!isset($_POST['almuerzo']) )
		     $_POST['almuerzo']=1;
		  
           $valor=  actualizar_planilla( $_POST['idplan'], $_POST['contrib'], $_POST['rif'], $_POST['vehic'], $_POST['muelle'], $_POST['fec_arr'], 
                                         $_POST['fec_sal'], $_POST['fech'], $_POST['ut'], $_POST['hora1'],$_POST['total'],
                                         $_POST['fec_vis'],$_POST['hora_vis_d'],$_POST['hora_vis_h'],$_POST['tot_hor_vis'],$_POST['tot_vis'],$_POST['ut_vis'], 
                                         $_POST['fec_ope'],$_POST['hora_ope_d'],$_POST['hora_ope_h'],$_POST['tot_hor_ope'],$_POST['tot_ope'],$_POST['ut_ope'],
                                         $_POST['fec_alc'],$_POST['hora_alc_d'],$_POST['hora_alc_h'],$_POST['tot_hor_alc'],$_POST['tot_alc'],$_POST['ut_alc'],
                                         $_POST['fec_des'],$_POST['hora_des_d'],$_POST['hora_des_h'],$_POST['tot_hor_des'],$_POST['tot_desp'],$_POST['ut_des'],
                                         $_POST['fec_otros'],$_POST['puertos'],$_POST['tot_otros'],$_POST['desayuno'],$_POST['almuerzo'],$_POST['cena']);
          
		 
           $pagesstay="consulta_us.php";
           $sucess="Se han actualizado los datos  satisfactoriamente";
          $error="Ha ocurrido un error con la actualizacion de los datos";
          
      }
      
      
      
      //edita adm
      if(isset($_POST['editar_adm'])){
          
		  
		    if(!isset($_POST['desayuno']))
				$_POST['desayuno']=1;
		 
		 if(!isset($_POST['cena'])) 
			   $_POST['cena']=1;
	      
		  if(!isset($_POST['almuerzo']) )
		     $_POST['almuerzo']=1;
		  
           $valor=  actualizar_planilla( $_POST['idplan'], $_POST['contrib'], $_POST['rif'], $_POST['vehic'], $_POST['muelle'], $_POST['fec_arr'], 
                                         $_POST['fec_sal'], $_POST['fech'], $_POST['ut'], $_POST['hora1'],$_POST['total'],
                                         $_POST['fec_vis'],$_POST['hora_vis_d'],$_POST['hora_vis_h'],$_POST['tot_hor_vis'],$_POST['tot_vis'],$_POST['ut_vis'], 
                                         $_POST['fec_ope'],$_POST['hora_ope_d'],$_POST['hora_ope_h'],$_POST['tot_hor_ope'],$_POST['tot_ope'],$_POST['ut_ope'],
                                         $_POST['fec_alc'],$_POST['hora_alc_d'],$_POST['hora_alc_h'],$_POST['tot_hor_alc'],$_POST['tot_alc'],$_POST['ut_alc'],
                                         $_POST['fec_des'],$_POST['hora_des_d'],$_POST['hora_des_h'],$_POST['tot_hor_des'],$_POST['tot_desp'],$_POST['ut_des'],
                                         $_POST['fec_otros'],$_POST['puertos'],$_POST['tot_otros'],$_POST['desayuno'],$_POST['almuerzo'],$_POST['cena']);
          
		 
           $pagesstay="servicios_adm.php";
           $sucess="Se han actualizado los datos  satisfactoriamente";
          $error="Ha ocurrido un error con la actualizacion de los datos";
          
      }
      
if($valor!="")

{ ?>
        <script>
	
    
      parent.alert("<?php echo $sucess; ?>","Alerta");
      
       parent.window.location = "<?php echo $pagesstay; ?>";

		</script>
	<?php }
	else
		{?> 
          <script>
		parent.alert("<?php echo $error; ?>","Alerta");
		</script>
        <?php }
 
?>
