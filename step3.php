<?php


header('Content-Type: text/plain;charset=UTF-8');	



//print_r($arrayData);
  $json=file_get_contents("http://200.55.216.115:8281/hack/paciente");
            $data =  json_decode($json);
            
           //print_r($data);
            if (count($data->Entries)) {

			
                foreach ($data->Entries as $idx => $results) {
                // div productos
              //  echo '<div class="col-md-4 col-sm-4 hero-feature">';

				//echo count($results);
				
				//echo $results[$i]->rut;
				//echo "hola!!!".count($results);
				
					for ($i=0;$i<=count($results);$i++){
						
					//	echo $results[$i]->mail;
						
					//	echo $results[$i]->GUID;
						
						sendMail($results[$i]->mail, $results[$i]->GUID);
		
						
					}
				
				
                // cerrar div de productos
              //  echo "</div>";
				
                }
            }


//echo "hola ".$arrayData[0];

/*
            //$json=file_get_contents($jsonData); 
			//$data= json_encode($jsonData);
			
			$data = json_decode($jsonData);
			//echo $data[0]->correo;
			
			 
			
			//print_r($data); 
			if (count($data->results)) { 
			// recorrer json con productos foreach 
			foreach ($data->results as $idx => $results) { 
			echo $results->correo;

			} 
			
			}
			
			




for(i=0;i<=jsonData.lenght();i++){
	
	
	
}
*/

function sendMail($varmail, $varguid){
	
$MailToAddress = $varmail;
$MailFromAddress = "hola@neursoft.com";
$MailSubject = "Tu plan de salud ha llegado! ".$_POST['subject'];
    if (!$MailFromAddress) {
    $MailFromAddress .= "".$_POST['email']."";
    }

	
$Header = 'MIME-Version: 1.0' . "\r\n";
$Header .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$Header .= "From:".$MailFromAddress. "\r\n";
	
//$Header = "\nTu plan de salud:";
$Footer = "";

//$entrada = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");


		$link= "http://www.neursoft.com/linefit/backup.php?guidMail=".$varguid;
		
		
	$Message .= "<div>";
	$Message .= "<a href='".$link."'> <img src='http://www.neursoft.com/linefit/img/bg_mail.jpeg' /> </a>";
	$Message .= "</div>";
	$Message .= "<div>";
	$Message .= "Hola! <br /><br />";
	$Message .= "Felicitaciones!!! ya tienes tu desafio deportivo";
	$Message .= "<br /><br /><br />";
	$Message .= "Haz click en el siguiente link para acceder a tu desafio deportivo.";
	$Message .= "</div>";
	

	
    $Message .= $link."\n";
    //while(list($key, $val) = each($HTTP_POST_VARS)) {
    //$GLOBALS[$key] = $val;
    //$val=stripslashes($val);
    //$Message .= "$key = $val\n";
    //}





	mail( "$MailToAddress", "$MailSubject", "$Message",$Header );
}

header ("Location: index.php");
?>