<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Contact Me</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@0,200;0,500;0,600;1,400;1,600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">
            <!--
            <img src="Images/Logo.jpg" width="126" height="126" class="d-inline-block align-top" alt="Girl looking up.">
            -->
            Tracy Fraatz
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
    <hr>
    <div class="col-sm-2"></div>
    <div id="form" class="col-sm-8 text-center">
        <form action="">
                <label for="FirstName">First Name:</label>
                <input type="text" name="" id="FirstName" class="form">
                <p id="input"></p>
    <br>
    <br>
                <label for="LastName">Last Name:</label>
                <input type="text" name="" id="LastName" class="form">
    <br>
    <br>
    <label for="contactBack">Can we Email you back?</label>
    <br>
                <label for="yes">Yes</label>
                <input type="radio" name="contactt" id="yes">
                <label for="no">No</label>
                <input type="radio" name="contactt" id="no">
    <br>
    <br>
                <label for="Email">Email:</label>
                <input type="email">
    <br>
    <br>
                <label for="comments">Comments:</label><br>
                <textarea name="" id="" cols="30" rows="10" maxlength="300">Write your comment here.</textarea>
    <br>
    <br>
                <input type="submit" onclick="myFunction()">
    <br>
    <br>
        </form>
    </div>
    <div class="col-sm-2"></div>
    <div>
        <footer>
            <p>Tracy Fraatz | 2021</p> 
            <p><a href="email">Write me!</a></p>
        </footer>
    </div>
    <div>
        <script src="script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </div>
</body>
</html>