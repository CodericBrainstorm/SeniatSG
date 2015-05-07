/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


function fecha(){

var LaFecha=new Date();
var Mes=new Array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
var diasem=new Array('Domingo','Lunes','Martes','Miercoles','Jueves','Viernes','Sabado');
var diasemana=LaFecha.getDay();
var FechaCompleta="";
var NumeroDeMes="";
var hora = LaFecha.getHours();
if(hora<10){hora="0"+hora;};
var minuto = LaFecha.getMinutes(); 
if(minuto<10){minuto="0"+minuto;};
var segundo = LaFecha.getSeconds();
if(segundo<10){segundo="0"+segundo;};
NumeroDeMes=LaFecha.getMonth();
FechaCompleta=diasem[diasemana]+" "+LaFecha.getDate()+" de "+Mes[NumeroDeMes]+" de "+LaFecha.getFullYear()+" "+hora+":"+minuto+":"+segundo;
document.getElementById('fecha').innerHTML=FechaCompleta;
setTimeout('fecha()',1000)
}  
