<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Consilio</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="shortcut icon" type="image/png" href="{{ URL::to('images/favicon.png') }}"/>
        <link rel="stylesheet" href="{{ URL::to('css/bootstrap.min.css') }}">
        <!--<link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->


        <!--For Plugins external css-->
        <link rel="stylesheet" href="{{ URL::to('css/plugins.css') }}"/>

        <link rel="stylesheet" href="{{ URL::to('css/raleway-webfont.css') }}" />

        <!--Theme custom css -->
        <link rel="stylesheet" href="{{ URL::to('css/style.css') }}">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="{{ URL::to('css/responsive.css') }}" />

        <script src="{{ URL::to('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

		<div class='preloader'><div class='loaded'>&nbsp;</div></div>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="{{ URL::to('images/logo.png') }}" alt="" /></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">

                        <li class="active"><a href="#home">Home</a></li>
                        <li><a href="#about">Over ons</a></li>
                        <li><a href="#service">Services</a></li>
                        <li><a href="#project">Portfolios</a></li>
                        <li><a href="#team">Team</a></li>
                        <li><a href="#blog">Nieuws</a></li>
                        <li><a href="#contact">Contact</a></li>

                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <!--Home page style-->
        <header id="home" class="home">
            <div class="overlay-img">
                <div class="container">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="home-content">

                                <h1><strong>Consilio</strong></h1>
                                <br>
                                <h2>The next generation of developers</h2>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </header>

        <!-- Sections -->
        <section id="about" class="sections">

            <div class="heading-content text-center">

                <h3>Wie zijn wij</h3>

                <p>Consilio is een bedrijf wat bestaat uit 5 mensen. 3 developers en 2 ontwerpers. Ons bedrijf is opgericht in Januari 2018 en ons doel is om op de meest efficiënte manier aan de wensen van de klant te voldoen. Naast web development bieden wij ook een aantal specifieke ontwerp diensten. Zoals onze slogan beschrijft zijn wij een aantal jong volwassenen die streven om de nieuwe generatie van ondernemers te worden. Wij zijn gemotiveerd, vol energie en altijd open om de nieuwste technieken toe te passen in de praktijk. Hieronder kunt u al onze pakketten vinden om precies naar uw wens en budget een fantastische nieuwe website te kunnen hebben. Voor verdere informatie kunt u altijd contact met ons opnemen onder het kopje “Contact”. </p>
            </div>

        </section>

        <section id="twitter" class="sections different-bg">
            <div class="container text-center">

                <!-- Example row of columns -->
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                        <div class="twitter-content">
                            <h5>LATEST FROM TWITTER</h5>
                            <p>Trying out velositey - a simple website building extension for Photoshop.</p>
                            <a target="_blank" href="#">buff.ly/NC8gog</a>
                        </div>
                    </div>


                </div>

            </div> <!-- /container -->
        </section>
        <!-- Sections -->
        <section id="service" class="sections">
            <div class="container text-center">
                <div class="heading-content2">

                    <h4>Services die wij bieden</h4>

                    <p>
                        Consilio biedt een breed assortiment in services voor klanten. We hebben namelijk in onze groep naast het voor de hand liggende ook een aantal andere vaardigheden die voor sommige klanten zeker interressant zullen zijn namelijk:
                    </p>

                </div>
                <!-- Example row of columns -->
                <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="service-content">
                            <i class="fa fa-code"></i>
                            <h5>Developing</h5>
                            <p>Caritas aritas est etiam processus dynaicus qui sequitur mutationem consuetudium lectorum. Mirum est notare quam </p>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="service-content">
                            <i class="fa fa-pencil-square-o"></i>
                            <h5>Designing</h5>
                            <p>Caritas aritas est etiam processus dynaicus qui sequitur mutationem consuetudium lectorum. Mirum est notare quam </p>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="service-content">
                            <i class="fa fa-video-camera"></i>
                            <h5>Video editing</h5>
                            <p>Caritas aritas est etiam processus dynaicus qui sequitur mutationem consuetudium lectorum. Mirum est notare quam </p>
                        </div>
                    </div>

                </div>
            </div> <!-- /container -->
        </section>

    <!-- Sections -->
    <section id="project" class="sections">
        <div class="container text-center">

            <div class="heading-content text-center">

                <h3>Some Recent Project</h3>

                <div class="separator"></div>

                <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim </p>

            </div>
            <!-- Example row of columns -->
            <div class="row">

                <div class="col-md-3 col-sm-6 col-xs-12">

                    <div class="project-item">
						<img src="{{ URL::to('images/project/1.png') }}" alt="" />

						<div class="project-overlay"></div>
						<div class="project-content">
							<h5>PaperClips</h5>
							<div class="project-separator"></div>
							<h6>Branding</h6>
						</div>
					</div>

                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="project-item">
						<img src="{{ URL::to('images/project/2.png') }}" alt="" />

						<div class="project-overlay"></div>
						<div class="project-content">
							<h5>PaperClips</h5>
							<div class="project-separator"></div>
							<h6>Branding</h6>
						</div>
					</div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="project-item">
						<img src="{{ URL::to('images/project/3.png') }}" alt="" />

						<div class="project-overlay"></div>
						<div class="project-content">
							<h5>PaperClips</h5>
							<div class="project-separator"></div>
							<h6>Branding</h6>
						</div>
					</div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="project-item">
						<img src="{{ URL::to('images/project/4.png') }}" alt="" />

						<div class="project-overlay"></div>
						<div class="project-content">
							<h5>PaperClips</h5>
							<div class="project-separator"></div>
							<h6>Branding</h6>
						</div>
					</div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="project-item">
						<img src="{{ URL::to('images/project/1.png') }}" alt="" />

						<div class="project-overlay"></div>
						<div class="project-content">
							<h5>PaperClips</h5>
							<div class="project-separator"></div>
							<h6>Branding</h6>
						</div>
					</div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="project-item">
						<img src="{{ URL::to('images/project/2.png') }}" alt="" />

						<div class="project-overlay"></div>
						<div class="project-content">
							<h5>PaperClips</h5>
							<div class="project-separator"></div>
							<h6>Branding</h6>
						</div>
					</div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="project-item">
						<img src="{{ URL::to('images/project/3.png') }}" alt="" />

						<div class="project-overlay"></div>
						<div class="project-content">
							<h5>PaperClips</h5>
							<div class="project-separator"></div>
							<h6>Branding</h6>
						</div>
					</div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="project-item">
						<img src="{{ URL::to('images/project/4.png') }}" alt="" />

						<div class="project-overlay"></div>
						<div class="project-content">
							<h5>PaperClips</h5>
							<div class="project-separator"></div>
							<h6>Branding</h6>
						</div>
					</div>
                </div>

            </div>

			<div class="project-button">
				<a target="_blank" href="#"><button class="btn btn-default">See All<span><i class="fa fa-long-arrow-right"></i></span></button></a>
			</div>

        </div> <!-- /container -->
    </section>

    <!-- Sections -->
    <section id="twitter" class="sections different-bg">
        <div class="container text-center">

            <!-- Example row of columns -->
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                    <div class="twitter-content">
                        <h5>LATEST FROM TWITTER</h5>
                        <p>Trying out velositey - a simple website building extension for Photoshop.</p>
                        <a target="_blank" href="#">buff.ly/NC8gog</a>
                    </div>
                </div>


            </div>

        </div> <!-- /container -->
    </section>

    <!-- Sections -->
    <section id="team" class="sections lightbg">
        <div class="container text-center">
            <div class="heading-content text-center">

                <h3>Our Team Members</h3>

                <div class="separator"></div>

                <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim </p>

            </div>
            <!-- Example row of columns -->
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
					<div class="main-team">
						<div class="team-details">

						  <img src="{{ URL::to('images/team-img.jpg') }}" alt="" />
							<div class="team-overlay"></div>

							<div class="social">
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-linkedin"></i></a>
							</div>

						</div>

						<div class="members-info">
							<h4><strong>Wesley Verbrugge</strong></h4>
							<h6>Hoofd Programmeur, Hoofd Klantcontact Technische kant</h6>
              <p>Het hoofd van development en een specialist in Laravel. Naast het werk wat hij verricht met het aansturen van de development kant van het bedrijf doet hij ook het vertalen van technisch naar klanten en klanten naar technische kant.</p>
						</div>
					</div>
                </div>

				<div class="col-md-4 col-sm-6 col-xs-12">
					<div class="main-team">
						<div class="team-details">

						  <img src="{{ URL::to('images/team-img.jpg') }}" alt="" />
							<div class="team-overlay"></div>

							<div class="social">
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-linkedin"></i></a>
							</div>

						</div>

						<div class="members-info">
							<h4><strong>Pascall Teunisse</strong></h4>
							<h6>Design Medewerker, Hoofd Klantcontact</h6>
              <p>Gespecialiseerd in het maken van grafische ontwerpen en heeft een creatief brein als het gaat om het beoordelen van de grafische aspecten van websites. Naast deze eigenschappen is hij ook het hoofdpersoon in de contactlegging met klanten.</p>
						</div>
					</div>
                </div>

				<div class="col-md-4 col-sm-6 col-xs-12">
					<div class="main-team">
						<div class="team-details">

						  <img src="{{ URL::to('images/team-img.jpg') }}" alt="" />
							<div class="team-overlay"></div>

							<div class="social">
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-linkedin"></i></a>
							</div>

						</div>

						<div class="members-info">
							<h4><strong>Lean de Jong</strong></h4>
							<h6>Design Medewerker</h6>
              <p>Een creatief aangelegd persoon met grafische/video bewerking vaardigheden die voor het initiële ontwerp van de websites over het algemeen fundamenteel zijn. Bij Lean kun je terecht als je advies wil over hoe je een website van uit de grond op grafisch kan inrichten.</p>
						</div>
					</div>
                </div>




            </div>
            <br>
            <div class="row">
              <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="main-team">
          <div class="team-details">

            <img src="{{ URL::to('images/team-img.jpg') }}" alt="" />
            <div class="team-overlay"></div>

            <div class="social">
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="members-info">
            <h4><strong>Gerben Oevering</strong></h4>
            <h6>Programmeur Medewerker</h6>
            <p>Een zeer energieke en sociale programmeur die er van houdt om websites een extra likje te geven als het gaat om animatie werk. Ook is Gerben actief aanwezig om problemen op te lossen als het gaat om technische aspecten.</p>
          </div>
        </div>
              </div>

              <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="main-team">
          <div class="team-details">

            <img src="{{ URL::to('images/team-img.jpg') }}" alt="" />
            <div class="team-overlay"></div>

            <div class="social">
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="members-info">
            <h4><strong>Remco Hanenburg</strong></h4>
            <h6>Programmeur Medewerker</h6>
            <p>Een persoon met een breed repertoire van vaardigheden. Een over het algemeen ondersteunend persoon die iedereen kan helpen op hun eigen vak gebied. Naast deze vaardigheden kan Remco ook goed de orde bewaren in overleggen.</p>
          </div>
        </div>
              </div>

            </div>
        </div> <!-- /container -->
    </section>


    <!-- Sections -->
    <section id="our-client" class="sections different-bg">
        <div class="container text-center">

            <!-- Example row of columns -->
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">


                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="3000">


                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">

                            <div class="item active">
                                <div class="client-content">
                                    <h3>What Our Clients are saying</h3>
                                    <p>
                                        “It was a pleasure to work with Imran. He is very dedicated and professional.
                                        He worked very hard to satisfy our requirements and the communication was great.”
                                    </p>

                                    <div class="client-basicinfo">
                                        <h6>John Doe</h6>
                                        <a href="#">www.yourwebsite.zt</a>
                                    </div>

                                </div>
                            </div>

							<div class="item">
                                <div class="client-content">
                                    <h3>What Our Clients are saying</h3>
                                    <p>
                                        “It was a pleasure to work with Imran. He is very dedicated and professional.
                                        He worked very hard to satisfy our requirements and the communication was great.”

                                    </p>

                                    <div class="client-basicinfo">
                                        <h6>John Doe</h6>
                                        <a href="#">www.yourwebsite.zt</a>
                                    </div>

                                </div>
                            </div>

							<div class="item">
                                <div class="client-content">
                                    <h3>What Our Clients are saying</h3>
                                    <p>
                                        “It was a pleasure to work with Imran. He is very dedicated and professional.
                                        He worked very hard to satisfy our requirements and the communication was great.”
                                    </p>

                                    <div class="client-basicinfo">
                                        <h6>John Doe</h6>
                                        <a href="#">www.yourwebsite.zt</a>
                                    </div>

                                </div>
                            </div>



                        </div>

						<!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                    </div>



                </div>

            </div>
        </div> <!-- /container -->
    </section>

    <section id="blog" class="sections">

        <div class="heading-content text-center">
                <div class="heading-title">
                    <h3>Nieuws</h3>
					<div class="separator"></div>
                </div>

                <div class="heading-separator"></div>

                <div class="heading-details">
                    <p>Het meest recentelijke nieuws over het bedrijf en onze acties</p>
                </div>
        </div>


		<div id="cd-timeline" class="cd-container">

            <div class="cd-timeline-block">
                <div class="cd-timeline-img cd-location">
                </div> <!-- cd-timeline-img -->

                <div class="cd-timeline-content">
					          <p>10 January, 2016</p>
                    <h2>Typi non habent claritatem insitam</h2>
                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui</p>
                    <a href="#0" class="cd-read-more">Read more</a>
                    <span class="cd-date"><img src="{{ URL::to('images/timeline/timeline.png') }}" alt="timeline" /></span>
                </div> <!-- cd-timeline-content -->
            </div> <!-- cd-timeline-block -->

            <div class="cd-timeline-block">
                <div class="cd-timeline-img cd-location">
                </div> <!-- cd-timeline-img -->

                <div class="cd-timeline-content">
					<p>10 January, 2016</p>
                    <h2>Typi non habent claritatem insitam</h2>
                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui</p>
                    <a href="#0" class="cd-read-more">Read more</a>
                    <span class="cd-date"><img src="{{ URL::to('images/timeline/timeline.png') }}" alt="timeline" /></span>
                </div> <!-- cd-timeline-content -->
            </div> <!-- cd-timeline-block -->

			<div class="cd-timeline-block">
                <div class="cd-timeline-img cd-location">
                </div> <!-- cd-timeline-img -->

                <div class="cd-timeline-content">
                    <p>10 January, 2016</p>
                    <h2>Typi non habent claritatem insitam</h2>
                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui</p>
                    <a href="#0" class="cd-read-more">Read more</a>
                    <span class="cd-date"><img src="{{ URL::to('images/timeline/timeline.png') }}" alt="timeline" /></span>
                </div> <!-- cd-timeline-content -->
            </div> <!-- cd-timeline-block -->


        </div> <!-- cd-timeline -->

    </section>

    <section id="contact" class="sections lightbg">
        <div class="container">

            <div class="heading-content text-center">
                <div class="heading-title">
                    <h3>Contact</h3>
                </div>

            </div>

            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">

                    <form method="post" action="{{ route('contactform.send') }}">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Volledige naam">
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="company" id="exampleInputEmail1" placeholder="Bedrijfsnaam">
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="phone" id="exampleInputEmail1" placeholder="Telefoonnummer">
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Email">
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <textarea class="form-control txt-area" name="bericht" rows="5" placeholder="Bericht"></textarea>
                            </div>
                        </div>

                        <div class="submit-btn"><button type="submit" class="btn btn-default abt-btn">Stuur Bericht</button></div>
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
        </div>
    </section>


    <!--Footer-->
    <footer id="footer" class="sections footer different-bg">

        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-first-content">
                        <div class="logo"><img src="{{ URL::to('images/footer-logo.png') }}" alt="Company Logo" /></div>
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore.</p>
                        <p>eugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta</p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-mid-content">
                        <h4>Recent Posts</h4>

                        <div class="post">
							<div class="post-item">
								<h6>March 30, 2014</h6>
								<a href="#">Duis autem vel eum iriure dolor</a>
							</div>
                        </div>

                        <div class="post">
							<div class="post-item">
								<h6>March 30, 2014</h6>
								<a href="#">Duis autem vel eum iriure dolor</a>
							</div>
                        </div>

                        <div class="post">
							<div class="post-item">
								<h6>March 30, 2014</h6>
								<a href="#">Duis autem vel eum iriure dolor</a>
							</div>
                        </div>

                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-last-content">
                        <h4>Our Address</h4>
                        <p>Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus,luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta </p>

                        <div class="contact-info">
                            <p><i class="fa fa-map-marker"></i>Moonshine St. 14/05 Light</p>
                            <p><i class="fa fa-phone"></i>+00 (123) 456 78 90</p>
                            <p><i class="fa fa-envelope"></i>first.last@email.com</p>
                        </div>

                    </div>
                </div>

            </div>



        </div>

    </footer>

	<div class="scroll-top">

		<div class="scrollup">
			<i class="fa fa-angle-double-up"></i>
		</div>

	</div>

    <script src="{{ URL::to('js/vendor/jquery-1.11.2.min.js') }}"></script>
    <script src="{{ URL::to('js/vendor/bootstrap.min.js') }}"></script>


    <script src="{{ URL::to('js/jquery.easypiechart.min.js') }}"></script>
    <script src="{{ URL::to('js/plugins.js') }}"></script>
    <script src="{{ URL::to('js/modernizr.js') }}"></script>
    <script src="{{ URL::to('js/main.js') }}"></script>

</body>
</html>
