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

    
    <!-- Page Content -->
    <div class="container">

		<div class="row">
		<div class="col-md-12">
				<img class="slide-image" src="img/PortadaCrossfit.jpg" alt="">
		    </div>
		 </div>
        <div class="row">
        <br />
        <center>
       <p style=" padding-left:15px; font-family:'Roboto'; font-weight:500; color:#FFF; font-size:2em"> ¿Donde Practicarlo ?</p>
       </center>
               
          <div class="col-md-12">
            
                <div class="row">

                    <div class="col-sm-4 col-lg-4 col-md-4">
       <a href="http://www.accioncrossfit.cl/" target="new">                  
            <span  class="thumbnail"> <img src="img/Lugar1.png" alt="" >
            
            </span>
            
            </a>
            <br />
                     
                        
                  </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
               <a href="http://www.crossfitkorua.com/korua" target="new" >           
            <span  class="thumbnail"> <img src="img/Lugar2.png" alt="" >
            
            
            </span></a><br />
                     
                        
                  </div>
                     <div class="col-sm-4 col-lg-4 col-md-4"  style="border:none;">
                         
       <a href="http://www.bennucrossfit.cl" target="new"  target="new">     <span  class="thumbnail"> <img src="img/Lugar3.png" alt="" >
            </span>
            </a>
            <br />
                     
                        
                  </div>
            </div>
		
         <center>
       <p style=" padding-left:15px; font-family:'Roboto'; font-weight:500; color:#FFF; font-size:2em"> Equipamiento que te puede interesar</p>
       </center>
       			
		<div class="row">
		
		
<?php

            $json=file_get_contents("https://api.mercadolibre.com/sites/MLC/search?q=crossfit&limit=3");
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

            $json=file_get_contents("https://api.mercadolibre.com/sites/MLC/search?q=carbohidratos&limit=3");
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
			
			
			

        </div>


    
   


    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
