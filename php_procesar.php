<?php 

@include_once('Conexion.php');

     
$login=$_POST['login'];
$clave=$_POST['clave'];


if($clave=="" && $login==""){
    echo "Debe ingresar los datos en los campos";
}
else if($clave==""){
     echo "Debe ingresar su clave";
}
else if($login==""){
      echo "Debe ingresar su correo";
    
}
else if(login($login, $clave)){
       
        echo "hola";
      
       }
 


//
//
///**
// * valida un usuario y contraseña
// * @param string $usuario
// * @param string $password
// * @return bool
// */
function login($usuario,$password) {
 
    $con= new Conexion();
    $con->data_base="seniat";
    $con->server="localhost";
    $con->user="root";
    $con->pass="root";
    
    $mensaje="false";
    //usuario y password tienen datos?
    if (empty($usuario)) return false;
    if (empty ($password)) return false;
 
    //1 - conectamos a la base de datos utilizando los parámetros globales
 
  
    if (!$con->connect()) {       
       $mensaje="Error al Conectar";
    }
    // Seleccionar la base de datos activa
    
    if (!$con->select($con->data_base)) {
        $mensaje="Error al Conectar con la Base de Datos";
    }
 

    
    //2 - preparamos la consulta SQL a ejecutar utilizando sólo el usuario y evitando ataques de inyección SQL.
    $sql='SELECT '.login.','.clave.' FROM '.usuarios.' WHERE '.login.'="'.mysql_real_escape_string($usuario).'" LIMIT 1 '; //la tabla y el campo se definen en los parametros globales
    //query
    $result = $con->query($sql);
    
    if (!$result) {
          echo "El usuario ".$usuario." No existe registrado en nuestra base de datos";
    }
    else{
          
    
        
        
   
     
    $row=$con->f_array($result);
 
    //3 - extraemos el registro de este usuario
 
 
    if($usuario == $row["login"] && $password== $row["clave"] ){
        
         if ($row) {
       
        //5 - comprobamos la contraseña
        if ($row['login']) {
             
            @session_start();
            $_SESSION['login']=array('user'=>$row['login']); //almacenamos en memoria el usuario
            // en este punto puede ser interesante guardar más datos en memoria para su posterior uso, como por ejemplo un array asociativo con el id, nombre, email, preferencias, ....
            return true; //usuario y contraseña validadas
        } else {
            
            @session_start();
            unset($_SESSION['login']); //destruimos la session activa al fallar el login por si existia
            return false; //no coincide la contraseña
        }
      }
      
         else {
        //El usuario no existe
        return $mensaje;
    }
    }
    
   else {
        //El usuario no existe
        echo "El usuario ".$usuario." No existe registrado en nuestra base de datos";
    }
    
   
    }
}
?>