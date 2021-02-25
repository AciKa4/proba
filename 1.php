<?php

 
if( $_POST['ime'] != "" ){ 
$ime = $_POST['ime'];} 
else {$ime= "Katarina";}
$prezime= $_POST['prezime'];
$email= $_POST['mail'];
$pass = $_POST['sifra'];
if(isset( $_POST['godine'] )) {
$punoletan=$_POST['godine']; }
else {$punoletan="Maloletan";}
if(isset ($_POST['uslovi'])  ) {
$saglasnost =$_POST['uslovi']  ;}
else {$saglasnost="Ne";}
if(isset ($_POST['radib'] )) {
$pol=$_POST['radib'];} 
else {$pol= "Niste oznacili kog ste pola";}





echo("Ime osobe koja se prijavila je : $ime , prezime je : $prezime , email je: $email , sifra: $pass </br>
     pol: $pol <br/>
     Godine : $punoletan, Slaze se sa uslovima koriscenja: $saglasnost " ); 

// 

/* for ( $i=0 ; $i<30 ; $i++) {
    if ($i%3==0)
    echo("$i <br/>" );
}; */

/* $niz = array(1,12,-3,5,7,9.5 ,123,6,77) ;
$ind=0;
$min= 150 ; 
for( $i=0 ; $i<count($niz) ; $i++ ) {
    if($niz[$i]<$min){
     $min=$niz[$i];
     $ind=$i+1   ;         }
}
echo($ind); */






?>