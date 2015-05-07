<?php

/*Clase creada por: Technosystem.com.ve para la gestion de BD de los website
el contructor recibe los parametros como usuario, clave, servicodr y base de datos
es una clase Abierta a modificaciones
*/

include "Constantes.php";

class TECH_MySQL {

  var $DB;  //Nombre de Base de Datos
  var $Servidor; // Nombre Servidor sea Web o Localhost
  var $Usuario; // Nombre del Usuario
  var $Clave; //Clave del usuario
  var $ConexionID=0; //atributo que guarda el ID de la conexion definida
  var $ConsultaID=0; //guarda el ID de la consulta realizada
  var $Manejador; //recibe el nombre del manejador a usar
  
  /*el contructor principal permite recibir el manejador
  almacena los nombre de los parametros usuario, pass, servidor....
  */  
  function __construct( /*$manejador */){
      $this->DB=DB_NAME;
      $this->Servidor=DB_SERVER;
      $this->Usuario=DB_USER;
      $this->Clave=DB_PASS;
      $this->Manejador=DB_GESTOR;

   }

   /*fuincion Conectar a la BD*/
   function Conectar(){
    
         
         
       if( strtolower($this->Manejador) == "mysql"){
          $this->ConexionID=@mysql_connect($this->Servidor, $this->Usuario, $this->Clave);
      }

      //error al conectar
      if(!$this->ConexionID ){
            echo("Error de conexion, verifique, Servidor, Usuario o Clave");
            return 0;
      }

     
          //Seleccionamos la Base de datos
          if(!@mysql_select_db($this->DB,$this->ConexionID)  ){
              //error al selecciionar
              echo ("Error al Seleccionar la BD");
              return 0;
          }
          else{
              $this->ConexionID;
          }
      
   }// fin Conectar...

   /*funciona consulta recibe la cadena del Query, retorna el ConsultaID sino retorna 0*/
   function Consulta($sql=""){
       if($sql != ""){ // existe una sentencia
           //realiza la consulta
           $ConsultaID=@mysql_query($sql, $this->ConexionID);
           


           if(!$ConsultaID){
               //existe un error
               echo(@mysql_error());
               return 0;
           }//fin if query
           else{
               return $ConsultaID; // retorna el ID de la consulta
           }
       }
       else{
           return 0;
       }
       
   }//fin uncion Consulta


  /**
 *Metodo que determina el numero de campos de un query
 *@param $Consulta_ID $consul; Representa el recurso con la consulta ejecutada
 *@return int Retorna el numero de campos en una consulta desde 0 ; -1 error
 */
function NumCampos($ConsultaID){
      if($ConsultaID != 0) { //existe una consulta
          return (@mysql_num_fields($ConsultaID));
      }
      else{
          return 0;
      }
  }// fin NumCampos

  /*funcion numero de filas de un query, retorna desde 0, o -1 error*/
  function NumFilas($ConsultaID){
      if($ConsultaID != 0){

          return (@mysql_num_rows($ConsultaID));
      }
      else{
          return 0;
      }
  }//fin funcion NumFilas


  /*funcion retorna nombre del campo dependiendo del query y numero de indice*/
  /*retorna el nombre de lo contrario retorna vacio*/
  function NomCampo($ConsultaID, $NumCampo){
      if($query != 0){
          return (@mysql_field_name($ConsultaID, $NumCampo));
      }
      else{
          return ("");
      }
  }//fin NomCampo

  /*Metodo Cerrar conexion*/
  //Metodo para cerrar la conexion con la BD
  function CerrarConexion () {
    if (!$this->ConexionID) //Si no existe una conexion
     {
      echo("Error en el cierre"); //Muestra mensaje de error
      return 0;
     }
    else
     {
      //echo ("Se ha cerrado la BD"); //De lo contrario cierra la conexion
      return (@mysql_close($Conexion_ID));
     }
   }//fin CerrarConexion

   /*funcion Assoc que recupera la fila del Query a traves del nombre de sus campos*/
   /*ejemplo $fila=Filas_Nombre($ConsultaID) --->  $fila["nombre"]*/
   function Filas_Nombre($ConsultaID){
       if( $ConsultaID != 0 ){
           return (@mysql_fetch_assoc($ConsultaID)); //obteiene los datos por nombre
       }
       else{
           return 0;
       }
   }//fin Filas_Nombre

   /*function Filas_Numero recupera la fila Query por el numero de campo indice*/
   /**$fila=Filas_Num($consultaID)  --->  $fila[1]/
    */
   function Filas_Num($ConsultaID){
       if($ConsultaID != 0 ){
           return(@mysql_fetch_row($ConsultaID)); //ontiene los campos por indice
       }
       else{
           return 0;
       }
   }//fin Filas_Num


   //retorna el id
   function mysqlID(){
       return @mysql_insert_id();
   }

  //Metodo que determina el numero de separadores "," de una cadena
 function Separadores($cadena) {
   $sep=0;
    for ($i=0;$i<=strlen($cadena);$i++) //Recorre toda la cadena
       {
	  if ($cadena[$i]==",") //Si encuentra una "," dentro de la cadena
	   $sep++; //aumenta el contador
       }
	return($sep);
  }// fin metodo Separadores

  /* Funcion para prepormatear el campo de fecha para insertar en la base de datos
 * @param datetime $datos; Representa la fecha que queremos preformatear
 * para guardar en la base de datos
 * @return String Retorna la una cadena con la fecha ejemplo: mm/dd/yyyy
 */
    function Separar_Fecha($datos)
    { if($datos==null){return null;}
      $f_separada = EXPLODE("/",$datos);
      $fecha_=$f_separada[1]."/".$f_separada[0]."/".$f_separada[2];
      return($fecha_);
    }//fin Separa_Fecha

  /**
 * Funcion para prepormatear el campo de fecha para mostrar
 * @param datetime $datos; Representa la fecha que queremos preformatear
 * para mostrar
 * @return String Retorna la una cadena con la fecha ejemplo: dd/mm/yyyy
 */
function Cambia_Fecha($datos)
{
    if($datos==null){
     return null;
    }
  $f_cambia = EXPLODE("-",$datos);
  $fecha_=$f_cambia[2]."/".$f_cambia[1]."/".$f_cambia[0];
  return($fecha_);
}// fin Cambia_Fecha

/* Funcion para prepormatear el campo de fecha para insertar en la base de datos mysql
 * @param datetime $datos; Representa la fecha que queremos preformatear
 * para guardar en la base de datos
 * @return String Retorna la una cadena con la fecha ejemplo: yyyy/mm/dd
 */
function Separar_Fecha_MySql($datos)
{ if($datos==null){return null;}
  $f_separada = EXPLODE("/",$datos);
  $fecha_=$f_separada[2]."-".$f_separada[1]."-".$f_separada[0];
  return($fecha_);
}

/**
 *Devuelve una cadena con la fecha que se
 *le manda como parámetro en formato largo.
 *@param $FechaStamp $FechaStamp; Representa la fecha q se le desee dar formato
 *@return String Retorna la una cadena con la decha ejemplo: Domingo 10 de Enero de 2009
 */
function FechaFormateada($FechaStamp)
{
       $ano = date('Y',$FechaStamp); //<-- Año
       $mes = date('m',$FechaStamp); //<-- número de mes (01-31)
       $dia = date('d',$FechaStamp); //<-- Día del mes (1-31)
       $dialetra = date('w',$FechaStamp);  //Día de la semana(0-7)

       switch($dialetra)
      {
       case 0: $dialetra="Domingo"; break;
       case 1: $dialetra="Lunes"; break;
       case 2: $dialetra="Martes"; break;
       case 3: $dialetra="Mi&eacute;rcoles"; break;
       case 4: $dialetra="Jueves"; break;
       case 5: $dialetra="Viernes"; break;
       case 6: $dialetra="S&aacute;bado"; break;
      }

      switch($mes)
      {
       case '01': $mesletra="Enero"; break;
       case '02': $mesletra="Febrero"; break;
       case '03': $mesletra="Marzo"; break;
       case '04': $mesletra="Abril"; break;
       case '05': $mesletra="Mayo"; break;
       case '06': $mesletra="Junio"; break;
       case '07': $mesletra="Julio"; break;
       case '08': $mesletra="Agosto"; break;
       case '09': $mesletra="Septiembre"; break;
       case '10': $mesletra="Octubre"; break;
       case '11': $mesletra="Noviembre"; break;
       case '12': $mesletra="Diciembre"; break;
      }
   return "$dialetra, $dia de $mesletra de $ano";
}//fin funcion FechaFormateada


 /* Funcion para destruir el objeto cuando no se le esta dando uso
 */
        function __destruct()
        {
		unset($this);
	}// fin funcion

}

?>