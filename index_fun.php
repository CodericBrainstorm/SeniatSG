<?php

session_start(); 

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
        
      <script>
          $(document).ready(function(){
                    $("#Reg1").animate({
                               'margin-left':'15px'
                    },1300);
                         $("#Reg2").animate({
                                'margin-left':'140px'
                    },1300);
                         $("#Reg3").animate({
                                'margin-left':'  550px'
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
                     <span id="usua" style="float: left;"> <?php echo "Bienvenido: ".$_SESSION['nomape']; ?></span>   <span id="fecha" style="float: right;"> <script>fecha()</script> </span>
                 </div>
             </div>
               
          
             <div class="clear"></div>
             <br>
             <!-- menuuuu -->
             <div class="grid_12">
                 
                 <h1>Menu Principal</h1> 
                    
                     <ul id="menu" style="float: left; margin-top: 0px; margin-left: 70px; margin-bottom: 30px;">
                       
                          <li>
                             <a id="Reg2" href="consulta_fun.php"> Consultar Servicios  </a>
                         </li>
                          <li>
                             <a id="Reg3" href="logout.php"> Salir </a>
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