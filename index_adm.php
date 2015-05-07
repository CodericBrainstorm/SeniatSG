<?php
session_start();
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
<!--        CSS estile propio-->
        <link rel="stylesheet" type="text/css" href="css/stile.css"> 
<!--        esto son el framework 960-->
        <link rel="stylesheet" href="css/reset.css" />
        <link rel="stylesheet" href="css/text.css" />
        <link rel="stylesheet" href="css/960.css" />
        <link rel="stylesheet" href="css/demo.css" />
        
           <script type="text/javascript" language="javascript" src="js/jquery.tools.min.js"></script>

           <script type="text/javascript" src="js/fecha.js"></script>
      
  
           <script>
               function basededatos(){
                   alert(" --- Realizando Respaldo de la Base de Datos ---");
                   document.forms["bd"].submit(); 
               }
           </script>
    
    <script>
		
		function submitform(){
		var cedula=document.getElementById('cedula').value;
		var nombre=document.getElementById('nombre').value;
                var apellido=document.getElementById('apellido').value;
                var login=document.getElementById('login').value;
                var clave=document.getElementById('clave').value;
                var correo=document.getElementById('correo').value;
		
                
                if((cedula=="") || (nombre=="") || (apellido=="") || (login=="") || (clave=="") || (correo=="")){
                        jAlert('Debe escribir estos datos para poder registrarse en el sistema','Alerta');
                }
                
		else if((cedula=="")){
                        jAlert('Debe escribir una cedula','Alerta');
			}
                else if((nombre=="")){
                        jAlert('Debe escribir un nombre ','Alerta');
                }
                else if((apellido=="")){
                        jAlert('Debe escribir un apellido ','Alerta');
                }
                else if((login=="")){
                        jAlert('Debe escribir un login para poder registrarse','Alerta');
                }
                 else if((clave=="")){
                        jAlert('Debe escribir un clave','Alerta');
                }
                 else if((correo === " ")){
                        jAlert('Debe escribir un correo para poder registrarse','Alerta');
                }
         
		else{

				 document.forms["formu"].submit(); 
			}
		} 
                </script>
        
      <script>
          $(document).ready(function(){
                    $("#Reg_adm1").animate({
                               'margin-left':'15px'
                    },1300);
                         $("#Reg_adm2").animate({
                                'margin-left':'25px'
                    },1300);
                      $("#Reg_adm3").animate({
                                'margin-left':'  700px'
                    },1300);
                     $("#Reg_adm4").animate({
                                'margin-left':'  900px;'
                       
                    },1300);
                     $("#Reg_adm5").animate({
                                'margin-left':'  900px;'
                       
                    },1300);
         
          });
 </script>
        
    </head>
    <body>
        
<!--        contenedor principal-->
        <div class="container_12">
            
             <div class="grid_12">
                
                 <img src="img/header1.jpg" alt="Venezuela"> 
                
                 <div id="franja">
                     
                 
                
                         <img id="img_izq" src="img/logocr.gif" alt="seniat" >
                 </div>
               
                  <div style="width: 940px; height: 50px; padding-top: 30px; float: left; background-color: red;">
                     <span id="usua" style="float: left;"> <?php echo "Bienvenido: ".$_SESSION['nomape']; ?></span>   <span id="fecha" style="float: right;"> <script>fecha();</script> </span>
                 </div>
             </div>
               
             <div class="clear"></div>
  
             <br>
             <!-- menuuuu -->
             <div class="grid_12">
                 
                 <h1>Menu Principal</h1>
                    
                     <ul id="menu_adm" style="float: left; padding-top: 10px; padding-bottom: 10px; margin-left: 72px; margin-bottom: 30px;">
                         <li>
                             <a id="Reg_adm1" href="registro_adm.php"> Registrar Usuarios  </a>
                         </li>
                          <li>
                             <a id="Reg_adm2" href="consulta_adm.php"> Consultar Usuarios  </a>
                         </li>
                         <li>
                             <a id="Reg_adm3" href="servicios_adm.php"> Consultar Servicios  </a>
                         </li>
                         <li>
                              <form style="width:100%;" id="addnew" name="bd" method="post" enctype="multipart/form-data" action="basededatos.php" target="accion">
                                <a id="Reg_adm4" href="javascript:basededatos();"> Guardar Base de Datos </a>
                              </form>
                             </li>
                          <li>
                             <a id="Reg_adm5" href="logout.php"> Salir </a>
                         </li>
                         
                     </ul>
                          
                    
                     
                  
                          
                    
                
                 
                
                 
            </div>
             
           
 
             <div class="clear"></div>
           
             <div class="grid_12">
                 <div style="width: 940px; height: 50px; padding-top: 20px; float: left; background-color: red;">
                     <span style="color: white; float: left; margin-top: 8px; margin-left: 280px; " > Republica Bolivariana de Venezuela, Barcelona - Edo Anzoategui 2013</span>
                 </div>
             </div>
                     
        </div>
        
 <iframe name="accion"  ></iframe>
     
    </body>
</html>
