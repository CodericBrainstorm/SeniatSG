

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
		
		function submitform(){
		var login=document.getElementById('valor1').value;
		var clave=document.getElementById('valor2').value;
		

		if((login=="")){
                        alert('Debe escribir su login para acceder al sistema','Alerta');
			}
                else if((clave=="")){
                        alert('Debe escribir su clave para acceder al sistema ','Alerta');
                }
		else{

				 document.forms["formu"].submit(); 
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
               <div style="width: 940px; height: 50px; padding-top: 30px; float: left; background-color: red;">
                       <span id="fecha" style="float: right;"> <script>fecha()</script> </span>
                 </div>
             </div>
            
             <div class="clear"></div>
  
             <br>
             
             <div class="grid_8 prefix_2 suffix_2">
                 
                 <div id="formulario">
                     

                         <form id="formu" name="formu" method="post" enctype="multipart/form-data"  action="operaciones.php"  target="accion">
                     
                             <fieldset id="form"> 
                         
                             <legend>  Acceso </legend>
                             
                             <ul>
                                 <li style="margin-left: -15px;"> <label> Login <img src="img/user.png"> </label> 
                                    <input type="text" name="login" id="valor1" /> </li>
                                 <li style="margin-left: -15px;"> <label> Clave <img src="img/lock.png"> </label>
                                    <input type="password" name="clave" id="valor2" /> </li>
                               
                             </ul>     

                              
                     
                         <div style=" margin-left: 50px; padding-top: 5px; padding-bottom: 10px; text-align:left;">
                             
                             <a href="javascript:submitform();" class="butunes">Ingresar</a> 
                             <a href="javascript:document.forms['formu'].reset()" class="butunes">Limpiar</a>
                         
                         
                         
                         </div>
                            
<!--                             <div id="olv" style="float: left; margin-left: 100px;"> <a style="float: left;" href="#">Olvido su contraseña</a> </div>-->
                         
                            <div id="resul"> <span id="resultado"></span> </div>
                            
                         </fieldset>
                              <!-- es la funcion tipo boton -->  
                           
                     </form>
                     
                 </div>
                 
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