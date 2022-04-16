<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Home</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@0,200;0,500;0,600;1,400;1,600&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    </head>
    <body  onload="askName()">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="#">
                <!--
                <img src="Images/Logo.jpg" width="126" height="126" class="d-inline-block align-top" alt="Girl looking up.">
                -->
                Tracy Fraatz |
            </a>
            <button class="navbar-toggler rounded" type="button" data-toggle="collapse" data-target="#navContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>  
            <div class="collapse navbar-collapse" id="navContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" target="_self" href="home.php">Resume</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aboutme.php" target="_self">About me</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php" target="_self">Contact Me</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" target="_blank" href="Images/Resume outline.pdf">Resume</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!--
            I'm Thinking here have a Jumbotron or some kind of changing image thing. Maybe some pictures of me and Niquito?
        -->
        <div class="container-fluid text-center">    
            <div class="row content">
            <div class="col-sm-2 sidenav" id="LeftSide">
                <br>
                <br>
                <br>
                <h2><a href="#Education" style="text-decoration: none; color: #EEFFFF;">Education</a></h2>
                <br>
                <h2><a href="#TechnicalSkills" style="text-decoration: none; color: #EEFFFF;">Technical Skills</a></h2>
                <br>
                <h2><a href="#CoreComptencies" style="text-decoration: none; color: #EEFFFF;">Core Competancies</a></h2>
                <br>
                <h2><a href="#CertificatesnAwards" style="text-decoration: none; color: #EEFFFF;">Certificates and Awards</a></h2>
                <br>
                <h2><a href="#" style="text-decoration: none; color: #EEFFFF;">Eportfolio of Projects</a></h2>
            </div>
            <div class="col-sm-10 text-left"> 
                <h1>Welcome</h1>
                <p>This is my web development portfolio. This web page will capture all my learning milestones as I start </p>
                <hr class="Design">
                <!-- <h3>Add info</h3> -->
                <p>Lorem ipsum...</p>
                <hr>
                <h3 style="text-align: center;" id="Education">Education</h3>
                    <table class="center">
                        <tr>
                            <th>University</th>
                            <th>Degree</th>
                        </tr>
                        <tr>
                            <td>SLCC</td>
                            <td>Whose to say</td>
                        </tr>
                    </table>
                <hr>
                <h3 style="text-align: center;" id="TechnicalSkills">Technical Skill</h3>
                    <ol>
                        <li>Graphic Design</li>
                        <li>Clip Studio Art</li>
                    </ol>
                <hr>
                <h3 style="text-align: center;" id="CoreComptencies">Core Comptencies</h3>
                    <ul id="corelist">
                        <li>Spanish Speaker</li>
                        <li>Chinchilla Whisperer</li>
                        <li>Decent Cook</li>
                        <li>Child Wrangler</li>
                    </ul>
                    <img src="Images/Chin.jpg" alt="A chinchilla." width="300px" id="chin">
                <hr>
                <h3 style="text-align: center;" id="CertificatesnAwards">Certificates and Awards</h3>
                <ol>
                    <li>Early Childhood Eductaion</li>
                    <li>Baby Certificate</li>
                </ol>
                <hr>
            </div>
        </div>
            <footer class="container-fluid text-center navbar-dark">
                <p>Tracy Fraatz | 2021</p> 
                <p id="jspract"></p>
                <p><a href="contact.php" target="_self">Contact Me</a></p>
            </footer>
        </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
            <script src="script.js"></script>
    </body>
</html>