<?php
session_start();
@include ("cms_functions.php");
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
            
            <link rel="stylesheet" href="css/table_style.css" />
        <!-- formulario -->
 
        
           <script type="text/javascript" language="javascript" src="js/jquery.tools.min.js"></script>
          
            
       <script src="js/jquery.tablePagination.0.4.js"></script>
         <script>
            // execute your scripts when the DOM is ready. this is a good habit
            $(function() {

		$("#hor-minimalist-a #del").click(function() {
                    var img = $(this);
                    var answer = confirm("Desea eliminar este registro?")
                        if (answer){
                               img.parents("tr").fadeOut(function() {
					var id = img.parents("tr").attr("id");
					
					img.data("tooltip").hide();
					$.ajax({
					  url: "eliminaser_us.php?id_planilla="+id
					});
				});
                        }
                      
                    
		// get handle to the current image (trashcan)
			
			
		});
		
		// setup tooltip for a single DIV element
		$("#hor-minimalist-a #del").tooltip({
		// each trashcan image works as a trigger
		tip: '#tooltip1',
		// custom positioning
		position: 'center right',
		// move tooltip a little bit to the right
		offset: [0, 15],
		// there is no delay when the mouse is moved away from the trigger
		delay: 0
		});
		
		$("#hor-minimalist-a #mod").tooltip({
		// each trashcan image works as a trigger
		tip: '#tooltip2',
		// custom positioning
		position: 'center right',
		// move tooltip a little bit to the right
		offset: [0, 15],
		// there is no delay when the mouse is moved away from the trigger
		delay: 0
		});
                
                $("#hor-minimalist-a #pdf").tooltip({
		// each trashcan image works as a trigger
		tip: '#tooltip3',
		// custom positioning
		position: 'center right',
		// move tooltip a little bit to the right
		offset: [0, 15],
		// there is no delay when the mouse is moved away from the trigger
		delay: 0
		});
		
		$('#hor-minimalist-a').tablePagination({});

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
		var login=document.getElementById('valor1').value;
		var clave=document.getElementById('valor2').value;
		

		if((login=="")){
                        jAlert('Debe escribir su login para acceder al sistema','Alerta');
			}
                else if((clave=="")){
                        jAlert('Debe escribir su clave para acceder al sistema ','Alerta');
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
                     <span id="usua" style="float: left;"> <?php echo "Usuario: ".$_SESSION['nomape']; ?></span>   <span id="fecha" style="float: right;"> <script>fecha()</script> </span>
                 </div>
             </div>
               
             <div class="clear"></div>
  
             <br>
             <!-- menuuuu -->
             <div class="grid_12">
                 
                 
                     <ul id="menu">
                         <li>
                             <a id="Reg" href="index_fun.php"> Menu Principal  </a>
                         </li>
                         
                     </ul>
           
                
                 
            </div>
             <div class="clear"></div>
             <!-- opciones -->
             <div class="grid_11 ">
                 
              
						<h1>Listado de Habilitaciones</h1>
                                                
             		<div id="tooltip1" class="tooltips" style="position: absolute; top: 144px; left: 90px; display: none; "> Eliminar </div>
                        <div  id="tooltip2" class="tooltips" style="position: absolute; top: 144px; left: 837.933px; display: none;"> Modificar </div>
                        <div  id="tooltip3" class="tooltips" style="position: absolute; top: 144px; left: 837.933px; display: none;"> Imprimir (PDF) </div>
               
              
                       <!-- <div id="izquierdos"> <a href="noticias_agregar.php" class="addButton"><img src="icons/page_white_edit.png" width="16" height="16">Agregar Noticia</a></div> -->
                       <table id="hor-minimalist-a" summary="Employee Pay Sheet">
                        <thead>
                             <tr>
                           <th scope="col">Contribuyente</th>
                            <th scope="col">Rif</th>
                            <th scope="col">Fecha </th>
                            <th scope="col">Total de Habilitacion (Bs)</th>
                            <th scope="col">Operaciones</th>
                            </tr>
                        </thead>
                        <tbody>
                              <?php
                              lista_planilla_all();
                              ?>
                        </tbody>
                    </table>

             
           
                 
                 
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