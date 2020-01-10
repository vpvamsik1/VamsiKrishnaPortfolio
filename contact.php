<?php

$error = ""; $successMessage = "";
    if ($_POST) {

      

        if (!$_POST["email"]) {

            $error.= "The email field is required<br>"; 

        } 
        
        if (!$_POST["subject"]) {

            $error.= "The subject field is required<br>"; 

        } 
        
        if (!$_POST["content"]) {
            
            $error.= "The content field is required<br>"; 
    
        }

        if ($_POST["email"] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) {
            
            $error.= "The email address is invalid<br>"; 
        }

        if($error) {

            $error = "<div class='alert alert-danger' role='alert'><strong>There were error(s) in your submission:</strong><br> " . $error . "</div>";
        
        } else {

            $emailTo = "vpvamsik1@gmail.com";
            $subject = $_POST["subject"];
            $content = $_POST["content"];
            $headers = "From: ".$_POST["email"];

            if (mail($emailTo, $subject, $content, $headers)) {

                $successMessage = "<div class='alert alert-success' role='alert'><strong>Your email was sent successful</strong></div>";
        
            } else {
        
                $error = "<div class='alert alert-danger' role='alert'><strong>Your message could not be sent. Please try again later</strong></div>";
        
            }

        } 
    }
?>





<!DOCTYPE html>
<html lang="en">
<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.12.0/css/all.css" integrity="sha384-ekOryaXPbeCpWQNxMwSWVvQ0+1VrStoPJq54shlYhR8HzQgig1v5fas6YgOqLoKz" crossorigin="anonymous">
    <title>Contact</title>
    <!-- <link href="jquery-ui-1.12.1/jquery-ui.css" rel="stylesheet"> -->
</head>
<body>

<nav id="N1" class="navbar navbar-expand-lg fixed-top navbar-dark">
      <div id="invisible"></div>
      <div id="icons">
      <a href="https://github.com/vpvamsik1" title="Go to Github page"><i class="fab fa-github" id="I1"></i></a>
          <a href="https://www.linkedin.com/in/vamsi-krishna-pappusetti-14b636123/" title="Go to LinkedIn page"><i class="fab fa-linkedin" id="I2"></i></a>
      </div>
    
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
  
          <li class="nav-item">
              <a class="nav-link" href="index.html">About <span class="sr-only">(current)</span></a>
            </li>
        
          <li class="nav-item">
            <a class="nav-link" href="work.html" >
              Work
            </a>
       
          </li>
          <li class="nav-item">
            <a class="nav-link" href="resume.html">Resume</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="contact.html">Contact</a>
          </li>

        </ul>
      </div>
    </nav>

      <div class="container">

        <div id="contact">
         
    <h2>Get in touch!</h2>
    <div id="error">
         <!-- <? echo $error.$successMessage; ?> -->
    </div>

    <form method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Email: </label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else</small> -->
        </div>
        <div class="form-group">
            <label for="subject">Subject: </label>
            <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter subject">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Message: </label>
            <textarea class="form-control" id="content" name="content" rows="3" placeholder="Your message"></textarea>
        </div>
        <div class="buttonSec">
        <button type="submit" class="btn btn-primary" id="B2">Submit</button>
        </div>
    </form>
           
        </div>

      </div>

      <!-- <nav class="navbar fixed-bottom navbar-light justify-content-end"></nav>
      <a id="credit" style="background-color:black;color:white;text-decoration:none;padding:4px 6px;font-family:-apple-system, BlinkMacSystemFont, &quot;San Francisco&quot;, &quot;Helvetica Neue&quot;, Helvetica, Ubuntu, Roboto, Noto, &quot;Segoe UI&quot;, Arial, sans-serif;font-size:12px;font-weight:bold;line-height:1.2;display:inline-block;border-radius:3px" href="https://unsplash.com/@nasa?utm_medium=referral&amp;utm_campaign=photographer-credit&amp;utm_content=creditBadge" target="_blank" rel="noopener noreferrer" title="Download free do whatever you want high-resolution photos from NASA"><span style="display:inline-block;padding:2px 3px"><svg xmlns="http://www.w3.org/2000/svg" style="height:12px;width:auto;position:relative;vertical-align:middle;top:-2px;fill:white" viewBox="0 0 32 32"><title>unsplash-logo</title><path d="M10 9V0h12v9H10zm12 5h10v18H0V14h10v9h12v-9z"></path></svg></span><span style="display:inline-block;padding:2px 3px">NASA</span></a>
      </nav> -->
      <nav class="navbar fixed-bottom navbar-light justify-content-end">
        <a id="credit" style="background-color:black;color:white;text-decoration:none;padding:4px 6px;font-family:-apple-system, BlinkMacSystemFont, &quot;San Francisco&quot;, &quot;Helvetica Neue&quot;, Helvetica, Ubuntu, Roboto, Noto, &quot;Segoe UI&quot;, Arial, sans-serif;font-size:12px;font-weight:bold;line-height:1.2;display:inline-block;border-radius:3px" href="https://unsplash.com/@nasa?utm_medium=referral&amp;utm_campaign=photographer-credit&amp;utm_content=creditBadge" target="_blank" rel="noopener noreferrer" title="Download free do whatever you want high-resolution photos from NASA"><span style="display:inline-block;padding:2px 3px"><svg xmlns="http://www.w3.org/2000/svg" style="height:12px;width:auto;position:relative;vertical-align:middle;top:-2px;fill:white" viewBox="0 0 32 32"><title>unsplash-logo</title><path d="M10 9V0h12v9H10zm12 5h10v18H0V14h10v9h12v-9z"></path></svg></span><span style="display:inline-block;padding:2px 3px">NASA</span></a>
    </nav>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script type="text/javascript">

    $("form").submit(function(e){
        e.preventDefault();

        var error = "";

        if ($("#subject").val() == "") {

            error += "The subject field is required<br>";

        }

        if ($("#email").val() == "") {

            error += "The email field is required<br>";

        }

        if ($("#content").val() == "") {

            error += "The content field is required<br>";

        }

        if (error != "") {

            $("#error").html("<div class='alert alert-danger' role='alert'><strong>There were error(s) in your submission:</strong><br> " + error + "</div>");

        } else {

           
            $("form").unbind('submit').submit();
            $("#error").html("<div class='alert alert-success' role='alert'><strong>Your email was sent successful</strong></div>");

        }
    });

</script>

</body>
</html>