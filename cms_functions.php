<?php

@include ("include/TECH_MySQL.php");
$con=new TECH_MySQL();
$con->Conectar();


function obtener_admin($login,$pass)
{
	$con=new TECH_MySQL();
	$con->Conectar();
	$sql="SELECT * FROM usuarios where login='".$login."' and clave='".$pass."'";
	$query=  $con->Consulta($sql);
	$row =  $con->Filas_Nombre($query);
	return $row;
}

//registro de usuario
     function nvo_user($ced,$nombre,$apellido,$log,$pass,$correo,$idtip)
      {

		$con=new TECH_MySQL();
		$con->Conectar();
		$sql="call nvo_user('$ced','$nombre','$apellido','$log','$pass','$correo','$idtip');";
		$query=  $con->Consulta($sql);
		if($query!=0){
          return true; //sucess

        }else{
                return false;// error
        }

}

//listado de usuarios editarloooooo
function lista_usuario()
{
	
	$con=new TECH_MySQL();
	$con->Conectar();
	$sql="SELECT * FROM usuarios ";
	$query=  $con->Consulta($sql);
	while($row =  $con->Filas_Nombre($query))
	{ 						
			        echo '<tr id="'.$row["cedula"].'">
                                <td>'.$row["cedula"].' </td>
                                <td>'.$row["nombre"].'</td>
                                <td>'.$row["apellido"].'</td>
                                <td>'.$row["login"].'</td>
                                <td>'.$row["clave"].'</td>
                                <td>'.$row["correo"].'</td>
                                <td><a  href="editus_adm.php?cedula='.$row["cedula"].'"> 
                                                    <img alt=""  id="mod" src="img/application_form.png">
                                                    </a>                            
                                                    
                                                    <img alt=""  id="del" src="img/cancel.png">
                                       
                                                   <!-- <img alt=""  id="pdf" src="img/pdf.png"> -->
                               </td>
                               </tr>';
   
	}

}

//obtener usuario
function obtener_us($cedula)
{
	$con=new TECH_MySQL();
	$con->Conectar();
	$sql="SELECT * FROM usuarios where cedula='".$cedula."'";
	$query=  $con->Consulta($sql);
	$row =  $con->Filas_Nombre($query);
	return $row;
}



//actualizar usuario

function upd_user($ced, $nom, $ape, $log, $cla, $corr, $idtip,$id){
        $con=new TECH_MySQL();
	$con->Conectar();
        $sql="call upd_user('$ced','$nom','$ape','$log','$cla','$corr','$idtip',$id);";
        $query=  $con->Consulta($sql);
		if($query!=0){
          return true; //sucess

        }else{
       		return false;// error
        }
}


//funcion crear planilla
function crear_planilla( $contri, $rif, $vehic, $muelle, $fec_a, $fec_s, 
                         $fecha, $ut, $fec_vis, $hvini, $hvfin, $tvhoras,$tvbs, $tvut,  
                         $fec_ope, $hoini, $hofin, $tohoras, $tobs, $tout,
                         $fec_alc, $haini, $hafin, $tahoras, $tabs, $taut,
                         $fec_des, $hdini, $hdfin, $tdhoras, $tdbs, $tdut,
                         $fec_otros, $puerto, $totrosbs, $desayu, $almuer, $cena, $ced, $hor, $total_p){
    
        $con=new TECH_MySQL();
	$con->Conectar();
        $sql="call crear_planilla('$contri','$rif','$vehic','$muelle','$fec_a','$fec_s','$fecha',$ut,
                                  '$fec_vis','$hvini','$hvfin','$tvhoras',$tvbs,'$tvut',
                                  '$fec_ope','$hoini','$hofin','$tohoras',$tobs,'$tout',
                                  '$fec_alc','$haini','$hafin','$tahoras',$tabs,'$taut',
                                  '$fec_des','$hdini','$hdfin','$tdhoras',$tdbs,'$tdut',
                                  '$fec_otros','$puerto',$totrosbs,'$desayu','$almuer','$cena','$ced','$hor','$total_p')";        
        $query=  $con->Consulta($sql);
		if($query!=0){
          return true; //sucess

        }else{
       		return false;// error
        }
    
}

//listar planilla
function lista_planilla($cedula)
{
	
	$con=new TECH_MySQL();
	$con->Conectar();
	$sql="SELECT * FROM planilla p 
              INNER JOIN us_planilla usp ON usp.cedula='".$cedula."' AND p.id_planilla=usp.id_planilla ";
        

	$query=  $con->Consulta($sql);
	while($row =  $con->Filas_Nombre($query))
	{ 						
			        echo '<tr id="'.$row["id_planilla"].'">
                                <td>'.$row["contrib"].' </td>
                                <td>'.$row["rif"].'</td>
                                <td>'.$row["fecha"].'</td>
                                <td>'.$row["total_p"].'</td>
                                <td><a  href="editser_us.php?id_planilla='.$row["id_planilla"].'"> 
                                                    <img alt=""  id="mod" src="img/application_form.png">
                                                    </a>                            
                                                    
                                         
                                           <img alt=""  id="del" src="img/cancel.png">
                                           
                                       
                                           <a  href="planilla_serv.php?id_planilla='.$row["id_planilla"].'">  <img alt=""  id="pdf" src="img/pdf.png"> 
                                            </a>
                               </td>
                               </tr>';
   
	}

}


//listar todas las planillas Administrador

//listar planilla usuario
function lista_planilla_all()
{
	
	$con=new TECH_MySQL();
	$con->Conectar();
	$sql="SELECT * FROM planilla ";
        

	$query=  $con->Consulta($sql);
	while($row =  $con->Filas_Nombre($query))
	{ 						
			        echo '<tr id="'.$row["id_planilla"].'">
                                <td>'.$row["contrib"].' </td>
                                <td>'.$row["rif"].'</td>
                                <td>'.$row["fecha"].'</td>
                                <td>'.$row["total_p"].'</td>
                                <td><a  href="editser_us.php?id_planilla='.$row["id_planilla"].'"> 
                                                    <img alt=""  id="mod" src="img/application_form.png">
                                                    </a>                            
                                                    
                                         
                                                    <img alt=""  id="del" src="img/cancel.png">
                                           
                                       
                                                   <!-- <img alt=""  id="pdf" src="img/pdf.png"> -->
                               </td>
                               </tr>';
   
	}

}

//administrador
function lista_planilla_all_adm()
{
	
	$con=new TECH_MySQL();
	$con->Conectar();
	$sql="SELECT * FROM planilla ";
        

	$query=  $con->Consulta($sql);
	while($row =  $con->Filas_Nombre($query))
	{ 						
			        echo '<tr id="'.$row["id_planilla"].'">
                                <td>'.$row["contrib"].' </td>
                                <td>'.$row["rif"].'</td>
                                <td>'.$row["fecha"].'</td>
                                <td>'.$row["total_p"].'</td>
                                <td><a  href="editser_adm.php?id_planilla='.$row["id_planilla"].'"> 
                                                    <img alt=""  id="mod" src="img/application_form.png">
                                                    </a>                            
                                                    
                                         
                                                    <img alt=""  id="del" src="img/cancel.png">
                                           
                                       
                                                   <!-- <img alt=""  id="pdf" src="img/pdf.png"> -->
                               </td>
                               </tr>';
   
	}

}

//obtener planilla
function obtener_plan($id_planilla)
{
	$con=new TECH_MySQL();
	$con->Conectar();
	$sql="SELECT * FROM planilla where id_planilla='".$id_planilla."'";
	$query=  $con->Consulta($sql);
	$row =  $con->Filas_Nombre($query);
	return $row;
}
// obtener visita
function obtener_vis($id_planilla)
{
	$con=new TECH_MySQL();
	$con->Conectar();
	$sql="SELECT * FROM visita where id_planilla='".$id_planilla."'";
	$query=  $con->Consulta($sql);
	$row =  $con->Filas_Nombre($query);
	return $row;
}
//obtener operaciones
function obtener_ope($id_planilla)
{
	$con=new TECH_MySQL();
	$con->Conectar();
	$sql="SELECT * FROM operaciones where id_planilla='".$id_planilla."'";
	$query=  $con->Consulta($sql);
	$row =  $con->Filas_Nombre($query);
	return $row;
}
//obtener operaciones
function obtener_alc($id_planilla)
{
	$con=new TECH_MySQL();
	$con->Conectar();
	$sql="SELECT * FROM alcabala where id_planilla='".$id_planilla."'";
	$query=  $con->Consulta($sql);
	$row =  $con->Filas_Nombre($query);
	return $row;
}
//obtener despacho
function obtener_des($id_planilla)
{
	$con=new TECH_MySQL();
	$con->Conectar();
	$sql="SELECT * FROM despacho where id_planilla='".$id_planilla."'";
	$query=  $con->Consulta($sql);
	$row =  $con->Filas_Nombre($query);
	return $row;
}
//obtener otros gastos
function obtener_otros($id_planilla)
{
	$con=new TECH_MySQL();
	$con->Conectar();
	$sql="SELECT * FROM otros_gastos where id_planilla='".$id_planilla."'";
	$query=  $con->Consulta($sql);
	$row =  $con->Filas_Nombre($query);
	return $row;
}
// actualizar planilla
function actualizar_planilla( $id_plan, $contri, $rif, $vehic, $muelle, $fec_a, $fec_s, $fecha, $ut, $hor, $total_p,
                                 $fec_vis, $hvini, $hvfin, $tvhoras,$tvbs, $tvut,  
                                 $fec_ope, $hoini, $hofin, $tohoras, $tobs, $tout,
                                 $fec_alc, $haini, $hafin, $tahoras, $tabs, $taut,
                                 $fec_des, $hdini, $hdfin, $tdhoras, $tdbs, $tdut,
                                 $fec_otros, $puerto, $totrosbs, $desayu, $almuer, $cena){
    
        $con=new TECH_MySQL();
	$con->Conectar();
        $sql="call upd_plan($id_plan,'$contri','$rif','$vehic','$muelle','$fec_a','$fec_s','$fecha','$ut','$hor','$total_p',
                                  '$fec_vis','$hvini','$hvfin','$tvhoras',$tvbs,'$tvut',
                                  '$fec_ope','$hoini','$hofin','$tohoras',$tobs,'$tout',
                                  '$fec_alc','$haini','$hafin','$tahoras',$tabs,'$taut',
                                  '$fec_des','$hdini','$hdfin','$tdhoras',$tdbs,'$tdut',
                                  '$fec_otros','$puerto',$totrosbs,'$desayu','$almuer','$cena')";     
        
        $query=  $con->Consulta($sql);
		if($query!=0){
          return true; //sucess

        }else{
       		return false;// error
        }
    
}

//eliminar planilla
function eliminar_plan($id_planilla){
    
    $con=new TECH_MySQL();
	$con->Conectar();
        $sql="call elim_plan('$id_planilla')";     
        
        $query=  $con->Consulta($sql);
		if($query!=0){
          return true; //sucess

        }else{
       		return false;// error
        }
    
}


?>
