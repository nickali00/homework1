<?php
 include"connessione.php";
 $strqry="SELECT * FROM tbeventi,tblike where tbeventi.fklike=tblike.id";
 $dati=mysqli_query($conn,$strqry);
 $js=array();
 while($res=mysqli_fetch_array($dati))
 {
   array_push($js,array(
     'Id'=>	$res["idevento"],
     'titolo'=>$res["titolo"],
     'descrizione'=>$res["descrizione"],
     'data'=>$res["data"],
     'img'=>$res["img"],
     'like'=>$res["numvoti"]
   ));
 }
 echo json_encode(array('mhw4'=>$js));
 mysqli_close($conn);
?>
