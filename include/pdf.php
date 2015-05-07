<?php
define('FPDF_FONTPATH','fpdf17/font');
 @include("fpdf.php");
 
class PDF extends FPDF
{
function Header()
{
    // Logo include cuando crea el objeto desde afuera
    $this->Image('include/sen.png',10,15,60,'PNG');
    // Arial bold 15
    $this->SetFont('Arial','B',14);
    // Movernos a la derecha
   
    $this->Ln(30);
     $this->Cell(50);
    // Título
    $this->Cell(10,20,'Registro de Servicio Habilitante');
    // Salto de línea
    

    
}

function formulario($nombre,$rif,$vehiculo, $muelle, $fecha_a, $fecha_s, $hora, $fecha){
    
          
    $this->Cell(80);
    $this->SetFont('Arial','',10);
    $this->Cell(10,1,'Fecha:'); 
    $this->Cell(5);
    $this->SetFont('Arial','B',10);
    $this->Cell(1,1,$fecha);

    
    $this->Ln(15);
    
    $this->SetFont('Arial','',10);
    $this->Cell(10,20,'Contribuyente: ');
    $this->Cell(20);
    $this->SetFont('Arial','B',10);
    $this->Cell(1,20,$nombre);

     $this->Cell(50);
    $this->SetFont('Arial','',10);
    $this->Cell(5,20,'Rif: ');
    $this->Cell(5);
    $this->SetFont('Arial','B',10);
    $this->Cell(1,20,'Rif: ');
    
    $this->Ln(10);
     $this->SetFont('Arial','',10);
    $this->Cell(20,20,'Vehiculo: ');
    $this->Cell(5);
        $this->SetFont('Arial','B',10);
    $this->Cell(1,20,$vehiculo);
    
    
    //muelle
         $this->Cell(55);
    $this->SetFont('Arial','',10);
    $this->Cell(5,20,'Muelle: ');
    $this->Cell(10);
    $this->SetFont('Arial','B',10);
    $this->Cell(1,20,$muelle);
    
    
    $this->Ln(10);
        $this->SetFont('Arial','',10);
    $this->Cell(20,20,'Fecha de Arribo: ');
    $this->Cell(10);
        $this->SetFont('Arial','B',10);
    $this->Cell(1,20,$fecha_a);
    
          $this->Cell(50);
         $this->SetFont('Arial','',10);
     $this->Cell(20,20,'Fecha de Salida: ');
     $this->Cell(10);
         $this->SetFont('Arial','B',10);
     $this->Cell(1,20,$fecha_s);
    
      $this->Ln(10);
          $this->SetFont('Arial','',10);
      $this->Cell(20,20,'Atraco a las: ');
      $this->Cell(5);
          $this->SetFont('Arial','B',10);
      $this->Cell(1,20,$hora);
      
      $this->Ln(12);
    
}

function hab_aduana($fec_vis, $h_v_ini, $h_v_fin, $t_v_h, $t_v_b, $t_v_ut,
                    $fec_ope, $h_o_ini, $h_o_fin, $t_o_h, $t_o_b, $t_o_ut,
                    $fec_alc, $h_a_ini, $h_a_fin, $t_a_h, $t_a_b, $t_a_ut,
                    $fec_des, $h_d_ini, $h_d_fin, $t_d_h, $t_d_b, $t_d_ut,
                    $fec_otros, $puerto, $total_o, $desayuno, $almuerzo, $cena, $total_p){
    
     $this->SetFont('Arial','B',12);

     $this->Cell(55);
    // Título
    $this->Cell(10,20,'Registro de Servicio Habilitante');
    
    $this->Ln(5);
    
    //tabla
    $this->SetFillColor(255,0,0);
    $this->SetTextColor(255);
    $this->SetDrawColor(128,0,0);
    $this->SetLineWidth(.3);
    $this->SetFont('','B');
    
    $this->Ln();

        // Cabecera

        $this->SetFont('Arial','B',8);
        
        $this->Cell(35,6,'Servicio de Aduana',1,0,'C',true);
    
        $this->Cell(30,6,'Fecha',1,0,'C',true);
        
        $this->Cell(25,6,'Hora(Desde)',1,0,'C',true);
      
        $this->Cell(20,6,'Hora(Hasta)',1,0,'C',true);
 
        $this->Cell(20,6,'Horas(Total)',1,0,'C',true);
      
        $this->Cell(35,6,'Unidad Tributaria (U.T)',1,0,'C',true);
    
        $this->Cell(30,6,'Total (Bolivares)',1,0,'C',true);
       
        $this->Ln();
    

    
    // Restauración de colores y fuentes
    $this->SetFillColor(224,235,255);
    $this->SetTextColor(0);
    $this->SetFont('');
    // Datos
    $fill = false;
   
     //visita
        $this->Cell(35,8,"Visita",'LR',0,'L',$fill);
        $this->Cell(30,8,$fec_vis,'LR',0,'L',$fill);
        $this->Cell(25,8,$h_v_ini,'LR',0,'L',$fill);
        $this->Cell(20,8,$h_v_fin,'LR',0,'R',$fill);
        $this->Cell(20,8,$t_v_h,'LR',0,'R',$fill);
        $this->Cell(35,8,$t_v_ut,'LR',0,'R',$fill);
        $this->Cell(30,8,$t_v_b,'LR',0,'R',$fill);
    
        $this->Ln();
        
     //operaciones
  
        $this->Cell(35,8,"Operaciones",'LR',0,'L',$fill);
        $this->Cell(30,8,$fec_ope,'LR',0,'L',$fill);
        $this->Cell(25,8,$h_o_ini,'LR',0,'L',$fill);
        $this->Cell(20,8,$h_o_fin,'LR',0,'R',$fill);
        $this->Cell(20,8,$t_o_h,'LR',0,'R',$fill);
        $this->Cell(35,8,$t_o_ut,'LR',0,'R',$fill);
        $this->Cell(30,8,$t_o_b,'LR',0,'R',$fill);
       
        
        $this->Ln();
       //alcabala de confrontacion
        $this->Cell(35,10,"Alcabala de Confrontacion",'LR',0,'L',$fill);
        $this->Cell(30,8,$fec_alc,'LR',0,'L',$fill);
        $this->Cell(25,8,$h_a_ini,'LR',0,'L',$fill);
        $this->Cell(20,8,$h_a_fin,'LR',0,'R',$fill);
        $this->Cell(20,8,$t_a_h,'LR',0,'R',$fill);
        $this->Cell(35,8,$t_a_ut,'LR',0,'R',$fill);
        $this->Cell(30,8,$t_a_b,'LR',0,'R',$fill);
        
          $this->Ln();
        
        //despaco
         $this->Cell(35,8,"Despacho",'LR',0,'L',$fill);
        $this->Cell(30,8,$fec_des,'LR',0,'L',$fill);
        $this->Cell(25,8,$h_d_ini,'LR',0,'L',$fill);
        $this->Cell(20,8,$h_d_fin,'LR',0,'R',$fill);
        $this->Cell(20,8,$t_d_h,'LR',0,'R',$fill);
        $this->Cell(35,8,$t_d_ut,'LR',0,'R',$fill);
        $this->Cell(30,8,$t_d_b,'LR',0,'R',$fill);
        
        $fill = !$fill;
  $this->Ln();

        // Cabecera2
        $this->SetFillColor(255,0,0);
        $this->SetTextColor(255);
        $this->SetDrawColor(128,0,0);
        $this->SetLineWidth(.3);
        $this->SetFont('','B');
    
        $this->SetFont('Arial','B',8);
        
        $this->Cell(35,6,'Servicio de Aduana',1,0,'C',true);
    
        $this->Cell(30,6,'Fecha',1,0,'C',true);
        
        $this->Cell(25,6,'Puertos',1,0,'C',true);
      
        $this->Cell(75,6,'Viaticos',1,0,'C',true);
     
        $this->Cell(30,6,'Total (Bolivares)',1,0,'C',true);
       
        $this->Ln();
    
        // Restauración de colores y fuentes
    $this->SetFillColor(224,235,255);
    $this->SetTextColor(0);
    $this->SetFont('');
    // Datos
    $fill = false;
   
      $this->Cell(35,8,"Otros Gastos",'LR',0,'L',$fill);
        $this->Cell(30,8,$fec_otros,'LR',0,'L',$fill);
        $this->Cell(25,8,$puerto,'LR',0,'L',$fill);
        $this->Cell(25,8,"Desayuno: ".$desayuno,'LR',0,'R',$fill);
        $this->Cell(25,8,"Almuerzo: ".$almuerzo,'LR',0,'R',$fill);
        $this->Cell(25,8,"Cena: ".$cena,'LR',0,'R',$fill);
        $this->Cell(30,8,$total_o,'LR',0,'R',$fill);
      
        $this->Ln();
       
        $fill = !$fill;

        
        //total
         //tabla
    $this->SetFillColor(255,0,0);
    $this->SetTextColor(255);
    $this->SetDrawColor(128,0,0);
    $this->SetLineWidth(.3);
    $this->SetFont('','B');


        $this->SetFont('Arial','B',8);
        
        $this->Cell(165,6,'Total (Bolivares): ',1,0,'C',true);

    
        $this->Cell(30,6,$total_p. " Bs ",1,0,'C',true);
       
        $this->Ln();
        

}

function relleno(){
     $this->SetTextColor(0);
     $this->Ln(5);
     $this->SetFont('Arial','',10);
     $this->Cell(1,1,'Tasa de Habilitacion segun art. 3 L.O.A por interpretacion y aplicacion de la circular INA-300-02-E-0292 del 03/12/12 ');
     $this->Ln(5);
     $this->Cell(1,1,'Aereo Naves del  ');
     $this->Ln(5);
     $this->Cell(1,1,'Se liquida el 100% de la tasa, debe ser depositado a la cuenta corriente Seniat-Aduana de Guanta habilitaciones');
     $this->Ln(5);
     $this->Cell(1,1,'Num 441-510015-7 en el Banco Fondo Comun.');
     
     $this->Ln(10);
     $this->Cell(1,1,'Num de Voucher: ________________________');
     $this->Cell(80);
     $this->Cell(1,1,'Banco: ___________________');
     $this->Cell(55);
     $this->Cell(1,1,'Fecha de Pago: ____________');
     
     $this->Ln(1);
      
     $this->SetFont('Arial','B',10);

     $this->Cell(70);
     // Título
     $this->Cell(10,20,'Area para Autorizar');
    
     $this->Ln(15);
     
       // Cabecera2
        $this->SetFillColor(255,0,0);
        $this->SetTextColor(255);
        $this->SetDrawColor(128,0,0);
        $this->SetLineWidth(.3);
        $this->SetFont('','B');
    
        $this->SetFont('Arial','B',8);
        
        $this->Cell(55,6,'Div. o Area Habilitada',1,0,'C',true);
    
        $this->Cell(70,6,'Revisado por Coordinador de Habilitaciones',1,0,'C',true);
        
        $this->Cell(60,6,'Revisado por Jefe Div. Recaudacion',1,0,'C',true);
      $this->Ln();
            $this->SetFillColor(224,235,255);
            $this->SetTextColor(0);
            $this->SetFont('');
    // Datos
    $fill = false;
   
        $this->Cell(55,6,"",'LR',0,'L',$fill);
        $this->Cell(70,6,"",'LR',0,'L',$fill);
        $this->Cell(60,6,"",'LR',0,'L',$fill);

        
         $this->Ln();
         $this->Cell(185,0,'','T');
       
        $this->Ln(-5);
        
   
      
     $this->SetFont('Arial','B',10);

     $this->Cell(75);
     // Título
     $this->Cell(10,20,'Recibido por:');
    
     $this->Ln(15);
     
       // Cabecera2
        $this->SetFillColor(255,0,0);
        $this->SetTextColor(255);
        $this->SetDrawColor(128,0,0);
        $this->SetLineWidth(.3);
        $this->SetFont('','B');
    
        $this->SetFont('Arial','B',8);
        
        $this->Cell(40,6,'Nombre',1,0,'C',true);
    
        $this->Cell(30,6,'Cedula',1,0,'C',true);
        
        $this->Cell(30,6,'Fecha',1,0,'C',true);
        
        $this->Cell(40,6,'Firma',1,0,'C',true);
      $this->Ln();
            $this->SetFillColor(224,235,255);
            $this->SetTextColor(0);
            $this->SetFont('');
    // Datos
    $fill = false;
   
        $this->Cell(40,6,"",'LR',0,'L',$fill);
        $this->Cell(30,6,"",'LR',0,'L',$fill);
         $this->Cell(30,6,"",'LR',0,'L',$fill);
        $this->Cell(40,6,"",'LR',0,'L',$fill);
 
        
        $this->Ln();
         $this->Cell(140,0,'','T');
         $this->Ln(4);
         
         $this->Cell(1,7,'Observacion: __________________________________________________________________________________________________________ ');
}


// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
}
}


?>
