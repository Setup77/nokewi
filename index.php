<?php
include('includes/langues.php');
include('includes/fonctions.php');
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Le passioné du web.">
        <meta name="author" content="Nokewi">
        <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/auteur.png" />

        <title>Nokewi | portfolio</title>
        <!-- font icons -->
        <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
        <!-- Bootstrap + Meyawo main styles -->
        <link rel="stylesheet" href="assets/css/meyawo.css">
    </head>

    <body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

        <!-- Page Navbar -->
        <nav class="custom-navbar" data-spy="affix" data-offset-top="20">
            <div class="container">
                <a class="logo" href="#">Nokewi</a>

                <ul class="nav">
                    <li class="item">
                        <a class="link" href="#home"><?php echo $scriptLang['Accueil']; ?></a>
                    </li>
                    <li class="item">
                        <a class="link" href="#about"><?php echo $scriptLang['Appropos']; ?></a>
                    </li>
                    <li class="item">
                        <a class="link" href="#portfolio"><?php echo $scriptLang['Travaux']; ?></a>
                    </li>
                    <li class="item">
                        <a class="link" href="#contact"><?php echo $scriptLang['Contacts']; ?></a>
                    </li>
                </ul>
                <a href="javascript:void(0)" id="nav-toggle" class="hamburger hamburger--elastic">
                    <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                    </div>
                </a>
                <form   action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post">  
                    <span class="custom-dropdown custom-dropdown--white">
                        <select class="custom-dropdown__select custom-dropdown__select--white" id="langue" name="lang" title="<?php echo $scriptLang['ChoixLang']; ?>" >
                            <option                                         
                            <?php
                            if (isset($_SESSION['languedusite']) && $_SESSION['languedusite'] == 1) {
                                echo ' selected="selected"';
                            }
                            ?> 

                                value="1|fr" title="<?php echo $scriptLang['Francais']; ?>"><?php echo strtoupper("fr"); ?></option>
                            <option 
                            <?php
                            if (isset($_SESSION['languedusite']) && $_SESSION['languedusite'] == 2) {
                                echo ' selected="selected"';
                            }
                            ?>
                                value="2|en" title="<?php echo $scriptLang['Anglais']; ?>"><?php echo strtoupper("en"); ?></option>
                        </select> </span>    </form>
            </div>
        </nav><!-- End of Page Navbar -->

        <!-- page header -->
        <header id="home" class="header">
            <div class="overlay"></div>
            <div class="header-content container">
                <h1 class="header-title">
                    <span class="up"><?php echo $scriptLang['Salutation']; ?></span>
                    <span class="down">Nokewi</span>
                </h1>  <br />
                <p class="header-subtitle"><?php echo $scriptLang['DEVELOPPEURWEB']; ?></p>

                <a target="_blank" href="https://www.youtube.com/@Web-Nokewi/videos"> <button class="btn btn-primary"><?php echo $scriptLang['Visitask']; ?></button></a>
            </div>
        </header><!-- end of page header -->

        <!-- about section -->
        <section class="section pt-0" id="about">
            <!-- container -->
            <div class="container text-center">
                <!-- about wrapper -->
                <div class="about">
                    <div class="about-img-holder">
                        <img src="assets/imgs/man.png" class="about-img"
                             alt="deadpool">
                    </div>
                    <div class="about-caption">
                        <p class="section-subtitle"><?php echo $scriptLang['whoiam']; ?></p>
                        <h2 class="section-title mb-3"><?php echo $scriptLang['AboutMe']; ?></h2>
                        <p>
                            <?php echo $scriptLang['AboutMeContent']; ?>
                        </p>
                        <button class="btn-rounded btn btn-outline-primary mt-4"><a target="_blank" href="assets/files/<?php if ($_SESSION['languedusite'] == 1) echo 'CvNokewiFrench.pdf';
                            else echo 'CvNokewi.pdf'; ?>"><?php echo $scriptLang['DownloadCV']; ?>  </a></button>
                    </div>
                </div><!-- end of about wrapper -->
            </div><!-- end of container -->
        </section> <!-- end of about section -->

        <!-- service section -->
        <section class="section" id="service">
            <div class="container text-center">
                <p class="section-subtitle"><?php echo $scriptLang['WhatIdo']; ?></p>
                <h6 class="section-title mb-6"><?php echo $scriptLang['Skills']; ?></h6>
                <!-- row -->
                <div class="row">
                    <div class="col-md-4 col-lg-3  col-xs-6 margin-top-40">
                        <div class="service-card">
                            <div class="body">
                                <img src="assets/imgs/pencil-case.svg" alt="HTML5" class="icon">
                                <h6 class="title">HTML5</h6>
                                <p class="subtitle"><?php echo $scriptLang['htlmContent']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3  col-xs-6 margin-top-40">
                        <div class="service-card">
                            <div class="body">
                                <img src="assets/imgs/responsive.svg" alt="CSS3"  class="icon">
                                <h6 class="title">CSS3</h6>
                                <p class="subtitle"><?php echo $scriptLang['CssContent']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 col-xs-6 margin-top-40">
                        <div class="service-card">
                            <div class="body">
                                <img src="assets/imgs/responsive.svg" alt="Javascript" 
                                     class="icon">
                                <h6 class="title">Javascript</h6>
                                <p class="subtitle"><?php echo $scriptLang['JavascriptContent']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3  col-xs-6 margin-top-40">
                        <div class="service-card">
                            <div class="body">
                                <img src="assets/imgs/toolbox.svg"
                                     alt="PHP"  class="icon">
                                <h6 class="title">PHP 7</h6>
                                <p class="subtitle"><?php echo $scriptLang['PhpContent']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3  col-xs-6 margin-top-40">
                        <div class="service-card">
                            <div class="body">
                                <img src="assets/imgs/analytics.svg"
                                     alt="MYSQL"   class="icon">
                                <h6 class="title">MYSQL</h6>
                                <p class="subtitle"><?php echo $scriptLang['MysqlContent']; ?></p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 col-xs-6 margin-top-40">
                        <div class="service-card">
                            <div class="body">
                                <img src="assets/imgs/toolbox.svg"
                                     alt="AJAX"  class="icon">
                                <h6 class="title">AJAX</h6>
                                <p class="subtitle"><?php echo $scriptLang['AjaxContent']; ?></p>
                            </div>
                        </div>
                    </div>
                </div><!-- end of row -->
            </div>
        </section><!-- end of service section -->

        <!-- portfolio section -->
        <section class="section" id="portfolio">
            <div class="container text-center">
                <p class="section-subtitle"><?php echo $scriptLang['WhatCantDo']; ?></p>
                <h6 class="section-title mb-6"><?php echo $scriptLang['MyTasks']; ?></h6>
                <!-- row -->
                <div class="row">
                    <div class="col-md-3 col-xs-6 margin-top-40">
                        <span  id="1AfficherTravail" > 
                            <a  class="portfolio-card AfficherTravail1" href="javascript:void(0)" id="1">
                                <img src="assets/imgs/creerCompte.png" class="portfolio-card-img"
                                     alt="creerCompte">
                                <span class="portfolio-card-overlay">
                                    <span class="portfolio-card-caption">
                                        <h4><?php echo $scriptLang['Task1']; ?></h4>
                                    </span>
                                </span>
                            </a>
<?php echo JsAfficherTravaux(1); ?>
                        </span>

                    </div>
                    <div class="col-md-3 col-xs-6 margin-top-40">
                        <span  id="2AfficherTravail" > 
                            <a class="portfolio-card AfficherTravail2" href="javascript:void(0)" id="2">
                                <img class="portfolio-card-img" src="assets/imgs/connexionDeconnexion.png" class="img-responsive rounded"
                                     alt="connexionDeconnexion">
                                <span class="portfolio-card-overlay">
                                    <span class="portfolio-card-caption">
                                        <h4><?php echo $scriptLang['Task2']; ?></h4>
                                    </span>
                                </span>
                            </a>
<?php echo JsAfficherTravaux(2); ?>
                        </span>    
                    </div>
                    <div class="col-md-3 col-xs-6 margin-top-40">
                        <span  id="3AfficherTravail" > 
                            <a class="portfolio-card AfficherTravail3" href="javascript:void(0)" id="3">
                                <img class="portfolio-card-img" src="assets/imgs/profil.png" class="img-responsive rounded"
                                     alt="profil">
                                <span class="portfolio-card-overlay">
                                    <span class="portfolio-card-caption">
                                        <h4><?php echo $scriptLang['Task3']; ?></h4>
                                    </span>
                                </span>
                            </a>
<?php echo JsAfficherTravaux(3); ?>
                        </span> 
                    </div>

                    <div class="col-md-3 col-xs-6 margin-top-40">
                        <span  id="4AfficherTravail" > 
                            <a class="portfolio-card AfficherTravail4" href="javascript:void(0)" id="4">
                                <img class="portfolio-card-img" src="assets/imgs/langues.png" class="img-responsive rounded"
                                     alt="profil">
                                <span class="portfolio-card-overlay">
                                    <span class="portfolio-card-caption">
                                        <h4><?php echo $scriptLang['Task4']; ?></h4>
                                    </span>
                                </span>
                            </a>
<?php echo JsAfficherTravaux(4); ?>
                        </span> 
                    </div>
                </div><!-- end of row -->
            </div><!-- end of container -->
        </section> <!-- end of portfolio section -->


        <!-- section -->
        <section class="section-sm bg-primary" id="contact">
            <!-- container -->
            <div class="container text-center text-sm-left">
                <!-- row -->
                <div class="row align-items-center">
                    <div class="col-sm offset-md-1 mb-4 mb-md-0">
                        <h6 class="title text-light"><?php echo $scriptLang['DoWantWorkWithMe']; ?></h6>
                        <p class="m-0 text-light"><?php echo $scriptLang['ContactmeByMail']; ?></p>
                    </div>
                    <div class="col-sm offset-sm-2 offset-md-3">
                        <button class="btn btn-lg my-font btn-light rounded"><a href="mailto:nokewi.williams@gmail.com">nokewi.williams@gmail.com</a></button>
                    </div>
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </section> <!-- end of section -->

        <!-- footer -->
        <div class="container">
            <footer class="footer">
                <p class="mb-0">Copyright
                    <script>document.write(new Date().getFullYear())</script>
                </p>
                <div class="social-links text-right m-auto ml-sm-auto">
                    <a href="https://www.youtube.com/@Web-Nokewi/videos" target="_blank" class="link"><i class="ti-youtube"></i></a>
                     <a href="https://www.linkedin.com/in/williams-nokewi-b18154109" target="_blank" class="link"><i class="ti-linkedin"></i></a>
                </div>
            </footer>
        </div> <!-- end of page footer -->
        <div id="BoxModal"></div>
        <!-- core  -->
        <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
        <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

        <!-- bootstrap 3 affix -->
        <script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

        <!-- Meyawo js -->
        <script src="assets/js/meyawo.js"></script>

    </body>

</html>