<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LinkRoll</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/creative.min.css" rel="stylesheet">

</head>

<h1 align="center">LinkRoll</h1>

<body id="page-top">
    <?php

    $data = file("liens.txt");

    $nbLine = count($data);

    $categories = array();

    for ($i = 0; $i < $nbLine; $i++) {
        $values = explode(',', $data[$i]);
        $cat = $values[1];
        if (!in_array($cat, $categories)) {
            $categories[] = $cat;
        }
    }

    sort($categories);

    foreach ($categories as $cat) {
        echo '<section id="services">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h2 class="section-heading">' . $cat . '</h2>
                            <hr class="primary">
                        </div>
                    </div>
                </div>
            </section>

            <section class="no-padding" id="portfolio">
                <div class="container-fluid">
                    <div class="row no-gutter">
            ';
        for ($i = 0; $i < $nbLine; $i++) {
            $values = explode(',', $data[$i]);
            if ($cat == $values[1]) {
                echo '<div class="col-lg-4 col-sm-6">
                        <a href="http://' . $values[0] . '" class="portfolio-box">
                            <img src="//www.apercite.fr/api/apercite/800x500/yes/http://' . $values[0] . '" class="img-responsive" alt="">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-name">' . $values[0] . '</br>Accéder</div>
                                </div>
                            </div>
                        </a>
                    </div>';
            }
        }
        echo '</div>
            </div>
        </section>';
    }

    ?>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/creative.min.js"></script>

</body>

</html>
