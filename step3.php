<?php


header('Content-Type: text/plain;charset=UTF-8');	

$jsonData = '[{correo:prodriguez1811@gmail.cl},{correo:lbriones.tic@gmail.com}]';



            //$json=file_get_contents($jsonData); 
			$data= json_encode($jsonData);
			
			echo $data->correo;
			
			$data = json_decode($data); 
			
			//print_r($data); 
			if (count($data->results)) { 
			// recorrer json con productos foreach 
			foreach ($data->results as $idx => $results) { 
			echo $results->correo;

			} 
			
			}
			
			




/*for(i=0;i<=jsonData.lenght();i++){
	
	
	
}
*/

$MailToAddress = "lbriones.tic@gmail.com,lbriones.tic@gmail.com,";
$MailFromAddress = "hola@neursoft.com";
$MailSubject = "Tu plan de salud ha llegado! ".$_POST['subject'];
    if (!$MailFromAddress) {
    $MailFromAddress .= "".$_POST['email']."";
    }

$Header = "\nTu plan de salud:";
$Footer = "";

    /*foreach ($_POST as $key => $value){
        $Message .= "Field ".htmlspecialchars($key)." is ".htmlspecialchars($value)."<br>";
    }*/
    $Message .= "guidMail: ".$_POST['guidMail']."\n";

    //while(list($key, $val) = each($HTTP_POST_VARS)) {
    //$GLOBALS[$key] = $val;
    //$val=stripslashes($val);
    //$Message .= "$key = $val\n";
    //}



//mail( "$MailFromAddress, lbriones@neursoft.com", "$MailSubject", "$Message", "From: $MailToAddress");
//mail( "$MailToAddress", "$MailSubject", "$Message", "From: $MailFromAddress");


//header ("Location: index.php");
?>