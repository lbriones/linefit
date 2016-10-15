<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Linefit</title>

    <!-- Bootstrap Core CSS -->
    <link href="https://blackrockdigital.github.io/startbootstrap-heroic-features/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="https://blackrockdigital.github.io/startbootstrap-heroic-features/css/heroic-features.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Start Bootstrap</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron hero-spacer">
            <h1>YA TENEMOS TU PLAN $NOMBRE!</h1>

            <?php

            $json=file_get_contents("http://200.55.216.115:8281/hack/paciente?mail=prodriguez1811@gmail.com");
            $data =  json_decode($json);
            
            //print_r($data);
            if (count($data->Entry)) {

                // recorrer json con productos
                    echo $Entry->rut;
            }
            ?>



            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
            <p><a class="btn btn-primary btn-large">Call to action!</a>
            </p>
        </header>

        <hr>

        <!-- Title -->
        <div class="row">
            <div class="col-lg-12">
                <h3>Suplementos</h3>
            </div>
        </div>
        <!-- /.row -->

        <!-- Page Features -->
        <div class="row text-center">


            <?php

            $json=file_get_contents("https://api.mercadolibre.com/sites/MLA/search?q=suplementos&limit=3");
            $data =  json_decode($json);

            //print_r($data);
            if (count($data->results)) {

                // recorrer json con productos
                foreach ($data->results as $idx => $results) {
                // div productos
                echo '<div class="col-md-4 col-sm-4 hero-feature">';

                    // each productos
                    echo '<div class="thumbnail">';
                    echo '<img src="http://placehold.it/800x500" alt="">';
                    echo '<div class="caption">';
                    echo '<p>';
                    echo $results->title;
                    echo '<p>';
                    echo $results->price;
                    echo '<p>';
                    echo $results->thumbnail;
                    echo '<p>';
                    echo $results->permalink;
                    echo '<p>';
                    echo '<a href="#" class="btn btn-primary">Buy Now!</a>';
                    echo '</p>';
                    echo '</div>';
                    echo '</div>';

                // cerrar div de productos
                echo "</div>";
                }
            }              
            ?>


        </div>
        <!-- /.row -->

        <hr>

        <!-- Title -->
        <div class="row">
            <div class="col-lg-12">
                <h3>Productos</h3>
            </div>
        </div>
        <!-- /.row -->

        <!-- Page Features -->
        <div class="row text-center">


            <?php

            $json=file_get_contents("https://api.mercadolibre.com/sites/MLA/search?q=karate&limit=3");
            $data =  json_decode($json);

            //print_r($data);
            if (count($data->results)) {

                // recorrer json con alimentos
                foreach ($data->results as $idx => $results) {
                // div alimentos
                echo '<div class="col-md-4 col-sm-4 hero-feature">';

                    // each alimentos
                    echo '<div class="thumbnail">';
                    echo '<img src="http://placehold.it/800x500" alt="">';
                    echo '<div class="caption">';
                    echo '<p>';
                    echo $results->title;
                    echo '<p>';
                    echo $results->price;
                    echo '<p>';
                    echo $results->thumbnail;
                    echo '<p>';
                    echo $results->permalink;
                    echo '<p>';
                    echo '<a href="#" class="btn btn-primary">Buy Now!</a>';
                    echo '</p>';
                    echo '</div>';
                    echo '</div>';

                // cerrar div de alimentos
                echo "</div>";
                }
            }              
            ?>


        </div>
        <!-- /.row -->

        <hr>


        <!-- Title -->
        <div class="row">
            <div class="col-lg-12">
                <h3>Lugares</h3>
            </div>
        </div>
        <!-- /.row -->

        <!-- Page Features -->
        <div class="row text-center">

            <div class="col-md-4 col-sm-4 hero-feature">
                <div class="thumbnail">
                    <img src="https://s-media-cache-ak0.pinimg.com/originals/26/45/2c/26452c903069990a7918e563d81e61d3.jpg" alt="">
                    <div class="caption">
                        <h3>Gimnasio El golf</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <p>
                            <a href="#" class="btn btn-danger">Reservar!</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-4 hero-feature">
                <div class="thumbnail">
                    <img src="http://alhendin.es/wp-content/uploads/2014/09/Gimnasio-e1412025216960-800x500_c.jpg" alt="">
                    <div class="caption">
                        <h3>Fitness Providencia</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <p>
                            <a href="#" class="btn btn-danger">Reservar!</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-4 hero-feature">
                <div class="thumbnail">
                    <img src="http://floter.com/blog/httpdocs/blog/wp-content/uploads/2015/04/Suelo-gimnasio-gris.jpg" alt="">
                    <div class="caption">
                        <h3>Gimnasio Santiago City</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <p>
                            <a href="#" class="btn btn-danger">Reservar!</a>
                        </p>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.row -->

        <hr>


        <!-- Title -->
        <div class="row">
            <div class="col-lg-12">
                <h3>Staff</h3>
            </div>
        </div>
        <!-- /.row -->

        <!-- Page Features -->
        <div class="row text-center">

            <div class="col-md-4 col-sm-4 hero-feature">
                <div class="thumbnail">
                    <img src="http://www.morethanmuscle.co.uk/images_CMS/blog/30/1460454278_30_BannerImage_Image.jpg" alt="">
                    <div class="caption">
                        <h3>Juan Perez</h3>
                        <p>Trekking Cerros V Región (Campana/Roble).</p>
                        <p>
                            <a href="#" class="btn btn-primary">Contactar!</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-4 hero-feature">
                <div class="thumbnail">
                    <img src="http://bodyshoptc.com/wp-content/uploads/2016/03/posing-coach-dallas1.png" alt="">
                    <div class="caption">
                        <h3>Nicolás Solis</h3>
                        <p>Planificación de Rutinas de entrenamiento mensual.</p>
                        <p>
                            <a href="#" class="btn btn-primary">Contactar!</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-4 hero-feature">
                <div class="thumbnail">
                    <img src="http://utimefitness.hk/wp-content/uploads/2016/01/PERSONAL-TRAINING-02.jpg" alt="">
                    <div class="caption">
                        <h3>Nicole Vergara</h3>
                        <p>Entrenadora Deportes (Natación & Atletismo).</p>
                        <p>
                            <a href="#" class="btn btn-primary">Contactar!</a>
                        </p>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.row -->

        <hr>



        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="https://blackrockdigital.github.io/startbootstrap-heroic-features/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="https://blackrockdigital.github.io/startbootstrap-heroic-features/js/bootstrap.min.js"></script>

</body>

</html>
