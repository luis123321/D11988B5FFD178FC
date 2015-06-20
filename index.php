<?php 
    include 'php/conexion.php';
    include 'php/reader.php';
    include 'php/frontpagecontent.php';
    mysqli_set_charset($dbconnect,'utf8');
    
    
 ?> 

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Basic -->
        <meta charset="utf-8">
        <title>YourLoteria - Loterias Dominicanas & Internacionales - Loteria Nacional - LEIDSA - Loto Real - Loteka</title>
        <meta name="keywords" content="HTML5 Template" />
        <meta name="description" content="YourLoteria - Loterias Dominicanas - Loteria Nacional - LEIDSA - Loto Real - Loteka">
        
        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Theme CSS -->
        <link href="css/style.css" rel="stylesheet" media="screen">
        <!-- Responsive CSS -->
        <link href="css/theme-responsive.css" rel="stylesheet" media="screen">
        <!-- Skins Theme -->
        <link href="#" rel="stylesheet" media="screen" class="skin">
        
        <script src="js/jquery.js"></script>
        <!-- Favicons -->
        <link rel="shortcut icon" href="img/icons/favicon-loterry.ico">
        <link rel="apple-touch-icon" href="img/icons/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="img/icons/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="img/icons/apple-touch-icon-114x114.png">  

        <!-- Head Libs -->
        <script src="js/modernizr.js"></script>

        <!--[if IE]>
            <link rel="stylesheet" href="css/ie/ie.css">
        <![endif]-->

        <!--[if lte IE 8]>
            <script src="js/responsive/html5shiv.js"></script>
            <script src="js/responsive/respond.js"></script>
        <![endif]-->

        <!-- Skins Changer-->
        <script type="text/javascript" src="http://www.google.com/jsapi"></script>
    </head>

    <body>
        <!-- layout-->
        <div id="layout">
            <!-- Header-->
            <header>
                <!-- End headerbox-->
                <div class="headerbox">
                    <div class="container">
                        <div class="row">
                            <!-- Logo-->
                            <div class="col-md-3 logo">
                                <a href="index.php" title="Return Home">                            
                                    <img src="img/logo.png" alt="Logo" class="logo_img">
                                </a>
                            </div>
                            <!-- End Logo-->

                            <!-- Adds Header-->
                            <div class="col-md-9 adds">
                                <a href="#" target="_blank">
                                    <img src="img/adds/banner.jpg" alt="" class="img-responsive">
                                </a>
                            </div>
                            <!-- End Adds Header-->
                        </div>
                    </div>
                </div>
                <!-- End headerbox-->  
                
                <!-- Mainmenu content -->
                <?php include 'inc/mainmenu_common.php';?>


            </header>
            <!-- End Header-->
            
            <!-- Slide -->           
            <section class="camera_wrap camera_white_skin" id="slide">
                <!-- Item Slide - Caption --> 
                <div class="portada" data-src="img/slide/slides/sobre-nosotros.png">
                    <div class="style-caption fadeFromTop">
                        <div class="overlay-bg"></div>
                         <div class="container"> 
                            <div class="row">
                                <div class="col-md-7">
                                    <h1 class="animated fadeInRight">
                                        <?php echo $titlea; ?>
                                    </h1>   
                                    <p class="animated fadeInRight delay1"><?php echo $contenta; ?></strong></p> 
                                    <div class="more animated fadeInRight delay2">
                                        <a href="#" class="btn btn-primary" name="subscribe" >Mas Informacíon</a>
                                    </div>
                                </div>    
                            </div>                     
                        </div>      
                    </div>
                </div>
                <!-- End Item Slide - Caption  -->

                <!-- Item Slide - Caption --> 
                <div  data-src="img/slide/slides/2.jpg">
                    <div class="style-caption fadeFromTop">
                        <div class="overlay-bg"></div>
                         <div class="container"> 
                            <div class="row">
                                <div class="col-md-7">
                                    <h1 class="animated fadeInRight">
                                         <?php echo $titleb ?>
                                    </h1>   
                                    <p class="animated fadeInRight delay1"><?php echo $contentb ?></p> 
                                    <div class="more animated fadeInRight delay2">
                                        <a href="#" class="btn btn-primary" name="subscribe" >More Info</a>
                                    </div>
                                </div>    
                            </div>                     
                        </div>      
                    </div>
                </div>
                <!-- End Item Slide - Caption  -->

                <!-- Item Slide - Caption --> 
                <div  data-src="img/slide/slides/3.jpg">
                    <div class="style-caption fadeFromTop">
                        <div class="overlay-bg"></div>
                         <div class="container"> 
                            <div class="row">
                                <div class="col-md-7">
                                    <h1 class="animated fadeInRight">
                                        <?php echo $titlec; ?>
                                    </h1>   
                                    <p class="animated fadeInRight delay1"><?php echo $contentc; ?></p> 
                                    <div class="more animated fadeInRight delay2">
                                        <a href="#" class="btn btn-primary" name="subscribe" >More Info</a>
                                    </div>
                                </div>    
                            </div>                     
                        </div>      
                    </div>
                </div>
                <!-- End Item Slide - Caption  -->  
            </section>   
            <!-- End Slide --> 

            <!-- Section Area - Content Central -->
            <section class="content-info">

                <div class="semiboxshadow text-center">
                    <img src="img/img-theme/shp.png" class="img-responsive" alt="">
                </div>
                
                <!-- Dark Home -->
                <div class="bg-dark dark-home">
                    <div class="row">
                        <!-- Left Content - Tabs and Carousel -->
                        <div class="col-md-9">
                            <!-- Nav Tabs -->
                            <ul class="nav nav-tabs" id="myTab">
                               <li class="active"><a href="#feature-news" data-toggle="tab">NOTICIAS DESTACADAS</a></li>
                               <li><a href="#players-staff" data-toggle="tab">ULTIMOS EVENTOS</a></li>
                               <li><a href="#club-news" data-toggle="tab">LOTERIAS</a></li>
                            </ul>
                            <!-- End Nav Tabs -->

                            <!-- Content Tabs -->
                            <div class="tab-content">
                                <!-- Tab One - Feature News -->
                                <div class="tab-pane active" id="feature-news">
                                    <!-- blog post-->  
                                    <ul id="events-carousel" class="events-carousel padding-top">
                                        <!-- Item blog post -->  
                                        <li>
                                            <div class="header-post">
                                                <div class="date">
                                                    <span>13/feb</span>
                                                    2015
                                                </div>
                                                <a href="single-news.html"><img src="img/blog/1.jpg" alt=""></a>
                                                <div class="meta-tag">
                                                    <ul>
                                                        <li><i class="fa fa-user"></i><a href="#">Admin</a></li>
                                                        <li><i class="fa fa-folder-open"></i><a href="#">Design</a></li>
                                                        <li class="text-right"><i class="fa fa-comment"></i><a href="#">10</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="info-post">
                                                <h4><a href="single-news.html">CTA Placement</a></h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            </div>
                                        </li>
                                        <!-- End Item blog post -->

                                        <!-- Item blog post -->  
                                        <li>
                                            <div class="header-post">
                                                <div class="date">
                                                    <span>13/feb</span>
                                                    2015
                                                </div>
                                                <a href="single-news.html"><img src="img/blog/2.jpg" alt=""></a>
                                                <div class="meta-tag">
                                                    <ul>
                                                        <li><i class="fa fa-user"></i><a href="#">Admin</a></li>
                                                        <li><i class="fa fa-folder-open"></i><a href="#">Design</a></li>
                                                        <li class="text-right"><i class="fa fa-comment"></i><a href="#">10</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="info-post">
                                                <h4><a href="single-news.html">Championship Final</a></h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            </div>
                                        </li>
                                        <!-- End Item blog post -->  

                                        <!-- Item blog post -->  
                                        <li>
                                            <div class="header-post">
                                                <div class="date">
                                                    <span>13/feb</span>
                                                    2015
                                                </div>
                                                <a href="single-news.html"><img src="img/blog/3.jpg" alt=""></a>
                                                <div class="meta-tag">
                                                    <ul>
                                                        <li><i class="fa fa-user"></i><a href="#">Admin</a></li>
                                                        <li><i class="fa fa-folder-open"></i><a href="#">Design</a></li>
                                                        <li class="text-right"><i class="fa fa-comment"></i><a href="#">10</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="info-post">
                                                <h4><a href="single-news.html">Confidence indicators</a></h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            </div>
                                        </li>
                                        <!-- End Item blog post -->

                                        <!-- Item blog post -->  
                                        <li>
                                            <div class="header-post">
                                                <div class="date">
                                                    <span>08/jan</span>
                                                    2014
                                                </div>
                                                <a href="single-news.html"><img src="img/blog/4.jpg" alt=""></a>
                                                <div class="meta-tag">
                                                    <ul>
                                                        <li><i class="fa fa-user"></i><a href="#">Admin</a></li>
                                                        <li><i class="fa fa-folder-open"></i><a href="#">Design</a></li>
                                                        <li class="text-right"><i class="fa fa-comment"></i><a href="#">10</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="info-post">
                                                <h4><a href="single-news.html">Championship Final.</a></h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            </div>
                                        </li>
                                        <!-- End Item blog post -->

                                        <!-- Item blog post -->  
                                        <li>
                                            <div class="header-post">
                                                <div class="date">
                                                    <span>08/jan</span>
                                                    2014
                                                </div>
                                                <a href="single-news.html"><img src="img/blog/2.jpg" alt=""></a>
                                                <div class="meta-tag">
                                                    <ul>
                                                        <li><i class="fa fa-user"></i><a href="#">Admin</a></li>
                                                        <li><i class="fa fa-folder-open"></i><a href="#">Design</a></li>
                                                        <li class="text-right"><i class="fa fa-comment"></i><a href="#">10</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="info-post">
                                                <h4><a href="single-news.html">Great Prospects.</a></h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            </div>
                                        </li>
                                        <!-- End Item blog post -->
                                    </ul>
                                    <!-- End blog post-->  
                                </div>
                                <!-- Tab One - Feature News -->

                                <!-- Tab Two - Players Staff -->
                                <div class="tab-pane" id="players-staff">
                                    <h3>Players Staff</h3>
                                    <!-- Item Players-->  
                                    <ul id="players-carousel" class="players ">
                                        <!-- Item Player -->  
                                        <li class="item-player">
                                            <img src="img/players/1.jpg" alt="" class="img-responsive">
                                            <div class="info-player">
                                                <h4><a href="#">Robert</a></h4>
                                                <h5><span>Bmx Sport</span></h5>
                                                <div class="overlay-player">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodn culpa qui officia deserunt mollit anim id est laborum.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- End Player post -->

                                        <!-- Item Player -->  
                                        <li class="item-player">
                                            <img src="img/players/2.jpg" alt="" class="img-responsive">
                                            <div class="info-player">
                                                <h4><a href="#">Robert</a></h4>
                                                <h5><span>Bmx Sport</span></h5>
                                                <div class="overlay-player">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodn culpa qui officia deserunt mollit anim id est laborum.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- End Player post -->

                                        <!-- Item Player -->  
                                        <li class="item-player">
                                            <img src="img/players/3.jpg" alt="" class="img-responsive">
                                            <div class="info-player">
                                                <h4><a href="#">Robert</a></h4>
                                                <h5><span>Bmx Sport</span></h5>
                                                <div class="overlay-player">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodn culpa qui officia deserunt mollit anim id est laborum.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- End Player post -->

                                        <!-- Item Player -->  
                                        <li class="item-player">
                                            <img src="img/players/4.jpg" alt="" class="img-responsive">
                                            <div class="info-player">
                                                <h4><a href="#">Robert</a></h4>
                                                <h5><span>Bmx Sport</span></h5>
                                                <div class="overlay-player">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodn culpa qui officia deserunt mollit anim id est laborum.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- End Player post -->

                                        <!-- Item Player -->  
                                        <li class="item-player">
                                            <img src="img/players/5.jpg" alt="" class="img-responsive">
                                            <div class="info-player">
                                                <h4><a href="#">Robert</a></h4>
                                                <h5><span>Bmx Sport</span></h5>
                                                <div class="overlay-player">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodn culpa qui officia deserunt mollit anim id est laborum.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- End Player post -->

                                        <!-- Item Player -->  
                                        <li class="item-player">
                                            <img src="img/players/6.jpg" alt="" class="img-responsive">
                                            <div class="info-player">
                                                <h4><a href="#">Robert</a></h4>
                                                <h5><span>Bmx Sport</span></h5>
                                                <div class="overlay-player">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodn culpa qui officia deserunt mollit anim id est laborum.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- End Player post -->
                                    </ul>
                                    <!-- End Item Players-->  
                                </div>
                                <!-- Tab Two - Players Staff -->

                                <!-- Tab Theree - Club Teams -->
                                <div class="tab-pane" id="club-news">
                                    <h3>Club Teams</h3>
                                    <!-- Clubs Carousel-->  
                                    <ul id="clubs-carousel" class="clubs-teams">
                                        <!-- Item carousel club -->  
                                        <li class="row">
                                            <!-- Item clubs --> 
                                            <div class="col-sx-12 col-sm-6 col-md-6">
                                                <div class="item-clubs">
                                                    <div class="img-clubs">
                                                        <img src="img/clubs-team/1.png" alt="" class="img-responsive">
                                                    </div>
                                                    <div class="info-clubs">
                                                        <h4><a href="#">Team 1</a></h4>
                                                        <p>Lorem ipsum dolor sit amet,ectetur adipiscing elit.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Item clubs --> 

                                            <!-- Item clubs --> 
                                            <div class="col-sx-12 col-sm-6 col-md-6">
                                                <div class="item-clubs">
                                                    <div class="img-clubs">
                                                        <img src="img/clubs-team/2.png" alt="" class="img-responsive">
                                                    </div>
                                                    <div class="info-clubs">
                                                        <h4><a href="#">Team 2</a></h4>
                                                        <p>Lorem ipsum dolor sit amet, ctetur adipiscing elit.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Item clubs --> 

                                            <!-- Item clubs --> 
                                            <div class="col-sx-12 col-sm-6 col-md-6">
                                                <div class="item-clubs">
                                                    <div class="img-clubs">
                                                        <img src="img/clubs-team/3.png" alt="" class="img-responsive">
                                                    </div>
                                                    <div class="info-clubs">
                                                        <h4><a href="#">Team 3</a></h4>
                                                        <p>Lorem ipsum dolor sit amet, coetur adipiscing elit.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Item clubs --> 

                                            <!-- Item clubs --> 
                                            <div class="col-sx-12 col-sm-6 col-md-6">
                                                <div class="item-clubs">
                                                    <div class="img-clubs">
                                                        <img src="img/clubs-team/4.png" alt="" class="img-responsive">
                                                    </div>
                                                    <div class="info-clubs">
                                                        <h4><a href="#">Team 4</a></h4>
                                                        <p>Lorem ipsum dolor sit amet, contur adipiscing elit.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Item clubs --> 
                                        </li>
                                        <!-- End Item carousel club -->

                                        <!-- Item carousel club -->  
                                        <li class="row">
                                            <!-- Item clubs --> 
                                            <div class="col-sx-12 col-sm-6 col-md-6">
                                                <div class="item-clubs">
                                                    <div class="img-clubs">
                                                        <img src="img/clubs-team/5.png" alt="" class="img-responsive">
                                                    </div>
                                                    <div class="info-clubs">
                                                        <h4><a href="#">Team 5</a></h4>
                                                        <p>Lorem ipsum dolor sit amet,ectetur adipiscing elit.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Item clubs --> 

                                            <!-- Item clubs --> 
                                            <div class="col-sx-12 col-sm-6 col-md-6">
                                                <div class="item-clubs">
                                                    <div class="img-clubs">
                                                        <img src="img/clubs-team/6.png" alt="" class="img-responsive">
                                                    </div>
                                                    <div class="info-clubs">
                                                        <h4><a href="#">Team 6</a></h4>
                                                        <p>Lorem ipsum dolor sit amet, ctetur adipiscing elit.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Item clubs --> 

                                            <!-- Item clubs --> 
                                            <div class="col-sx-12 col-sm-6 col-md-6">
                                                <div class="item-clubs">
                                                    <div class="img-clubs">
                                                        <img src="img/clubs-team/1.png" alt="" class="img-responsive">
                                                    </div>
                                                    <div class="info-clubs">
                                                        <h4><a href="#">Team 7</a></h4>
                                                        <p>Lorem ipsum dolor sit amet, coetur adipiscing elit.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Item clubs --> 

                                            <!-- Item clubs --> 
                                            <div class="col-sx-12 col-sm-6 col-md-6">
                                                <div class="item-clubs">
                                                    <div class="img-clubs">
                                                        <img src="img/clubs-team/4.png" alt="" class="img-responsive">
                                                    </div>
                                                    <div class="info-clubs">
                                                        <h4><a href="#">Team 8</a></h4>
                                                        <p>Lorem ipsum dolor sit amet, contur adipiscing elit.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Item clubs --> 
                                        </li>
                                        <!-- End Item carousel club -->
                                    </ul>
                                    <!-- End Clubs Carousel-->  
                                </div>
                                <!-- Tab Theree - Club Teams -->
                            </div>
                            <!-- Content Tabs -->
                        </div> 
                        <!-- Left Content - Tabs and Carousel -->    

                        <!-- Right Content - Content Counter -->
                        <div class="col-md-3">
                            <aside>
                                <div class="title-color text-center">
                                    <h4>Resultados Loterías</h4>
                                </div>
                                <div class="content-counter content-counter-home">
                                    <p class="text-center"> 
                                        <i class="fa fa-clock-o"></i> 
                                        Hoy
                                    </p>

                                    <div class="contenedor">
                                       Gana Mas
                                   </div>
                                        <div class="new-t"></div> 

                                        <div class="balls-fast">
                                            <div class="cod-sm-4">
                                            <ul class="fast-balls">
                                                <li>09</li>
                                                <li>94</li>
                                                <li>31</li>
                                            </ul>
                                            </div>
                                            
                                        </div>

                                        <div class="contenedor">
                                       Real 
                                   </div>
                                        <div class="new-t"> </div> 
                                        <div class="balls-fast">
                                            <ul class="fast-balls">
                                                <li>
                                                    09
                                                </li>
                                                <li>94</li>
                                                <li>31</li>
                                            </ul>
                                            
                                        </div>

                                        <div class="contenedor">
                                       Lotería Nacional 
                                   </div>
                                        <div class="new-t"> </div>                                         
                                            <div class="balls-fast">
                                            <ul class="qaxwsc fast-balls">
                                                <li>09</li>
                                                <li>94</li>
                                                <li>31</li>
                                            </ul>
                                        </div>                                        
                                    <a class="btn btn-primary" href="about.html">
                                        Todos los resultados
                                        <i class="fa fa-trophy"></i>
                                    </a>
                                </div>
                            </aside>            
                            <!-- Content Counter -->
                        </div>
                        <!-- End Right Content - Content Counter -->
                    </div>
                </div>   
                <!-- Dark Home -->

                                <!-- Content Central -->
                <div class="container padding-top">
                    <div class="row">
                        
                        <!-- content Column Left -->
                        <div class="col-xs-12 col-md-6 col-lg-7">                     
                            <!-- Recent Post -->
                            <div class="panel-box">
                            
                                <div class="titles">
                                    <h4>Recent News</h4>
                                </div>

                                <!-- Post Item -->
                                <div class="post-item">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="img-hover">
                                               <img src="img/blog/1.jpg" alt="" class="img-responsive">
                                               <div class="overlay"><a href="single-news.html">+</a></div>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h4><a href="single-news.html">Porto Alegre and Cuiabá to welcome Valcke</a></h4>
                                            <p class="data-info">January 3, 2014  / <i class="fa fa-comments"></i><a href="#">0</a></p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum, libero id imperdiet elementum, nunc... <a href="single-news.html">Read More [+]</a></p>                                            
                                        </div>
                                   </div>
                                </div>
                                 <!-- End Post Item -->

                                 <!-- Post Item -->
                                <div class="post-item">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="img-hover">
                                               <img src="img/blog/2.jpg" alt="" class="img-responsive">
                                               <div class="overlay"><a href="single-news.html">+</a></div>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h4><a href="single-news.html">Porto Alegre and Cuiabá to welcome Valcke</a></h4>
                                            <p class="data-info">January 9, 2014  / <i class="fa fa-comments"></i><a href="#">5</a></p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum, libero id imperdiet elementum, nunc... <a href="single-news.html">Read More [+]</a></p>                                            
                                        </div>
                                   </div>
                                </div>
                                 <!-- End Post Item -->

                                 <!-- Post Item -->
                                <div class="post-item">
                                    <div class="row">
                                        <div class="col-md-4">
                                          <div class="img-hover">
                                               <img src="img/blog/3.jpg" alt="" class="img-responsive">
                                               <div class="overlay"><a href="single-news.html">+</a></div>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h4><a href="single-news.html">Porto Alegre and Cuiabá to welcome Valcke</a></h4>
                                            <p class="data-info">January  4, 2014  / <i class="fa fa-comments"></i><a href="#">3</a></p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum, libero id imperdiet elementum, nunc... <a href="single-news.html">Read More [+]</a></p>                                            
                                        </div>
                                   </div>
                                </div>
                                 <!-- End Post Item -->

                                 <!-- Post Item -->
                                <div class="post-item">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="img-hover">
                                               <img src="img/blog/4.jpg" alt="" class="img-responsive">
                                               <div class="overlay"><a href="single-news.html">+</a></div>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h4><a href="single-news.html">Porto Alegre and Cuiabá to welcome Valcke</a></h4>
                                            <p class="data-info">January 8, 2014  / <i class="fa fa-comments"></i><a href="#">2</a></p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum, libero id imperdiet elementum, nunc... <a href="single-news.html">Read More [+]</a></p>                                            
                                        </div>
                                   </div>
                                </div>
                                 <!-- End Post Item -->
                            </div>  
                            <!-- End Recent Post --> 

                            <!-- Experts -->
                            <div class="panel-box">                            
                                <div class="titles">
                                    <h4>Sports Experts</h4>
                                </div>     

                                <div class="row">
                                    <div class="col-xs-6 col-sm-3 col-md-4 col-lg-3">
                                        <div class="box-info">
                                            <img src="img/experts/1.png" alt="" class="img-responsive">
                                            <h5 class="entry-title"><a href="#">Lorem ipsum dolor sit amet</a></h5>
                                            <p class="date-box">Abril 15, 2014</p>
                                        </div>
                                    </div> 
                                    <div class="col-xs-6 col-sm-3 col-md-4 col-lg-3">
                                        <div class="box-info">
                                            <img src="img/experts/2.png" alt="" class="img-responsive">
                                            <h5 class="entry-title"><a href="#">Lorem ipsum dolor sit amet</a></h5>
                                            <p class="date-box">Abril 15, 2014</p>
                                        </div>
                                    </div> 
                                    <div class="col-xs-6 col-sm-3 col-md-4 col-lg-3">
                                        <div class="box-info">
                                            <img src="img/experts/3.png" alt="" class="img-responsive">
                                            <h5 class="entry-title"><a href="#">Lorem ipsum dolor sit amet</a></h5>
                                            <p class="date-box">Abril 15, 2014</p>
                                        </div>
                                    </div> 
                                    <div class="col-xs-6 col-sm-3 col-md-4 col-lg-3">
                                        <div class="box-info">
                                            <img src="img/experts/4.png" alt="" class="img-responsive">
                                            <h5 class="entry-title"><a href="#">Lorem ipsum dolor sit amet</a></h5>
                                            <p class="date-box">Abril 15, 2014</p>
                                        </div>
                                    </div> 
                                    <div class="col-xs-6 col-sm-3 col-md-4 col-lg-3">
                                        <div class="box-info">
                                            <img src="img/experts/5.png" alt="" class="img-responsive">
                                            <h5 class="entry-title"><a href="#">Lorem ipsum dolor sit amet</a></h5>
                                            <p class="date-box">Abril 15, 2014</p>
                                        </div>
                                    </div> 
                                    <div class="col-xs-6 col-sm-3 col-md-4 col-lg-3">
                                        <div class="box-info">
                                            <img src="img/experts/3.png" alt="" class="img-responsive">
                                            <h5 class="entry-title"><a href="#">Lorem ipsum dolor sit amet</a></h5>
                                            <p class="date-box">Abril 15, 2014</p>
                                        </div>
                                    </div> 
                                    <div class="col-xs-6 col-sm-3 col-md-4 col-lg-3">
                                        <div class="box-info">
                                            <img src="img/experts/4.png" alt="" class="img-responsive">
                                            <h5 class="entry-title"><a href="#">Lorem ipsum dolor sit amet</a></h5>
                                            <p class="date-box">Abril 15, 2014</p>
                                        </div>
                                    </div> 
                                    <div class="col-xs-6 col-sm-8 col-md-4 col-lg-3">
                                        <div class="box-info">
                                            <img src="img/experts/1.png" alt="" class="img-responsive">
                                            <h5 class="entry-title"><a href="#">Lorem ipsum dolor sit amet</a></h5>
                                            <p class="date-box">Abril 15, 2014</p>
                                        </div>
                                    </div> 

                                </div>                          
                            </div>  
                            <!-- End Experts -->  
                        </div>
                         <!-- End content Left -->

                        <!-- content Sidebar Center -->
                        <aside class="col-xs-12 col-md-6 col-lg-5">                     
                            <!-- Social Networking -->
                            <div class="panel-box">
                            
                                <div class="fbtitle">
                                    
                                    <h4>¡Siguenos en Facebook!</h4>
                                    
                                </div>
                                <!-- Facebook Plugin --> 
                                <div class="fb-page" data-href="https://www.facebook.com/pages/YourLoteria/399200626909236?ref=aymt_homepage_panel" data-width="456" data-height="482" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/pages/YourLoteria/399200626909236?ref=aymt_homepage_panel"><a href="https://www.facebook.com/pages/YourLoteria/399200626909236?ref=aymt_homepage_panel">YourLoteria</a></blockquote></div></div>
                            
                                <!-- End Facebook Plugin -->                                
                            </div>  
                            <!-- End Social Networking --> 

                            <!-- Video presentation -->
                            <div class="panel-box">
                                <div class="titles">
                                    <h4>Presentation</h4>
                                </div>
                                <!-- Locations Video --> 
                                <div class="row">
                                    <iframe src="//www.youtube.com/embed/l12OhR6nxiM" class="video"></iframe>
                                    <div class="col-md-12">
                                        <h4>Rio de Janeiro</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo cillum dolore eu fugiat nulla pariatur.</p>
                                    </div>
                                </div>
                                <!-- End Locations Video --> 
                            </div>  
                            <!-- End Video presentation-->

                            <!-- Widget Text-->
                            <div class="panel-box">
                                <div class="titles">
                                    <h4>Widget Text</h4>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, incididunt ut labore et dolore.</p>
                                    </div>
                                </div>
                            </div>  
                            <!-- End Widget Text-->
                        </aside>
                        <!-- End content Sidebar Center -->
                        
                    </div>                     
                </div>  
                <!-- End Content Central -->

                <!-- Newsletter -->
                <div class="section-wide">
                    <div class="container">
                        <div class="row newsletter">
                            <div class="col-md-12">
                                <div class="text-center">
                                    <h2>¿Quieres estar al tanto de todo? Escribe tu <span class="text-resalt">E-Mail</span> y listo.</h2>
                                    <p>¿Quieres estar al todo de todo? ¿Si? entonces escribe tu Nombre y Tu E-mail aquí abajo, y estarás al tanto de todas la novedades sobre todo lo que deseas saber sobre las loterías dominicanas aquí en
                                    <span class="text-resalt">YourLoteria</span> </p>
                                </div>
                                <form id="newsletterForm" action="php/mailchip/newsletter-subscribe.php">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-envelope"></i>
                                                </span>
                                                <input class="form-control" placeholder="Tu Nombre" name="name"  type="text" required="required">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-envelope"></i>
                                                </span>
                                                <input class="form-control" placeholder="Tu Email" name="email"  type="email" required="required">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-primary" type="submit" name="subscribe" >Suscríbete</button>
                                                 </span>
                                            </div>
                                        </div>
                                    </div>
                                </form>   
                                <div id="result-newsletter"></div>    
                                                
                            </div>
                        </div>
                    </div>
                </div>  
                <!-- End Newsletter -->  
            </section>
            <!-- End Section Area -  Content Central -->
      
            <!-- footer-->
            <footer id="footer">
                <div class="container">

                    <!-- Wiguets Footer-->
                    <div class="row">

                        <!-- Twitter Wiguet-->
                        <div class="col-xs-12 col-sm-7 col-md-3 col-lg-4">
                            <div class="divisor-footer">
                                <i class="fa fa-twitter twit-list"></i>
                                <h4>Ultimos Tweet</h4>                     
                                <div id="twitter"></div>   
                            </div>
                        </div>
                        <!-- End Twitter Wiguet-->

                        <!-- Tags Wiguet-->
                        <div class="col-xs-12 col-sm-5 col-md-3 col-lg-3">
                            <div class="tags">                              
                                <h4>Tags</h4>
                                <a href="#" class="#" title="Tags"><i class="fa fa-tag"></i> corporate </a>
                                <a href="#" class="#" title="Tags"><i class="fa fa-tag"></i> theme </a>
                                <a href="#" class="#" title="Tags"><i class="fa fa-tag"></i> css3 </a>
                                <a href="#" class="#" title="Tags"><i class="fa fa-tag"></i> premium </a>
                                <a href="#" class="#" title="Tags"><i class="fa fa-tag"></i> html5 </a>
                                <a href="#" class="#" title="Tags"><i class="fa fa-tag"></i> business </a>
                                <a href="#" class="#" title="Tags"><i class="fa fa-tag"></i> all purpose </a>
                                <a href="#" class="#" title="Tags"><i class="fa fa-tag"></i> Js </a>
                                <a href="#" class="#" title="Tags"><i class="fa fa-tag"></i> muse </a>
                            </div>
                        </div>
                        <!-- End Tags Wiguet-->
                        
                        <!-- Links Wiguet-->
                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">                            
                            <h4>Noticias Recientes</h4>
                            <ul class="links">
                                <li><i class="fa fa-check"></i> <a href="#">World Cup</a></li>
                                <li><i class="fa fa-check"></i> <a href="#">Teams Members</a></li>
                                <li><i class="fa fa-check"></i> <a href="#">Soccer Champion</a></li>
                                <li><i class="fa fa-check"></i> <a href="#">Champions</a></li>
                            </ul>                            
                        </div>
                        <!-- End Links Wiguet-->

                        <!-- flickr Wiguet-->
                       <!-- <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">                            
                            <h4>Recent flickr</h4>
                            <ul id="flickr" class="thumbs"></ul>                            
                        </div>
                        <!-- End flickr Wiguet--> 
                    </div>
                    <!-- End Wiguets Footer-->

                    <!-- Social Icons-->
                    <div class="row">
                        <ul class="social">
                                <li>
                                    <div>
                                        <a href="https://www.facebook.com/pages/YourLoteria/399200626909236?ref=bookmarks" target="_blank" class="facebook">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <a href="https://twitter.com/YourLoteria" target="_blank" class="twitter-icon">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    
                                    <!-- <div>
                                        <a href="#" class="vimeo">
                                            <i class="fa fa-vimeo-square"></i>
                                        </a>
                                    </div> -->
                                </li>
                                <li>
                                    <div>
                                        <a href="#" class="google-plus">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </div>
                                </li> 
                                <li>
                                    <div>
                                        <a href="#" class="youtube">
                                            <i class="fa fa-youtube"></i>
                                        </a>
                                    </div>
                                </li> 
                        </ul>
                    </div> 
                    <!-- End Social Icons-->

                </div>
            </footer>      
            <!-- End footer-->

            <!-- footer Down-->
            <div class="footer-down">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <p>LAEGlobal - All Rights Reserved. 2015</p>
                        </div>
                        <div class="col-md-7">
                            <!-- Nav Footer-->
                            <ul class="nav-footer">
                                <li><a href="#">HOME</a> </li>
                                <li><a href="#">EVENTS</a></li>
                                <li><a href="#">TEAM</a></li> 
                                <li><a href="#">GALLERY</a></li> 
                                <li><a href="#">SPORT</a></li>                
                                <li><a href="#">CONTACT</a></li>
                            </ul>
                            <!-- End Nav Footer-->
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer Down-->

        </div>
        <!-- End layout-->

        <!-- ======================= JQuery libs =========================== -->
        <!-- jQuery local--> 

        <!-- NAV -->
        <script type="text/javascript" src="js/nav/tinynav.js"></script> 
        <script type="text/javascript" src="js/nav/hoverIntent.js"></script>   
        <script type="text/javascript" src="js/nav/superfish.js"></script> 
        <script src="js/nav/jquery.sticky.js" type="text/javascript"></script> 
        <!-- END NAV -->
        <!--Totop-->
        <script type="text/javascript" src="js/totop/jquery.ui.totop.js" ></script>  
         <!--Accorodion-->
        <script type="text/javascript" src="js/accordion/accordion.js" ></script>  
        <!--Slide-->
        <script type="text/javascript" src="js/slide/camera.js" ></script>      
        <script type='text/javascript' src='js/slide/jquery.easing.1.3.min.js'></script>   
        <!-- Maps -->
        <script src="js/maps/gmap3.js"></script>            
        <!--Ligbox--> 
        <script type="text/javascript" src="js/fancybox/jquery.fancybox.js"></script> 
        <!-- carousel.js-->
        <script src="js/carousel/carousel.js"></script>
        <!-- Filter -->
        <script src="js/filters/jquery.isotope.js" type="text/javascript"></script>
        <!-- Twitter Feed-->
        <script src="js/twitter/jquery.tweet.js"></script> 
        <!-- flickr Feed-->
        <script src="js/flickr/jflickrfeed.min.js"></script> 
        <!-- Counter -->
        <script src="js/counter/jquery.countdown.js"></script>      
        <!--Theme Options-->
        <script type="text/javascript" src="js/theme-options/theme-options.js"></script>
        <script type="text/javascript" src="js/theme-options/jquery.cookies.js"></script> 
        <!-- Bootstrap.js-->
        <script type="text/javascript" src="js/bootstrap/bootstrap.js"></script> 
        <!--MAIN FUNCTIONS-->
        <script type="text/javascript" src="js/main.js"></script>
        <!-- LOAD -->
        <script type="text/javascript" src="js/inc.js"></script>
        <!-- END LOAD -->

        <!-- ======================= End JQuery libs =========================== -->


        <!-- Facebook Plugin -->
        <div id="fb-root"></div>
                <script>(function(d, s, id) {
                  var js, fjs = d.getElementsByTagName(s)[0];
                  if (d.getElementById(id)) return;
                  js = d.createElement(s); js.id = id;
                  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=128434693861954";
                  fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));</script>
        <!-- End Facebook Plugin -->
    </body>
</html>
>