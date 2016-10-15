<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tu Plan LineFit</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>

<body>

<?php

//$_GET['guidMail'] = '967423ed-a9dc-4005-942d-6c4411dc27ef';

$guidMail = $_GET['guidMail'];

$array1 = array( 
    "9096a380-0976-47e7-927c-1bc58b1abad7" => "img\crossfit\Banner.jpg;img\crossfit\Lugar1.png;img\crossfit\Lugar2.png;img\crossfit\Lugar3.png;http://www.accioncrossfit.cl/;http://www.crossfitkorua.com/korua/;http://www.bennucrossfit.cl/;crossfit;carbohidratos;endomorfo
", 
    "967423ed-a9dc-4005-942d-6c4411dc27ef" => "img\halterofilia\Banner.jpg;img\halterofilia\Lugar1.png;img\halterofilia\Lugar2.png;img\halterofilia\Lugar3.png;http://www.bodycare.cl;http://www.stargym.cl/stargym/;http://www.pacificclub.cl/empresa.html;halterofilia;lcarnitina;endomorfo;967423ed-a9dc-4005-942d-6c4411dc27ef
", 
    "acd8fabb-bd98-4da5-b1aa-1d4bc15f890d" => "img\yoga\Banner.jpg;img\yoga\Lugar1.png;img\yoga\Lugar2.png;img\yoga\Lugar3.png;http://www.yogamandiram.cl/;http://www.yogayi.cl/web2/;http://www.academiachilenadeyoga.cl/;yoga;omega3;mesomorfo;acd8fabb-bd98-4da5-b1aa-1d4bc15f890d
",
	"e3280f45-774a-455c-a87f-d2d18deac151" => "img/karate/Banner.jpg;img/karate/Lugar1.png;img/karate/Lugar2.png;img/karate/Lugar3.png;http://www.nihonkaratedo.cl/;http://www.santiagobudokan.cl/clases/karate-shorin-ryu/;http://www.karategojuryu.cl/;Karate;frutossecos;mesomorfo;e3280f45-774a-455c-a87f-d2d18deac151
", 
    "1059aa70-4d41-48c0-bdaf-90aaabf2f300" => "img/natacion/Banner.jpg;img/natacion/Lugar1.png;img/natacion/Lugar2.png;img/natacion/Lugar3.png;http://www.centrodeportivoprovidencia.cl;http://www.centrodenatacion.cl/;http://www.spaprovidencia.cl;natacion;creatina;ectomorfo;1059aa70-4d41-48c0-bdaf-90aaabf2f300
",
	"7f07765b-d0ef-42e3-898d-0cd1c1e2aa61" => "img/running/Banner.jpg;img/running/Lugar1.png;img/running/Lugar2.png;img/running/Lugar3.png;http://www.centrodeportivoprovidencia.cl;http://www.santiagorunners.cl;http://www.roadrunnerschile.cl;running;betaalanina;ectomorfo;7f07765b-d0ef-42e3-898d-0cd1c1e2aa61
");
	$Banner;
	$lugar1;
	$lugar2;
	$lugar3;
	$linkA;
	$linkB;
	$linkC;
	$criterioA;
	$criterioB;
	$biotipo;

	foreach ($array1 as $key => $value) {
	
	if($key == $guidMail)
	{
	list($Banner,$lugar1,$lugar2,$lugar3,$linkA,$linkB,$linkC,$criterioA,$criterioB,$biotipo)  = explode(";", $value);	
	
	}
		
	}
	
	


?>

    
    <!-- Page Content -->
    <div class="container">

		<div class="row">
		<div class="col-md-12">
        <?php
        
			echo'	<img class="slide-image" src="'.$Banner.'" alt="">'
		?>
            </div>
		 </div>
        <div class="row">
        <br />
        <center>
       <p style=" padding-left:15px; font-family:'Roboto'; font-weight:500; color:#FFF; font-size:2em"> ¿Dónde Practicarlo ?</p>
       </center>
               
          <div class="col-md-12">
            
                <div class="row">

                    <div class="col-sm-4 col-lg-4 col-md-4">
       <?php
       
	   echo '<a href="'.$linkA.'" target="new">';           
         
			echo'<span  class="thumbnail">	<img class="slide-image" src="'.$lugar1.'" alt="">  </span>';
		
        
            echo  '</a>';
			
			?>
       
	        <br />
                     
                        
                  </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
       <?php
       
	   echo '<a href="'.$linkB.'" target="new">';           
       
            
        
			echo'<span  class="thumbnail">	<img class="slide-image" src="'.$lugar2.'" alt="">  </span>';
			echo '</a>';
		?>
            <br />
                     
                        
                  </div>
                     <div class="col-sm-4 col-lg-4 col-md-4"  style="border:none;">
       
	   <?php
       echo '<a href="'.$linkC.'" target="new">';           
                          
			echo'<span  class="thumbnail">	<img class="slide-image" src="'.$lugar3.'" alt="">  </span>';
			
			echo '</a>';
		?>
        
            
            <br />
                     
                        
                  </div>
            </div>
		
         <center>
       <p style=" padding-left:15px; font-family:'Roboto'; font-weight:500; color:#FFF; font-size:2em"> Equipamiento que te puede interesar</p>
       </center>
       			
		<div class="row">
		
		
<?php

            $json=file_get_contents("https://api.mercadolibre.com/sites/MLC/search?q=".$criterioA."&limit=3&sort=price_asc");
			$data =  json_decode($json);

        //    print_r($data);
            if (count($data->results)) {
				
				$producto ="";
				foreach ($data->results as $idx => $results) {
				$producto .= "<div class=\"col-sm-4 col-lg-4 col-md-4\">";
				$producto .= "<a href=\"$results->permalink\"><div class=\"producto \">";
				$producto .= "<img height=\"80\" width=\"92\" src= $results->thumbnail class= \"\"  alt=\"\">";
                $producto .= "<div class=\"caption\">";
				$producto .= " <h4 class=\"pull-right\"> $ $results->price $results->currency_id  </h4>";
				$producto .= "<h4>   </h4>";
				$producto .= "<p>$results->title</p> ";
				$producto .= "</div></a>";
				$producto .= "<div class=\"ratings\">";
				$producto .= "<p class=\"pull-right\"> $results->condition </p>";
				$producto .= "  <p>";
                $producto .= "  <span class=\"glyphicon glyphicon-star\"></span>";
                $producto .= " <span class=\"glyphicon glyphicon-star\"></span>";
                $producto .= "  <span class=\"glyphicon glyphicon-star\"></span>";
                $producto .= "  <span class=\"glyphicon glyphicon-star\"></span>";
                $producto .= "  <span class=\"glyphicon glyphicon-star\"></span>";
                $producto .= "  </p>";
				$producto .= "</div>";
				$producto .= "</div>";
				$producto .= '</div>';
                 
				}
				
				print_r($producto);

				}
				

			
				?>
		</div>
		
        	
         <center>
       <p style=" padding-left:15px; font-family:'Roboto'; font-weight:500; color:#FFF; font-size:2em"> Suplementos recomendado según tu biotipo</p>
       </center>
        
        <div class="row">
		
		
        
        
<?php

            $json=file_get_contents("https://api.mercadolibre.com/sites/MLC/search?q=".$criterioB."&limit=3&sort=price_asc");
            $data =  json_decode($json);

        //    print_r($data);
            if (count($data->results)) {
				
				$producto ="";
				foreach ($data->results as $idx => $results) {
				$producto .= "<div class=\"col-sm-4 col-lg-4 col-md-4\">";
				$producto .= "<a href=\"$results->permalink\"><div class=\"producto \">";
				$producto .= "<img height=\"80\" width=\"92\" src= $results->thumbnail class= \"\"  alt=\"\">";
                $producto .= "<div class=\"caption\">";
				$producto .= " <h4 class=\"pull-right\"> $ $results->price .$results->currency_id  </h4>";
				$producto .= "<h4>   </h4>";
				$producto .= "<p>$results->title</p> ";
				$producto .= "</div></a>";
				$producto .= "<div class=\"ratings\">";
				$producto .= "<p class=\"pull-right\"> $results->condition </p>";
				$producto .= "  <p>";
                $producto .= "  <span class=\"glyphicon glyphicon-star\"></span>";
                $producto .= " <span class=\"glyphicon glyphicon-star\"></span>";
                $producto .= "  <span class=\"glyphicon glyphicon-star\"></span>";
                $producto .= "  <span class=\"glyphicon glyphicon-star\"></span>";
                $producto .= "  <span class=\"glyphicon glyphicon-star-empty\"></span>";
                $producto .= "  </p>";
				$producto .= "</div>";
				$producto .= "</div>";
				$producto .= '</div>';
                 
				}
				
				print_r($producto);

				}
				

			
				?>
		</div>
			
			
             <center>
       <p style=" padding-left:15px; font-family:'Roboto'; font-weight:500; color:#FFF; font-size:2em"> La evaluación profesional es el primer paso, canjea gratis tu primera sesión.</p>
       <a href="https://www.youtube.com/watch?v=HOUjkcKMF-U">
       <img src="img/bannerinferior.png"  width="1024px;"/>
       </a>
       </center>
			

        </div>


    
   


    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
