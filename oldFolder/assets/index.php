<?php
$errore="";
$messaggio="";

if($_POST){

    if(!$_POST['email']){
        $errore="E' richiesta un email";
    }
    if(!$_POST['oggetto']){
        $errore="E' richiesto un nome";
    }
    if(!$_POST['messaggio']){

        $errore = "E' richiesta un messaggio";
      }
      


if($_POST["email"]&& filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)===false){
    //filter_var funzione di controllo se email è conforme, anche funzione FILTER_VALIDATE_EMAIL
    $errore=" La mail non è valida!";
}

if($errore!=""){
    $errore="<div class='alert alert-warning' role='alert'>Ci sono errori nel tuo modulo: ".$errore."</div>";
}else{
    
    $indirizzo="emilioverri83@gmail.com";
    $oggetto = $_POST['oggetto'];
    $contenuto = $_POST['messaggio'];
    $headers = "From: " . $_POST['email'];

    if(mail($indirizzo,$oggetto,$contenuto,$headers)){
        $messaggio="<div class='alert alert-success' role='alert'>Grazie per avermi contattato!: ".$messaggio."</div>";
    }
    else{
        $messaggio="<div class='alert alert-danger' role='alert'> Errore nell'invio</div>";
    }
}

}

?>
<!doctype html>
<html lang="en">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Emilio Verri - Portafoglio Personale</title>

    <!--====== Favicon Icon ======-->

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="assets/css/LineIcons.css">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="assets/css/default.css">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="assets/css/style.css">


</head>

<body>

    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader_34">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER ENDS START ======-->

    <!--====== HEADER PART START ======-->

    <header id="home" class="header-area">
        <div class="navigation fixed-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="index.html">
                                <img src="assets/images/logo.png"  alt="Logo">
                            </a> <!-- Logo -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item active"><a class="page-scroll" href="#home">Home</a></li>
                                    <li class="nav-item"><a class="page-scroll" href="#about">About</a></li>
                                    <li class="nav-item"><a class="page-scroll" href="#work">Portfolio</a></li>
                                    <!--<li class="nav-item"><a class="page-scroll" href="#blog">Post</a></li>-->
                                    <li class="nav-item"><a class="page-scroll" href="#contact">Contact</a></li>
                                </ul>
                            </div> <!-- navbar collapse -->
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navigation -->

        <div id="parallax" class="header-content d-flex align-items-center">
            <div class="header-shape shape-one layer" data-depth="0.10">
                <img src="assets/images/banner/shape/shape-1.png" alt="Shape">
            </div> <!-- header shape -->
            <div class="header-shape shape-tow layer" data-depth="0.30">
                <img src="assets/images/banner/shape/shape-2.png" alt="Shape">
            </div> <!-- header shape -->
            <div class="header-shape shape-three layer" data-depth="0.40">
                <img src="assets/images/banner/shape/shape-3.png" alt="Shape">
            </div> <!-- header shape -->
            <div class="header-shape shape-fore layer" data-depth="0.60">
                <img src="assets/images/banner/shape/shape-2.png" alt="Shape">
            </div> <!-- header shape -->
            <div class="header-shape shape-five layer" data-depth="0.20">
                <img src="assets/images/banner/shape/shape-1.png" alt="Shape">
            </div> <!-- header shape -->
            <div class="header-shape shape-six layer" data-depth="0.15">
                <img src="assets/images/banner/shape/shape-4.png" alt="Shape">
            </div> <!-- header shape -->
            <div class="header-shape shape-seven layer" data-depth="0.50">
                <img src="assets/images/banner/shape/shape-5.png" alt="Shape">
            </div> <!-- header shape -->
            <div class="header-shape shape-eight layer" data-depth="0.40">
                <img src="assets/images/banner/shape/shape-3.png" alt="Shape">
            </div> <!-- header shape -->
            <div class="header-shape shape-nine layer" data-depth="0.20">
                <img src="assets/images/banner/shape/shape-6.png" alt="Shape">
            </div> <!-- header shape -->
            <div class="header-shape shape-ten layer" data-depth="0.30">
                <img src="assets/images/banner/shape/shape-3.png" alt="Shape">
            </div> <!-- header shape -->
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-5 col-lg-6">
                        <div class="header-content-right">
                            <h4 class="sub-title">Ciao, mi chiamo</h4>
                            <h1 class="title">Emilio Verri</h1>
                            <p>Professione: Web Designer and Software Developer</p>
                            <a class="main-btn" href="#work">Dai un occhiata ai miei lavori</a>
                        </div> <!-- header content right -->
                    </div>
                    <div class="col-lg-6 offset-xl-1">
                        <div class=" d-none d-lg-block">
                            <img src="assets/images/banner/profilo.png" alt="hero">
                        </div> <!-- header image -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
            <div class="header-social">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="header-social-icon">
                                <ul>
                                    <li><a href="https://www.facebook.com/emilio.verri.3152" target="blank"><i class="lni-facebook-filled"></i></a></li>
                                    <li><a href="https://www.instagram.com/emilio_verri/"  target="blank"><i class="lni-instagram-original"></i></a></li>
                                    <li><a href="https://github.com/EmilioVerri?tab=repositories"  target="blank"><i class="lni-github-original"></i></a></li>
                                    <li><a href="https://www.linkedin.com/in/emilio-verri-911027212/"  target="blank"><i class="lni-linkedin-original"></i></a></li>
                                </ul>
                            </div> <!-- header social -->
                        </div>
                    </div> <!-- row -->
                </div> <!-- container -->
            </div> <!-- header social -->
        </div> <!-- header content -->
    </header>

    <!--====== HEADER PART ENDS ======-->

    <!--====== ABOUT PART START ======-->

    <section id="about" class="about-area pt-125 pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <h2 class="title">Chi sono?</h2>
                        <p>Ciao mi chiamo Emilio e sono un Web Designer and Software Developer. Ho 21 anni e abito a Chiuro un piccolo paesino della Provincia di Sondrio. Sono un ragazzo vivace con una grande passione per la programmazione 🤓.</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-content mt-50">
                        <h5 class="about-title">Le mie conoscenze:</h5>
                        <p>
                        Ho dedicato questi ultimi 2 anni del mio percorso formativo ITS ad approfondire lato back-end php, cercando di imparare qualche meccanica del framework symfony.
                        <br>Lato front-end ho migliorato le mie conoscenze html, css,bootstrap e javaScript 😄. </p>
                        <ul class="clearfix">
                            <li>
                                <div class="single-info d-flex align-items-center">
                                    <div class="info-icon">
                                        <i class="lni-calendar"></i>
                                    </div>
                                    <div class="info-text">
                                        <p><span>Nato il:</span> 13 Aprile 2000</p>
                                    </div>
                                </div> <!-- single info -->
                            </li>
                            <li>
                                <div class="single-info d-flex align-items-center">
                                    <div class="info-icon">
                                        <i class="lni-envelope"></i>
                                    </div>
                                    <div class="info-text">
                                        <p><span>Email:</span>emilioverri83@gmail.com</p>
                                    </div>
                                </div> <!-- single info -->
                            </li>
                            <li>
                                <div class="single-info d-flex align-items-center">
                                    <div class="info-icon">
                                        <i class="lni-phone-handset"></i>
                                    </div>
                                    <div class="info-text">
                                        <p><span>Telefono:</span> +39 3933130400</p>
                                    </div>
                                </div> <!-- single info -->
                            </li>
                            <li>
                                <div class="single-info d-flex align-items-center">
                                    <div class="info-icon">
                                        <i class="lni-map-marker"></i>
                                    </div>
                                    <div class="info-text">
                                        <p><span>Abito a:</span> 23030, Chiuro, SO</p>
                                    </div>
                                </div> <!-- single info -->
                            </li>
                        </ul>
                    </div> <!-- about content -->
                </div>
                <div class="col-xl-5 offset-xl-1 col-lg-6">
                    <div class="about-skills pt-25">
                        <div class="skill-item mt-25">
                            <div class="skill-header">
                                <h6 class="skill-title">HTML</h6>
                                <div class="skill-percentage">
                                    <div class="count-box counted">
                                        <span class="counter">85</span>
                                    </div>
                                    %
                                </div>
                            </div>
                            <div class="skill-bar">
                                <div class="bar-inner">
                                    <div class="bar progress-line" data-width="85"></div>
                                </div>
                            </div>
                        </div> <!-- skill item -->
                        <div class="skill-item mt-25">
                            <div class="skill-header">
                                <h6 class="skill-title">CSS</h6>
                                <div class="skill-percentage">
                                    <div class="count-box counted">
                                        <span class="counter">80</span>
                                    </div>
                                    %
                                </div>
                            </div>
                            <div class="skill-bar">
                                <div class="bar-inner">
                                    <div class="bar progress-line" data-width="80"></div>
                                </div>
                            </div>
                        </div> <!-- skill item -->
                        
                        <div class="skill-item mt-25">
                            <div class="skill-header">
                                <h6 class="skill-title">BOOTSTRAP</h6>
                                <div class="skill-percentage">
                                    <div class="count-box counted">
                                        <span class="counter">75</span>
                                    </div>
                                    %
                                </div>
                            </div>
                            <div class="skill-bar">
                                <div class="bar-inner">
                                    <div class="bar progress-line" data-width="75"></div>
                                </div>
                            </div>
                        </div> <!-- skill item -->
                        <div class="skill-item mt-25">
                            <div class="skill-header">
                                <h6 class="skill-title">PHP</h6>
                                <div class="skill-percentage">
                                    <div class="count-box counted">
                                        <span class="counter">85</span>
                                    </div>
                                    %
                                </div>
                            </div>
                            
                            <div class="skill-bar">
                                <div class="bar-inner">
                                    <div class="bar progress-line" data-width="85"></div>
                                </div>
                            </div>
                        </div> <!-- skill item -->
                        <div class="skill-item mt-25">
                            <div class="skill-header">
                                <h6 class="skill-title">SYMFONY</h6>
                                <div class="skill-percentage">
                                    <div class="count-box counted">
                                        <span class="counter">40</span>
                                    </div>
                                    %
                                </div>
                            </div>
                            
                            <div class="skill-bar">
                                <div class="bar-inner">
                                    <div class="bar progress-line" data-width="40"></div>
                                </div>
                            </div>
                        </div> <!-- skill item -->
                        <div class="skill-item mt-25">
                            <div class="skill-header">
                                <h6 class="skill-title">JAVASCRIPT</h6>
                                <div class="skill-percentage">
                                    <div class="count-box counted">
                                        <span class="counter">80</span>
                                    </div>
                                    %
                                </div>
                            </div>
                            <div class="skill-bar">
                                <div class="bar-inner">
                                    <div class="bar progress-line" data-width="80"></div>
                                </div>
                            </div>
                        </div> <!-- skill item -->
                    </div> <!-- about skills -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== ABOUT PART ENDS ======-->

    <!--====== WORK PART START ======-->

    <section id="work" class="work-area pt-125 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-title pb-25">
                        <h2 class="title">I miei Lavori</h2>
                        <p>Ecco alcuni dei miei lavori svolti nall'ultimo anno:</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-work text-center mt-30">
                        <div class="work-image">
                            <img src="assets/images/work/reactNative.jpg" alt="primoProgettoReactNative">
                        </div>
                        <div class="work-overlay">
                            <div class="work-content">
                                <h3 class="work-title">Con Ueppy.srl ho seguito un corso su React Native utilizzando il framework Expo</h3>
                                <ul>
                                    <li><a class="image-popup" href="assets/images/work/reactNative.jpg"><i class="lni-plus"></i></a></li>
                                    <li><a href="https://github.com/EmilioVerri/shopApp" target="_blank"><i class="lni-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div> <!-- single work -->
                </div>
               
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-work text-center mt-30">
                        <div class="work-image">
                            <img src="assets/images/work/progettoJac.jpg" alt="progettoJacAnoki">
                        </div>
                        <div class="work-overlay">
                            <div class="work-content">
                                <h3 class="work-title">Grazie all'azienda Anoki e Jobs Accademy abbiamo ricevuto una sfida noi ragazzi ICT del secondo anno. <br>Realizzare il progetto "Talenti 4 Future"</h3>
                                <ul>
                                    <li><a class="image-popup" href="assets/images/work/progettoJac.jpg"><i class="lni-plus"></i></a></li>
                                    <li><a href="https://github.com/EmilioVerri/progettoGruppo9User" target="_blank"><i class="lni-link"></i></a></li>
                                    <li><a href="https://www.facebook.com/FondazioneJAC/photos/a.336274213113453/5328740697200088" target="_blank"><i class="lni-pencil"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div> <!-- single work -->
                </div>
               
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-work text-center mt-30">
                        <div class="work-image">
                            <img src="assets/images/work/SnapsClean.jpg" alt="progettoSnapsClean">
                        </div>
                        <div class="work-overlay">
                            <div class="work-content">
                                <h3 class="work-title">Progetto realizzato in php, che ho intenzione di migliorare per poi un giorno pubblicarlo. <br> L'obbiettivo di questo progetto è di rendere il mondo un posto migliore e pulito.</h3>
                                <ul>
                                    <li><a class="image-popup" href="assets/images/work/SnapsClean.jpg"><i class="lni-plus"></i></a></li>
                                    <li><a href="https://github.com/EmilioVerri/projectWork" target="_blank"><i class="lni-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div> <!-- single work -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                  
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== WORK PART ENDS ======-->

   

    <!--====== BLOG PART START ======-->

  <!--  <section id="blog" class="blog-area pt-125 pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center pb-25">
                        <h2 class="title">From The Blog</h2>
                        <p>Nunc id dui at sapien faucibus fermentum ut vel diam. Nullam tempus, nunc id efficitur sagittis, urna est ultricies eros, ac porta sem turpis quis leo.</p>
                    </div>
                </div>
            </div> 
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-8 col-sm-9">
                    <div class="single-blog mt-30">
                        <div class="blog-image">
                            <img src="assets/images/blog/b-1.jpg" alt="Blog">
                        </div>
                        <div class="blog-content">
                            <h4 class="blog-title"><a href="#">Hired Releases 2023 Brand Health.</a></h4>
                            <span>July 26, 2022</span>
                        </div>
                    </div> 
                </div>
                <div class="col-lg-4 col-md-8 col-sm-9">
                    <div class="single-blog mt-30">
                        <div class="blog-image">
                            <img src="assets/images/blog/b-2.jpg" alt="Blog">
                        </div>
                        <div class="blog-content">
                            <h4 class="blog-title"><a href="#">Hired Releases 2023 Brand Health.</a></h4>
                            <span>July 26, 2022</span>
                        </div>
                    </div> 
                </div>
                <div class="col-lg-4 col-md-8 col-sm-9">
                    <div class="single-blog mt-30">
                        <div class="blog-image">
                            <img src="assets/images/blog/b-3.jpg" alt="Blog">
                        </div>
                        <div class="blog-content">
                            <h4 class="blog-title"><a href="#">Hired Releases 2023 Brand Health.</a></h4>
                            <span>July 26, 2022</span>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-more text-center mt-50">
                        <a class="main-btn" href="#">More posts</a>
                    </div> 
                </div>
            </div> 
        </div> 
    </section>-->

    <!--====== BLOG PART ENDS ======-->

    <!--====== CONTACT PART START ======-->

    <section id="contact" class="contact-area pt-125 pb-130 gray-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center pb-25">
                        <h2 class="title">Vuoi conoscermi meglio?</h2>
                        <p>Contattami lasciando la tua email, il tuo nome e una piccola descrizione. <br>Ti risponderò il prima possibile</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
           





          <center><div class="align-items-center  text-white" >

                <div class="col-lg-8">
              
                    <div class="contact-form pt-30">
                    
                        
                       <form id="contact-form" action="" method="post">
                        <div><?php echo $errore . $messaggio; ?></div>
                            <div class="single-form">
                                <input type="text" name="oggetto" placeholder="Nome" required>
                            </div> <!-- single form -->
                            <div class="single-form">
                                <input type="email" name="email" placeholder="Email" required>
                            </div> <!-- single form -->
                            <div class="single-form">
                                <textarea name="messaggio" placeholder="Messaggio" required></textarea>
                            </div> <!-- single form -->
                            <p class="form-message"></p>
                            <div class="single-form">
                                <button class="main-btn" type="submit">Invia</button>
                            </div> <!-- single form -->
                        </form>
                    </div> <!-- contact form -->
                </div>
               
                
            </div> <!-- row -->
        </div> <!-- container --></center>
    </section>

    <!--====== CONTACT PART ENDS ======-->

    <!--====== FOOTER PART START ======-->

    <footer id="footer" class="footer-area">
        <div class="footer-widget pt-130 pb-130">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="footer-content text-center">
                            <a href="index.html">
                                <img src="assets/images/logo2.png" alt="Logo">
                            </a>
                            <p class="mt-">Seguimi sui social per scoprire nuove news su di me:</p>
                            <ul>
                                <li><a href="https://www.facebook.com/emilio.verri.3152" target="blank"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="https://www.instagram.com/emilio_verri/" target="blank"><i class="lni-instagram-original"></i></a></li>
                                <li><a href="https://github.com/EmilioVerri?tab=repositories" target="blank"><i class="lni-github-original"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/emilio-verri-911027212/" target="blank"><i class="lni-linkedin-original"></i></a></li>

                            </ul>
                        </div> <!-- footer content -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer widget -->
        <div class="footer-copyright pb-20">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text text-center pt-20">
                            <p>Copyright © 2021. Emilio Verri</p>
                        </div> <!-- copyright text -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer widget -->
    </footer>

    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->







    <!--====== jquery js ======-->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/popper.min.js"></script>

    <!--====== Magnific Popup js ======-->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>

    <!--====== Parallax js ======-->
    <script src="assets/js/parallax.min.js"></script>

    <!--====== Counter Up js ======-->
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>


    <!--====== Appear js ======-->
    <script src="assets/js/jquery.appear.min.js"></script>

    <!--====== Scrolling js ======-->
    <script src="assets/js/scrolling-nav.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>


    <!--====== Main js ======-->
    <script src="assets/js/main.js"></script>

</body>

</html>
