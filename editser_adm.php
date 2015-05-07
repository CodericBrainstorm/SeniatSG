<?php
session_start(); 

          @include ("cms_functions.php");
		  
		   if (isset($_GET['id_planilla'])) {
				$plan= obtener_plan($_GET['id_planilla']);
                                $vis=  obtener_vis($_GET['id_planilla']);
                                $ope=  obtener_ope($_GET['id_planilla']);
                                $des= obtener_des($_GET['id_planilla']);
                                $alc=  obtener_alc($_GET['id_planilla']);
                                $otros=  obtener_otros($_GET['id_planilla']);
                                
                                
				}else{
					header ("Location: index_adm.php"); 
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
          
       <script src="js/jquery19.js"></script> 
      
       
    
            <link rel="stylesheet" href="css/jqueryui.css" />         
            
           
          
            <script src="js/jqueryui.js"></script> 
            
       
                 
               <script type="text/javascript" src="js/formatos.js"></script>
         
         
            
            <script>
                   jQuery(function($){
                        
                        $.mask.definitions['h']='[VEJ]';
                        $("#rif").mask("h-99.999.999-9");
                        
                     }); 
            </script>
                
               
               
        
            <script>
            $(function() {
            $( "#fec_sal" ).datepicker();
            $( "#fec_arr" ).datepicker();
             $( "#fech" ).datepicker();
             $( "#fec_vis" ).datepicker();
             $( "#fec_ope" ).datepicker();
             $( "#fec_alc" ).datepicker();
             $( "#fec_des" ).datepicker();
             $( "#fec_otros" ).datepicker();
            });
            </script>
        
            <script>
             $(function() {
           $("#hora1").timepicker({
                showPeriod: true,
                showLeadingZero: true
            });
            
              $("#hora_vis_d").timepicker({
                showPeriod: true,
                showLeadingZero: true
            });
            
              $("#hora_vis_h").timepicker({
                showPeriod: true,
                showLeadingZero: true
            });
            //operaciones fecha
              $("#hora_ope_d").timepicker({
                showPeriod: true,
                showLeadingZero: true
            });
              $("#hora_ope_h").timepicker({
                showPeriod: true,
                showLeadingZero: true
            });
            //alcabala
              $("#hora_alc_d").timepicker({
                showPeriod: true,
                showLeadingZero: true
            });
              $("#hora_alc_h").timepicker({
                showPeriod: true,
                showLeadingZero: true
            });
            //despacho
              $("#hora_des_d").timepicker({
                showPeriod: true,
                showLeadingZero: true
            });
              $("#hora_des_h").timepicker({
                showPeriod: true,
                showLeadingZero: true
            });
            //otros
              $("#hora_otros_d").timepicker({
                showPeriod: true,
                showLeadingZero: true
            });
              $("#hora_otros_h").timepicker({
                showPeriod: true,
                showLeadingZero: true
            });
});
            </script>
         <!-- <script type="text/javascript" language="javascript" src="js/jquery.tools.min.js"></script> -->

         
           <script type="text/javascript" src="js/fecha.js"></script>
        
  
                <link rel="stylesheet" href="css/time.css" />
                <script type="text/javascript" src="js/time.js"></script>   
    
    <script>
		
		function submitform(){
		var con=document.getElementById('contrib').value;
		var rif=document.getElementById('rif').value;
		var veh=document.getElementById('vehic').value;
                var mue=document.getElementById('muelle').value;
                var fecsal=document.getElementById('fec_sal').value;
                var fecarr=document.getElementById('fec_arr').value;
                var horap=document.getElementById('hora1').value;
                var fecha=document.getElementById('fech').value;

		if((con=="") && (rif=="") && (veh=="") && (mue=="") && (fecsal=="") && (fecarr=="") && (horap=="") && (fecha=="")){
                        alert('Debe ingresar todos los datos correspondiente en la planilla','Alerta');
			}
                else{

                        var answer = confirm("Desea modificar este registro?");
                        
                                if(answer)
				 document.forms["addnew"].submit(); 
                                
                                  
                    }
		} 
                </script>
        
                
                <!-- calcular hora -->
                <script>
                    
                    function calc_hora(id1, id2, mostrar){
                        var hora1=document.getElementById(id1).value;
                        var hora2=document.getElementById(id2).value;
                        var ho2=0;
                        var ho1=0;
                        
                        var tmp1;
                        var tmp2;
                        
                        var totalh=0;
                        
                            var a_hor1=hora1.split(" ");
                            var a_hor2=hora2.split(" ");
                            
                               if(a_hor1[1]=="AM"){
                                     var h1=a_hor1[0].split(":");
                                       ho1= parseFloat(h1[0]);
                                      
                                       tmp1=ho1;
                                       
                                       if(tmp1==12){
                                            tmp1=0;
                                        }
                                     
                                      
                                        
                               }else if(a_hor1[1]=="PM"){
                                     
                                      var h1=a_hor1[0].split(":");
                                        ho1=parseFloat(h1[0]);
                                        
                                        tmp1=ho1;
                                        
                                       if(tmp1==12){
                                            tmp1=ho1;
                                        }
                                        else{
                                            tmp1=ho1+12;
                                        }
                                      
                               }
                               
                               if(a_hor2[1]=="AM"){
                                    
                                        var h2=a_hor2[0].split(":");
                        
                                        ho2= parseFloat(h2[0]); 
                                         tmp2=ho2; 
                                         if(tmp2==12){
                                            tmp2=0;
                                         }
                                        
                                        
   
                               }else if(a_hor2[1]=="PM"){
                                      
                                       var h2=a_hor2[0].split(":");
                                   
                                       ho2=parseFloat(h2[0]);
                                       
                                       tmp2=ho2;
              
                                       if(tmp2==12){
                                            tmp2=ho2;
                                           
                                        }else{
                                            tmp2=ho2+12;
                                        }
                                      
                           
                                       
                               }
                              
                
                              
                              
                              if( tmp1 < tmp2 && a_hor1[1]==a_hor2[1]){
                                  totalh= tmp2 - tmp1;
                                  document.getElementById(mostrar).value= totalh;
                                  
                              }
                              else  if( tmp1 < tmp2 && a_hor1[1]!=a_hor2[1]){
                                  totalh= tmp2 - tmp1 ;
                                  document.getElementById(mostrar).value= totalh;
                                
                              }
                              else if(tmp1==tmp2){
                                  totalh= tmp2;
                                  document.getElementById(mostrar).value=totalh;
                              }
                               else  if( tmp1 > tmp2 && a_hor1[1]!=a_hor2[1]){
                                  totalh= tmp1 ;
                                  document.getElementById(mostrar).value= totalh;
                              }
                              else if(tmp1==null){
                                  alert ("Debe ingresar Hora(Desde) ");
                              }
                              else{
                                  alert ("No ha colocado correctamente las horas");
                              }
                        
                        
                    }
                    
                </script>
                
    <script>
           function calc_ut(id1,id2,id3){
           
                        var seleccion=document.getElementById(id1).value;
                        var res=document.getElementById(id3).value;
                        var ut=107;
                        var total1=0;
                        var totalt=0;
                        
                        
                        if(seleccion==0){
                              alert("Ingrese la cantidade de Unidad de Tributarias validas");
                        }
                        else{
                             total1= ut * parseInt(seleccion);
                             totalt=total1*res;
                             document.getElementById(id2).value= parseInt(totalt);
                        }
                       
                        
                        
            
           }
           
          function otros_gastos(puerto){
              var puertos=document.getElementById(puerto).value;
              var kmxbs = parseFloat(1.15);
              var t=0;
              var costo;
              var total=0;
              
              var des=document.getElementById("desayuno");
              var alm=document.getElementById("almuerzo");
              var cen=document.getElementById("cena");
              
              costo= parseFloat(puertos) *  kmxbs;
              
              
               if(des.checked==true && alm.checked==true && cen.checked==true){
                       t= parseFloat(des.value)+parseFloat(alm.value)+parseFloat(cen.value);
                       total=t+costo;    
               }
               else if(des.checked==true && alm.checked==true){
                       t= parseFloat(des.value)+parseFloat(alm.value);
                       total=t+costo;    
               }
               else if(des.checked==true && cen.checked==true){
                       t= parseFloat(des.value)+parseFloat(alm.value);
                       total=t+costo;    
               }
               else if(alm.checked==true && cen.checked==true){
                       t= parseFloat(alm.value)+parseFloat(cen.value);
                       total=t+costo;    
               }
               else if(des.checked==true){
                       t= parseFloat(des.value);
                       total=t+costo;    
               }
               else if(alm.checked==true){
                       t= parseFloat(alm.value);
                       total=t+costo;    
               }  
                else if(cen.checked==true){
                       t= parseFloat(cen.value);
                       total=t+costo;    
               } 
               else{
                   total=costo;
               }
             document.getElementById("tot_otros").value=parseFloat(total);
              
              
          }
    </script>
      
    <script>
          function total(total){
              var total1=document.getElementById("tot_vis").value;
                var total2=document.getElementById("tot_ope").value;
                   var total3=document.getElementById("tot_alc").value;
                      var total4=document.getElementById("tot_desp").value;
                         var total5=document.getElementById("tot_otros").value;
             
             
              var total=0;
              
             total=parseFloat(total1)+parseFloat(total2)+parseFloat(total3)+parseFloat(total4)+parseFloat(total5);
             
             
             
             if(total1=="" && total2=="" && total3=="" && total4=="" && total5==""){
                  alert("Debe ingresar los campos requeridos");
                 
             }
             else if(total==""){
                   alert("Debe ingresar todos los campos requeridos para el caculo");
             }
             else if(total1=="" || total2=="" || total3=="" || total4=="" || total5==""){
                  alert("Debe ingresar los campos requeridos");
                 
             }
              else{
                    document.getElementById('total_t').value=parseFloat(total);
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
						<h1>Planilla de Habilitacion de Aduana</h1>
                                                
             <form style="width:100%;" id="addnew" name="addnew" method="post" enctype="multipart/form-data" action="operaciones.php" target="accion">
		
               
		<fieldset class="login">
			<legend></legend>
                        <div style="margin-left: 70px;">
                        
			<div>
				<label >Contribuyente: </label> <input type="text" id="contrib" name="contrib" style="width: 180px; " value="<?php echo $plan['contrib']; ?>">
			
                                <div style="float: right; margin-right: 100px; width: 310px; ">
                                    <label >Nº de Rif: </label> <input type="text" id="rif" name="rif" style="width:90px; "  value="<?php echo $plan['rif']; ?>">
                                </div>
                        
                        </div>
            	     
                         <div>
				<label >Vehiculo: </label> <input type="text" id="vehic" name="vehic" style="width: 150px; " value="<?php echo $plan['vehiculo']; ?>">
			
                                <div style="float: right; margin-right: 60px; width: 350px; ">
                                    <label >Muelle: </label> <input type="text" id="muelle" name="muelle" style="width: 150px; " value="<?php echo $plan['muelle']; ?>">
                                </div>
                         
                         </div>
                      
                         <div>
                             <label >Fecha de Salida: </label> <input type="text" class="date" id="fec_sal" name="fec_sal" style="width:120px; " value="<?php echo $plan['fec_arribo']; ?>">
			
                         <div style="float: right; margin-right: 100px; width: 310px;">
                             <label >Fecha de Arribo: </label> <input type="text" class="date" id="fec_arr" name="fec_arr" style="width:120px; " value="<?php echo $plan['fec_salida']; ?>">
			</div>
			</div>
                        
                        <div>
			  <label >Atraco a las: </label>
                              <input type="text" class="hora" id="hora1" name="hora1" style="width:18%; " value="<?php echo $plan['hora']; ?>">
                          <div style="float: right; margin-right:15px; width: 310px; ">
                              <label style="float:left; width: 100px; margin-left: -65px;  "> Dia: </label>
                            <input  type="text" class="date" id="fech" name="fech" style="width:39%; " value="<?php echo $plan['fecha']; ?>">  
                          </div>
			</div>
                            
                        </div>
                        
                </fieldset>
                
                
                <fieldset class="login">
                    <legend>Habilitacion de Aduana</legend>
            	          
                             <div class="tabla">  
                                <p><div class="titulo"> Servicio de Aduana </div><div class="titulo"> Fecha </div><div class="titulo"> Hora(Desde)</div><div class="titulo"> Hora(Hasta)</div><div class="titulo"> Total(Horas)</div> <div class="titulo"> Unidad Tributaria (U.T) </div> <div class="titulo"> Total(Bolivares)</div>  </p>  
                               <!-- visita -->
                               <p><div class="columna"> <p style="padding-top: 12px;">  Visita </p>  </div>
                                            <div class="columna"> <input type="text" class="date" id="fec_vis" name="fec_vis" style="width: 83px; " value="<?php echo $vis['fecha_v'];  ?>"   > </div>
                                            <div class="columna"> <input type="text" class="hora" id="hora_vis_d" name="hora_vis_d" style="width:80px; "  value="<?php echo $vis['hora_v_ini'];  ?>" ></div>
                                            <div class="columna"> <input type="text" class="hora" id="hora_vis_h" name="hora_vis_h" onchange="calc_hora('hora_vis_d','hora_vis_h','tot_hor_vis');" style="width:80px; "  value="<?php echo $vis['hora_v_fin'];  ?>"></div>
                                            <div class="columna"> <input type="text" class="dato" id="tot_hor_vis" name="tot_hor_vis"  style="width:18px; "  value="<?php echo $vis['total_v_horas'];  ?>"></div>
                                            <div class="columna">  
                                                <div>
                                                        <select name="ut_vis" id="ut_vis" style="width: 45px; height: 30px;" onchange="calc_ut('ut_vis','tot_vis','tot_hor_vis');" >
                                                                <option value="0" <?php if($vis['total_v_ut']==0){echo "selected";} ?> >0</option>
                                                                <option value="1"  <?php if($vis['total_v_ut']==1){echo "selected";} ?> >1</option>
                                                                <option value="2"  <?php if($vis['total_v_ut']==2){echo "selected";} ?>>2</option>
                                                                <option value="3"  <?php if($vis['total_v_ut']==3){echo "selected";} ?> > 3</option>
                                                                <option value="4"  <?php if($vis['total_v_ut']==4){echo "selected";} ?> > 4</option>
                                                                <option value="5"  <?php if($vis['total_v_ut']==5){echo "selected";} ?> > 5</option>
                                                                <option value="6"  <?php if($vis['total_v_ut']==6){echo "selected";} ?> > 6</option>
                                                                <option value="7"  <?php if($vis['total_v_ut']==7){echo "selected";} ?> > 7</option>
                                                                <option value="8"  <?php if($vis['total_v_ut']==8){echo "selected";} ?> > 8</option>
                                                                <option value="9"  <?php if($vis['total_v_ut']==9){echo "selected";} ?> > 9</option>
                                                                <option value="10"  <?php if($vis['total_v_ut']==10){echo "selected";} ?> > 10</option>                     
                                                               
                                                          </select>
                                                  </div>
                                            
                                            </div>
                                            <div class="columna"><input type="text" class="otros" id="tot_vis" name="tot_vis" style="width: 50px; "  value="<?php echo $vis['total_v_bs'];  ?>"></div>
                               <!-- visita -->
                                  <p><div class="columna"> <p style="padding-top: 12px;"> Operaciones </p>  </div>
                                       <div class="columna"> <input type="text" class="date" id="fec_ope" name="fec_ope" style="width: 83px; "  value="<?php echo $ope['fecha_o'];  ?>" > </div>
                                       <div class="columna"><input type="text" class="hora" id="hora_ope_d" name="hora_ope_d" style="width:80px; "   value="<?php echo $ope['hora_o_ini'];  ?>" ></div>
                                       <div class="columna"><input type="text" class="hora" id="hora_ope_h" name="hora_ope_h" onchange="calc_hora('hora_ope_d','hora_ope_h','tot_hor_ope');" style="width:80px; "  value="<?php echo $ope['hora_o_fin'];  ?>"  ></div>
                                       <div class="columna"> <input type="text" class="dato" id="tot_hor_ope" name="tot_hor_ope" style="width:18px; " value="<?php echo $ope['total_o_horas'];  ?>" ></div>
                                       <div class="columna">  <div>
                                                        <select name="ut_ope" id="ut_ope" style="width: 45px; height: 30px; " onchange="calc_ut('ut_ope','tot_ope','tot_hor_ope');">
                                                                    <option value="0" <?php if($ope['total_o_ut']==0){echo "selected";} ?> >0</option>
                                                                <option value="1"  <?php if($ope['total_o_ut']==1){echo "selected";} ?> >1</option>
                                                                <option value="2"  <?php if($ope['total_o_ut']==2){echo "selected";} ?>>2</option>
                                                                <option value="3"  <?php if($ope['total_o_ut']==3){echo "selected";} ?> > 3</option>
                                                                <option value="4"  <?php if($ope['total_o_ut']==4){echo "selected";} ?> > 4</option>
                                                                <option value="5"  <?php if($ope['total_o_ut']==5){echo "selected";} ?> > 5</option>
                                                                <option value="6"  <?php if($ope['total_o_ut']==6){echo "selected";} ?> > 6</option>
                                                                <option value="7"  <?php if($ope['total_o_ut']==7){echo "selected";} ?> > 7</option>
                                                                <option value="8"  <?php if($ope['total_o_ut']==8){echo "selected";} ?> > 8</option>
                                                                <option value="9"  <?php if($ope['total_o_ut']==9){echo "selected";} ?> > 9</option>
                                                                <option value="10"  <?php if($ope['total_o_ut']==10){echo "selected";} ?> > 10</option>                       
                                                                
                                                          </select>
                                                  </div></div>
                                       <div class="columna"><input type="text" class="otros" id="tot_ope" name="tot_ope" style="width: 50px; " value="<?php echo $ope['total_o_bs'];  ?>" ></div>
                                 </p>  
                                 <!-- visita -->
                                <p><div class="columna">  Alcabala de Confrontación  </div>
                                
                                   <div class="columna"><input type="text" class="date" id="fec_alc" name="fec_alc" style="width: 83px; "  value="<?php echo $alc['fecha_a'];  ?>" ></div>
                                   <div class="columna"><input type="text" class="hora" id="hora_alc_d" name="hora_alc_d" style="width:80px; "  value="<?php echo $alc['hora_a_ini'];  ?>" ></div>
                                   <div class="columna"><input type="text" class="hora" id="hora_alc_h" name="hora_alc_h" onchange="calc_hora('hora_alc_d','hora_alc_h','tot_hor_alc');" style="width:80px; " value="<?php echo $alc['hora_a_fin'];  ?>"></div>
                                   <div class="columna"> <input type="text" class="dato" id="tot_hor_alc" name="tot_hor_alc" style="width:18px; " value="<?php echo $alc['total_a_horas'];  ?>"></div>
                                    <div class="columna">  <div>
                                                        <select name="ut_alc" id="ut_alc" style="width: 45px; height: 30px; " onchange="calc_ut('ut_alc','tot_alc','tot_hor_alc');">
                                                                <option value="0" <?php if($alc['total_a_ut']==0){echo "selected";} ?> >0</option>
                                                                <option value="1"  <?php if($alc['total_a_ut']==1){echo "selected";} ?> >1</option>
                                                                <option value="2"  <?php if($alc['total_a_ut']==2){echo "selected";} ?>>2</option>
                                                                <option value="3"  <?php if($alc['total_a_ut']==3){echo "selected";} ?> > 3</option>
                                                                <option value="4"  <?php if($alc['total_a_ut']==4){echo "selected";} ?> > 4</option>
                                                                <option value="5"  <?php if($alc['total_a_ut']==5){echo "selected";} ?> > 5</option>
                                                                <option value="6"  <?php if($alc['total_a_ut']==6){echo "selected";} ?> > 6</option>
                                                                <option value="7"  <?php if($alc['total_a_ut']==7){echo "selected";} ?> > 7</option>
                                                                <option value="8"  <?php if($alc['total_a_ut']==8){echo "selected";} ?> > 8</option>
                                                                <option value="9"  <?php if($alc['total_a_ut']==9){echo "selected";} ?> > 9</option>
                                                                <option value="10"  <?php if($alc['total_a_ut']==10){echo "selected";} ?> > 10</option>                      
                                                    
                                                          </select>
                                                  </div></div>
                                   <div class="columna"><input type="text" class="otros" id="tot_alc" name="tot_alc" style="width: 50px; " value="<?php echo $alc['total_a_bs'];  ?>"></div>
                                </p>  
                                 <!-- visita -->
                                <p><div class="columna"> <p style="padding-top: 12px;">   Despacho </p>  </div>
                                   <div class="columna"><input type="text" class="date" id="fec_des" name="fec_des" style="width: 83px; "  value="<?php echo $des['fecha_d'];  ?>" ></div>
                                   <div class="columna"><input type="text" class="hora" id="hora_des_d" name="hora_des_d" style="width:80px; " value="<?php echo $des['hora_d_ini'];  ?>"  ></div>
                                   <div class="columna"><input type="text" class="hora" id="hora_des_h" name="hora_des_h" onchange="calc_hora('hora_des_d','hora_des_h','tot_hor_des');" style="width:80px; "  value="<?php echo $des['hora_d_fin'];  ?>" ></div>
                                   <div class="columna"> <input type="text" class="dato" id="tot_hor_des" name="tot_hor_des" style="width:18px; "  value="<?php echo $des['total_d_horas'];  ?>"  ></div>
                                    <div class="columna">  <div>
                                                        <select name="ut_des" id="ut_des" style="width: 45px; height: 30px; " onchange="calc_ut('ut_des','tot_desp','tot_hor_des');">
                                                                               <option value="0" <?php if($des['total_d_ut']==0){echo "selected";} ?> >0</option>
                                                                <option value="1"  <?php if($des['total_d_ut']==1){echo "selected";} ?> >1</option>
                                                                <option value="2"  <?php if($des['total_d_ut']==2){echo "selected";} ?>>2</option>
                                                                <option value="3"  <?php if($des['total_d_ut']==3){echo "selected";} ?> > 3</option>
                                                                <option value="4"  <?php if($des['total_d_ut']==4){echo "selected";} ?> > 4</option>
                                                                <option value="5"  <?php if($des['total_d_ut']==5){echo "selected";} ?> > 5</option>
                                                                <option value="6"  <?php if($des['total_d_ut']==6){echo "selected";} ?> > 6</option>
                                                                <option value="7"  <?php if($des['total_d_ut']==7){echo "selected";} ?> > 7</option>
                                                                <option value="8"  <?php if($des['total_d_ut']==8){echo "selected";} ?> > 8</option>
                                                                <option value="9"  <?php if($des['total_d_ut']==9){echo "selected";} ?> > 9</option>
                                                                <option value="10"  <?php if($es['total_d_ut']==10){echo "selected";} ?> > 10</option>                      
                                                                
                                                          </select>
                                                  </div></div>
                                   <div class="columna"><input type="text" class="otros" id="tot_desp" name="tot_desp" style="width: 50px; " value="<?php echo $des['total_d_bs'];  ?>" ></div>
                             </p>  
                                 <!-- visita -->
                                <p>
                                
                               </p>  
                             </div>
                    <br>
                        <div class="tabla">
                          <p><div class="titulo"> Servicio de Aduana </div>
                             <div class="titulo"> Fecha </div>
                             <div class="titulo"> Puertos</div>
                             <div class="titulo" style="width: 330px;"> Viaticos</div>
                            
                        
                             <div class="titulo"> </div>  </p>  
                               
                        
                        <p><div class="columna"> <p style="padding-top: 12px;">  Otros Gastos</p>  </div>
                                            <div class="columna"> <input type="text" class="date" id="fec_otros" name="fec_otros" style="width: 83px; " value="<?php echo $otros['fecha_otros'];  ?>" > </div>
                                            <div class="columna"> 
                                                 <select name="puertos" id="puertos" style="width: 105px; height: 30px; font-size: 10px; " onchange="otros_gastos('puertos');">
                                                                 <option value="0" <?php if($otros['puerto']==0){echo "selected";} ?> >Seleccione</option>
                                                                 <option value="10" id="gua" <?php if($otros['puerto']==10){echo "selected";} ?>   >Guaraguao 10 km</option>
                                                                 <option value="10" id="ven" <?php if($otros['puerto']==10){echo "selected";} ?>  >Vencemos 10 km</option>
                                                                 <option value="36" id="zon" <?php if($otros['puerto']==36){echo "selected";} ?>   >Zona Industrial 36 km</option>
                                                                 <option value="46" id="alp" <?php if($otros['puerto']==46){echo "selected";} ?>  >Alpesa 46 km</option>
                                                                 <option value="100" id="jos" <?php if($otros['puerto']==100){echo "selected";} ?>  >Jose 100 km</option>
                                                                
                                                </select>
                                            </div>
                                            <div class="columna" style="width: 342px;"> 
                                             
                                                <label style="margin-top: -10px; height: 10px; font-size: 10px; float: left; margin-left: 15px;">Desayuno <input  type="checkbox" id="desayuno" name='desayuno' value="34.5" <?php if($otros['desayuno']==34.5){echo "checked";} ?> onchange="otros_gastos('puertos');" style="width: 30px; height: 20px; font-size: 10px; " /></label>
                                                <label style="margin-top: -10px; font-size: 10px; float: left;  margin-left: 5px;">Almuerzo<input type="checkbox" id="almuerzo" name='almuerzo' value="69" <?php if($otros['almuerzo']==69){echo "checked";} ?> onchange="otros_gastos('puertos');"style="width: 30px; height: 20px; font-size: 10px; "/></label>
                                                <label style="margin-top: -10px; font-size: 10px; float: left;  margin-left: -10px;">Cena<input type="checkbox" id="cena" name='cena' value="69" <?php if($otros['cena']==69){echo "checked";} ?>  onchange="otros_gastos('puertos');" style="width: 30px; height: 20px; font-size: 10px; "/></label>
                                            
                                            </div>
                                            
                                            
                                       
                                            <div class="columna"> <input type="text" class="otros" id="tot_otros" name="tot_otros" style="width: 60px;" value="<?php echo $otros['total_bs_otros']; ?>" ></div>
                                            <p><div class="pies" style="width: 213px;"> <a class="email" style=" color: #555555; font-size: 12px;" href="javascript:total();" class="submit"> Calcular Total (Bs) </a> </div><div class="pies">  </div><div class="pies">  </div><div class="pies">  </div><div class="pies">  </div><div class="pies"> <input type="text" class="otros" id="total_t" name="total" style="width: 70px; margin-top: -20px; " value="<?php echo $plan['total_p']; ?>" >  </div>  </p> 
                             
                        </div>
                    
                    <input type="hidden" name="idplan" value="<?php if(isset($plan['id_planilla'])) echo $plan['id_planilla']; else echo '0';  ?>" />
                     <input type="hidden" name="ut" value="<?php echo $plan['uni_tributa']; ?>" />
					 <input type="hidden" name="ced" value="<?php echo $_SESSION['cedula']; ?>" />
					   <input type="hidden" name="ut" value="<?php echo $plan['uni_tributa']; ?>" />
                    <input type="hidden" name="editar_adm" value="true" />
		<div style=" padding-top:15px; text-align:center;">
                    <a href="javascript:submitform();" class="submit">Modificar</a>
                    <a href="servicios_adm.php" class="submit">Regresar</a>
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