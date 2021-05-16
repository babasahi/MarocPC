<?php 
   
 

  function num_aleatoire($taille){

  	$id_text = "";

  	if ($taille <10 ){
  		$taille = 10;
  	}
      $x = rand(5,$taille);
       
       for ($i=0; $i <$x ; $i++) { 
       	# code...

       	$id_text +=rand(0,9);
       }

       return $id_text ;
  }

 

 ?>