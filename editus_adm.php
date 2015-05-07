<?php
session_start(); 

          @include ("cms_functions.php");
		  
		   if (isset($_GET['cedula'])) {
				$new=obtener_us($_GET['cedula']);
				}else{
					header ("Location: index_adm.html"); 
					}
         ?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
<!--        CSS estile propio-->
            <link rel="stylesheet" type="text/css" href="css/stile.css"> 
            <link rel="stylesheet" href="css/formularios.css" />
    <!--        esto son el framework 960-->
            <link rel="stylesheet" href="css/reset.css" />
            <link rel="stylesheet" href="css/text.css" />
            <link rel="stylesheet" href="css/960.css" />
            <link rel="stylesheet" href="css/demo.css" />
        
        <!-- formulario -->
        
 <script type="text/javascript" src="http://code.jquery.com/jquery-1.3.1.js"></script>
    
               <script type="text/javascript" src="js/formatos.js"></script>
         
         
            
            <script>
                   jQuery(function($){
                        
                        $.mask.definitions['h']='[VEJ]';
                        $("#cedula").mask("h-99.999.999");
                        
                     }); 
            </script>
                
         <!-- <script type="text/javascript" language="javascript" src="js/jquery.tools.min.js"></script> -->
        
           <link rel="stylesheet" href="css/jquery.alerts.css" />
           <script type="text/javascript" src="js/jquery.alerts.js"></script>
           <script type="text/javascript" src="js/fecha.js"></script>
        
  
                <link rel="stylesheet" href="css/time.css" />
                <script type="text/javascript" src="js/time.js"></script>   
    
    <script>
		
		function submitform(){
		var cedula=document.getElementById('cedula').value;
		var nombre=document.getElementById('nombre').value;
                var apellido=document.getElementById('apellido').value;
                var login=document.getElementById('login').value;
                var clave=document.getElementById('clave').value;
                var correo=document.getElementById('correo').value;
                var tipo=document.getElementById('tipo').value;
		
                
                if((cedula=="") && (nombre=="") && (apellido=="") && (login=="") && (clave=="") && (correo=="")){
                        alert('Debe escribir todos los datos para poder registrarse en el sistema','Alerta');
                }
                
		else if((cedula=="")){
                        alert('Debe escribir una cedula','Alerta');
			}
                else if((nombre=="")){
                        alert('Debe escribir un nombre ','Alerta');
                }
                else if((apellido=="")){
                        alert('Debe escribir un apellido ','Alerta');
                }
                else if((login=="")){
                        alert('Debe escribir un login para poder registrarse','Alerta');
                }
                 else if((clave=="")){
                        alert('Debe escribir un clave','Alerta');
                }
                 else if((correo=="")){
                        alert('Debe escribir un correo para poder registrarse','Alerta');
                }
                   else if(tipo==0){
                        alert('Debe seleccionar un tipo de usuario','Alerta');
                }
         
		else{

				 document.forms["form_reg"].submit(); 
			}
		} 
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
               
                  <div style="width: 940px; float: left; background-color: red;">
                      <span id="fecha" style="float: right;"> <script>fecha()</script> </span>
                 </div>
             </div>
               
             <div class="clear"></div>
  
             <br>
             <!-- menuuuu -->
             <div class="grid_12">
                 
                 
                     <ul id="menu">
                         <li>
                             <a id="Reg" href="index_adm.php"> Menu Principal  </a>
                         </li>
                         
                     </ul>
           
                
                 
            </div>
             <div class="clear"></div>
             <!-- opciones -->
             <div class="grid_11 ">
                 
               <div class="contenido">
						<h1>Nueva Noticia</h1>
                                                
             <form style="width:100%;" id="addnew" name="form_reg" method="post" enctype="multipart/form-data" action="operaciones.php" target="accion">
		
               
		<fieldset class="login">
			<legend>Planilla de Registro</legend>
                        <div style="margin-left: 70px;">
                        
			<div>
				<label >Cedula: </label> <input type="text" id="cedula" name="cedula"  style="width:20%; " value="<?php echo $new['cedula']; ?>">
			</div>
            	        <div>
				<label >Nombre: </label> <input type="text" id="nombre" name="nombre"  style="width:60%; " value="<?php echo $new['nombre']; ?>">
			</div>
                         <div>
				<label >Apellido: </label> <input type="text" id="apellido" name="apellido"  style="width:60%; " value="<?php echo $new['apellido']; ?>">
			</div>
                        <div>
				<label >Login: </label> <input type="text" id="login" name="login" style="width:80px; "  value="<?php echo $new['login']; ?>">
			</div>
                         <div>
                             <label >  Clave: </label> <input type="text" id="clave" name="clave"  style="width:80px; " value="<?php echo $new['clave']; ?>">
			
                         
			</div>
                        <div>
			  <label >Correo: </label> <input type="text" id="correo" name="correo"  style="width:25%; " value="<?php echo $new['correo']; ?>">
                          
			</div>
                            
                            
                            
                            
                            <div>
			  <label >Tipo de Usuario: </label>  
                                 <select name="id_tipo" id="tipo">
                                     <option value="0">Seleccione</option>
                                     <option value="1" <?php if($new['id_tipo']==1){echo "selected";} ?> >Administrador</option>
				     <option value="2" <?php if($new['id_tipo']==2){echo "selected";} ?> >Usuario</option> 
                                      <option value="3" <?php if($new['id_tipo']==3){echo "selected";} ?> >Funcionario</option> 
                                 
                                 </select>
			</div>
                        </div>
                        
               
                        
                   <input name="id_usuario" type="hidden" value="<?php echo $new['id']; ?>">
            

		<div style=" padding-top:15px; text-align:center;">
                    <a href="javascript:submitform();" class="submit">Guardar</a>
                    <a href="javascript:document.forms['form_reg'].reset()" class="submit">Limpiar</a>
                </div>
 </fieldset>
             </form>
             </div>
                 
                 
             </div>
             <div class="clear"></div>
           
             <div class="grid_12">
                 <div style="width: 940px; float: left; background-color: red;">
                     <br>
                 </div>
             </div>
                     
        </div>
      
 <iframe name="accion"  ></iframe>
     
    </body>
</html>