
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tom Powers - Portfolio</title>

    <link rel="icon" href="img/computer.png" type="image/png" sizes="16x16">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="font-miz/font-mfizz.css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#top">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Projects</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#resume">Resume</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                    <li>
                        <a class="page-scroll" target="_blank" href="https://github.com/teepow">GitHub</a>
                    </li>
                    <li>
                        <i class="fa fa-github fa-fw fa-2x github-nav"></i>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header id="top" class="header">
        <div class="text-vertical-center">
                <h1>HI, MY NAME IS TOM</h1>
                <h3>I'M A WEB DEVELOPER LOOKING FOR WORK IN THE NYC/NJ AREA</h3>
                <br>
                <a href="#about" class="btn btn-dark btn-lg">Find Out More</a>
        </div>
    </header>

    <!-- About -->
    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Who I Am</h2>
                    <hr class="small">
                    <p class="lead">
                        My name is Tom Powers, and I am a <span id="mostly">mostly</span> self-taught web developer. I have a Management Information Systems degree from the 
                        County College of Morris. There I learned the basics of HTML, CSS, and JavaScript, as well as some other cool stuff like Java, Unix, and 
                        network security. I realized I wasn't going to learn everything I wanted to at school, so I began teaching myself, utilizing online tutorials and resources (Treehouse, Code School, Lynda, Laracasts, PHP the Right Way) with a focus on PHP and Laravel. I am currently looking for a job as a back end junior developer where I can learn from more seasoned developers and contribute to great projects. 
                    </p>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Portfolio -->
    <section id="portfolio" class="portfolio bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h2>Projects</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <h3>Random Movie Generator</h3>
                                <h4>Built with PHP and TMDB API</h4>                                
                                <p>
                                    This site displays a random movie from the TMDB API based on a year and genre that the user chooses. This was kind of tricky because the TMDB API
                                    only allows you to get 20 results at a time, so I had to get a little creative with my queries. I randomly generated a rating and randomly generated 
                                    whether to query movies with ratings less than or greater than the value. Then I randomly generated one of fourteen sort orders. 
                                    This ensured that I didn't get the same 20 movies every time and keep them as random as possible.
                                </p>
                                <img class="img-portfolio img-responsive" src="img/Random-Movie-Generator.png">
                                <div class="portfolio-links">
                                    <ul class="list-inline links-list">
                                        <li class="list-group-item-template">
                                            <a target="_blank" href="http://www.random-movie-generator.tompowers.xyz">Visit Site</a>
                                        </li>
                                        <li class="list-group-item-template">
                                            <a target="_blank" href="https://github.com/teepow/Random-Movie-Generator">GitHub Repo</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Non JavaScript users -->
                                <noscript>
                                    <a target="_blank" href="http://www.random-movie-generator.tompowers.xyz">Visit Site</a>
                                    <a href="https://github.com/teepow/Random-Movie-Generator">Github Repo</a>
                                </noscript>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <h3>CodeTeamUp</h3>
                                <h4>Built with Laravel, MySql, and Bootstrap</h4>
                                <p>
                                    This is a social networking site in which users select programming languages they would like to partner up using. Users can sort their matches
                                    by language or by person with the most matches. Users can view each other's profiles and send messages back and forth. The site uses Bootstrap for the design and Laravel and MySQL on the back end with <a href="https://github.com/laravel/socialite">Socialite</a> to help with GitHub OAuth and <a href="http://image.intervention.io/">Intervention Image</a> for image manipulation. Deployed with Laravel Forge.
                                </p>
                                <img class="img-portfolio img-responsive" src="img/codeteamup.png">
                                <div class="portfolio-links">
                                    <ul class="list-inline links-list">
                                        <li class="list-group-item-template">
                                            <a target="_blank" href="http://www.codeteamup.tompowers.xyz">Visit Site</a>
                                        </li>
                                        <li class="list-group-item-template">
                                            <a target="_blank" href="https://www.github.com/teepow/CodeTeamUp">GitHub Repo</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Non JavaScript users -->
                                <noscript>
                                    <a target="_blank" href="http://www.codeteamup.tompowers.xyz">Visit Site</a>
                                    <a href="https://www.github.com/teepow/CodeTeamUp">Github Repo</a>
                                </noscript>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <h3>StartPage</h3>
                                <h4>Built with Laravel, MySQL, and Bootstrap</h4>
                                <p>
                                    This is a homepage where the user can manage a todo list, pictures, a quote, and links to their favorite websites. It also connects to the Facebook API so the user can display their most recent posts. The site uses Bootstrap for the design and Laravel and MySQL on the back end with <a href="https://github.com/laravel/socialite">Socialite</a> to help with Facebook and Google OAuth and <a href="http://image.intervention.io/">Intervention Image</a> for image manipulation. Deployed with Laravel Forge.
                                </p>
                                <img class="img-portfolio img-responsive" height="333" src="img/StartPage.png">
                                <div class="portfolio-links">
                                    <ul class="list-inline links-list">
                                        <li class="list-group-item-template">
                                            <a target="_blank" href="http://www.startpage.tompowers.xyz">Visit Site</a>
                                        </li>
                                        <li class="list-group-item-template">
                                            <a target="_blank" href="https://www.github.com/teepow/startpage">GitHub Repo</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Non JavaScript users -->
                                <noscript>
                                    <a target="_blank" href="http://www.startpage.tompowers.xyz">Visit Site</a>
                                    <a href="https://www.github.com/teepow/startpage">Github Repo</a>
                                </noscript>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <h3>PHP Function Flashcards</h3>
                                <h4>Built with PHP, MySQL, and Jquery</h4>
                                <p>
                                    This is an application used to memorize php functions (it's not exactly practical). I made a web scraper to scrape the php website and store the results in a MySQL database. The site uses php to display categories and subcategories based on selections made by the user. The flashcard page of the site uses 
                                    JQuery to manipulate the DOM and make ajax calls to the PHP API and the JQuery <a href="http://nnattawat.github.io/flip/">Flip</a> plugin to 
                                    flip the card.
                                </p>
                                <img class="img-portfolio img-responsive" src="img/flashcards.png">
                                <div class="portfolio-links">
                                    <ul class="list-inline links-list">
                                        <li class="list-group-item-template">
                                            <a target="_blank" href="http://www.flashcards.tompowers.xyz">Visit Site</a>
                                        </li>
                                        <li class="list-group-item-template">
                                            <a target="_blank" href="https://www.github.com/teepow/php-flashcards">GitHub Repo</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Non JavaScript users -->
                                <noscript>
                                    <a target="_blank" href="http://www.flashcards.tompowers.xyz">Visit Site</a>
                                    <a href="https://www.github.com/teepow/php-flashcards">Github Repo</a>
                                </noscript>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Resume -->
    <section id="resume" class="resume">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-center resume-header">Resume</h2>
                    <hr class="small">

                    <div class="panel panel-primary technologies">
                        <div class="panel-heading">Technologies</div>
                        <div class="panel-body">
                            <div class="container">
                                <div class="row text-center">
                                    <div class="col-lg-10 col-lg-offset-1">
                                        <div class="row">
                                            <div class="col-md-3 col-sm-6">
                                                <div class="technology-item">
                                                    <span class="fa-stack fa-4x">
                                                    <i class="fa fa-circle fa-stack-2x"></i>
                                                    <i class="fa icon-html fa-stack-1x text-primary"></i>
                                                </span>
                                                    <h4>
                                                        <strong>HTML</strong>
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <div class="technology-item">
                                                    <span class="fa-stack fa-4x">
                                                    <i class="fa fa-circle fa-stack-2x"></i>
                                                    <i class="fa icon-css fa-stack-1x text-primary"></i>
                                                </span>
                                                    <h4>
                                                        <strong>CSS</strong>
                                                    </h4>
                                                    <p>Sass Bootstrap</p>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <div class="technology-item">
                                                    <span class="fa-stack fa-4x">
                                                    <i class="fa fa-circle fa-stack-2x"></i>
                                                    <i class="fa icon-javascript fa-stack-1x text-primary"></i>
                                                </span>
                                                    <h4>
                                                        <strong>JAVASCRIPT</strong>
                                                    </h4>
                                                    <p>Jquery</p>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <div class="technology-item">
                                                    <span class="fa-stack fa-4x">
                                                    <i class="fa fa-circle fa-stack-2x"></i>
                                                    <i class="fa icon-php fa-stack-1x text-primary"></i>
                                                </span>
                                                    <h4>
                                                        <strong>PHP</strong>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.row (nested) -->
                                    </div>
                                    <!-- /.col-lg-10 -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.container -->
                            <div class="container">
                                <div class="row text-center">
                                    <div class="col-lg-10 col-lg-offset-1">
                                        <div class="row">
                                            <div class="col-md-3 col-sm-6">
                                                <div class="technology-item">
                                                    <span class="fa-stack fa-4x">
                                                    <i class="fa fa-circle fa-stack-2x"></i>
                                                    <i class="icon icon-icon-laravel fa-stack-1x text-primary"></i>
                                                </span>
                                                    <h4>
                                                        <strong>LARAVEL</strong>
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <div class="technology-item">
                                                    <span class="fa-stack fa-4x">
                                                    <i class="fa fa-circle fa-stack-2x"></i>
                                                    <i class="fa fa-linux fa-stack-1x text-primary"></i>
                                                </span>
                                                    <h4>
                                                        <strong>LINUX</strong>
                                                    </h4>
                                                    <p>Shell scripting</p>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <div class="technology-item">
                                                    <span class="fa-stack fa-4x">
                                                    <i class="fa fa-circle fa-stack-2x"></i>
                                                    <i class="fa icon-mysql fa-stack-1x text-primary"></i>
                                                </span>
                                                    <h4>
                                                        <strong>MYSQL</strong>
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <div class="technology-item">
                                                    <span class="fa-stack fa-4x">
                                                    <i class="fa fa-circle fa-stack-2x"></i>
                                                    <i class="icon icon-git fa-stack-1x text-primary"></i>
                                                </span>
                                                    <h4>
                                                        <strong>GIT</strong>
                                                    </h4>
                                                    <p>GitHub</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.row (nested) -->
                                    </div>
                                    <!-- /.col-lg-10 -->
                                </div>
                                <!-- /.row -->
                            </div>
                        <!-- /.container -->
                        </div>
                    </div>

                    <div class="panel panel-primary education">
                        <div class="panel-heading">Education</div>
                        <div class="panel-body">
                            <p class="lead">County College of Morris</p>
                            <p class="indent">A.A.S Management Information Systems | <i>May 2015</i></p><br>
                            <p class="indent">Information Security Certificate | <i>May 2015</i></p>
                        </div>

                        <ul class="list-group">
                            <li class="list-group-item">3.81 GPA</li>
                            <li class="list-group-item">Awarded Marie J. Hoen Scholarship in Information Technology</li>
                            <li class="list-group-item">Awarded Dr. Terrence W. West Memorial Scholarship</li>
                            <li class="list-group-item">Coursework including:
                                <ul class="list-inline">
                                    <li class="list-group-item">Web Design I + II</li>
                                    <li class="list-group-item">Computer Science I + II</li>
                                    <li class="list-group-item">Unix I + II</li>
                                    <li class="list-group-item">Systems Analysis and Design</li>
                                    <li class="list-group-item">Operating Systems</li>
                                    <li class="list-group-item">Foundations of Information Security</li>
                                    <li class="list-group-item">Information Security Management</li>
                                    <li class="list-group-item">Network Security</li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <div class="panel panel-primary work-experience">
                        <div class="panel-heading">Work Experience</div>

                        <div class="panel-body">
                                <p class="lead">Tutor</p>
                                <p class="indent">County College of Morris Information Systems Department | <i>January 2015 - May 2015</i></p>
                        </div>

                        <ul class="list-group">
                            <li class="list-group-item">Tutored Information Systems and Computer Science students in courses such as Java and Unix.</li>
                            <li class="list-group-item">Tutored students from all departments in MS Office applications.</li>
                            <li class="list-group-item">Helped less advanced students with basic computer usage.</li>
                        </ul>

                        <div class="panel-body">
                            <p class="lead">Front Desk</p>
                            <p class="indent">County College of Morris Testing Center | <i>December 2013 - August 2014</i></p>
                        </div>

                        <ul class="list-group">
                            <li class="list-group-item">Guided new students and parents through the testing and admissions process for the college.</li>
                            <li class="list-group-item">Scheduled and tracked placement testing, midterms and finals, and CLEP examinations.</li>
                            <li class="list-group-item">Filed reports and performed data entry with Excel.</li>
                        </ul>

                        <div class="panel-body">
                            <p class="lead">Flow Team Member</p>
                            <p class="indent">Target | <i>Novemember 2013 - May 2014</i></p>
                        </div>

                        <ul class="list-group">
                            <li class="list-group-item">Was part of a team responsible for unloading trucks and filling the shelves.</li>
                            <li class="list-group-item">Worked with deadlines on a daily basis.</li>
                            <li class="list-group-item">Regularly interacted with and assisted customers.</li>
                        </ul>

                    </div>

                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Call to Action -->
    <section class="call-to-action bg-primary" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Contact</h2>
                    <hr class="small">

                    <?php 
                        
                        //Form errors or success
                        
                        if(!empty($_GET)) {
                            if(!empty($_GET["success"])) {
                                $successMsg = $_GET["success"];

                                echo "<div class='alert alert-success'>";
                                echo "<p>$successMsg</p>";
                                echo "</div>";
                            } else {
                                echo "<div class='alert alert-danger'>";

                                foreach ($_GET as $error) {
                                    echo "<p>$error</p>";
                                }

                                echo "</div>";
                            }
                        }

                     ?>

                    <div class="form-border">
                        <form method="post" action="mailer.php">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="name" class="form-control" id="name" name="name" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea class="form-control" id="message" name="message" rows="7" placeholder="Message"></textarea>
                            </div>
                            <button type="submit" class="btn btn-default submit">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h4><strong>Tom Powers</strong>
                    </h4>
                    <p>52 Shawnee Road<br>Hopatcong NJ 07843</p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-phone fa-fw"></i> (908)-472-8782</li>
                        <li><i class="fa fa-envelope-o fa-fw"></i>  <a href="mailto:name@example.com">thomas.william.powers@gmail.com</a>
                        </li>
                    </ul>
                    <br>
                    <ul class="list-inline">
                        <li>
                            <a href="#"><i class="fa fa-github fa-fw fa-3x"></i></a>
                        </li>
                    </ul>
                    <hr class="small">
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Added JQuery -->
    <script src="js/app.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script>

    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });

    </script>

</body>

</html>
