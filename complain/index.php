<?php  
session_start();
  ?>
<!DOCTYPE html>
<head>
 <link rel = "icon" href ="img/logg.png" 
        type = "image/x-icon">
	<title> E-Complaints INES-Rihengeri</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="./bot/css/bootstrap.min.css" >
<script type="text/javascript" src="./bot/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="./css/login.css" />

<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
<link rel="stylesheet" type="text/css" href="cssx/util.css">
<link rel="stylesheet" type="text/css" href="cssx/main.css">
<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">

<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">

<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">

<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">


<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">


<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js  ">

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js ">


 <style type="text/css">
  .placeicon {
     font-family: fontawesome
 }

 .custom-control-label::before {
     background-color: #dee2e6;
     border: #dee2e6
 }  

a {
  color: #92badd;
  display:inline-block;
  text-decoration: none;
  font-weight: 400;
}

h2 {
  text-align: center;
  font-size: 16px;
  font-weight: 600;
  text-transform: uppercase;
  display:inline-block;
  margin: 40px 8px 10px 8px; 
  color: #cccccc;
}



/* STRUCTURE */

.wrapper {
  display: flex;
  align-items: center;
  flex-direction: column; 
  justify-content: center;
  width: 100%;
  min-height: 100%;
  padding: 20px;
}

#formContent {
  -webkit-border-radius: 10px 10px 10px 10px;
  border-radius: 10px 10px 10px 10px;
  background: #fff;
  padding: 30px;
  width: 90%;
  max-width: 450px;
  position: relative;
  padding: 0px;
  -webkit-box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
  box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
  text-align: center;
}

#formFooter {
  background-color: #f6f6f6;
  border-top: 0px solid #dce8f1;
  padding: 25px;
  text-align: center;
  -webkit-border-radius: 0 0 10px 10px;
  border-radius: 0 0 10px 10px;
}



/* TABS */

h2.inactive {
  color: #cccccc;
}

h2.active {
  color: #0d0d0d;
  border-bottom: 0px solid #5fbae9;
}



/* FORM TYPOGRAPHY*/

input[type=button], input[type=submit], input[type=reset]  {
  background-color: #56baed;
  border: none;
  color: white;
  padding: 15px 80px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  text-transform: uppercase;
  font-size: 13px;
  -webkit-box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
  box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
  -webkit-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
  margin: 5px 20px 40px 20px;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

input[type=button]:hover, input[type=submit]:hover, input[type=reset]:hover  {
  background-color: #39ace7;
}

input[type=button]:active, input[type=submit]:active, input[type=reset]:active  {
  -moz-transform: scale(0.95);
  -webkit-transform: scale(0.95);
  -o-transform: scale(0.95);
  -ms-transform: scale(0.95);
  transform: scale(0.95);
}

input[type=text],input[type=password] {
  background-color: #f6f6f6;
  border: none;
  color: #0d0d0d;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 5px;
  width: 85%;
  border: 0px solid #f6f6f6;
  -webkit-transition: all 0.5s ease-in-out;
  -moz-transition: all 0.5s ease-in-out;
  -ms-transition: all 0.5s ease-in-out;
  -o-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
  -webkit-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
}

input[type=text]:focus {
  background-color: #fff;
  border-bottom: 0px solid #5fbae9;
}

input[type=text]:placeholder {
  color: #cccccc;
}




/* ANIMATIONS */

/* Simple CSS3 Fade-in-down Animation */
.fadeInDown {
  -webkit-animation-name: fadeInDown;
  animation-name: fadeInDown;
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}

@-webkit-keyframes fadeInDown {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

@keyframes fadeInDown {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

/* Simple CSS3 Fade-in Animation */
@-webkit-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
@-moz-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
@keyframes fadeIn { from { opacity:0; } to { opacity:1; } }

.fadeIn {
  opacity:0;
  -webkit-animation:fadeIn ease-in 1;
  -moz-animation:fadeIn ease-in 1;
  animation:fadeIn ease-in 1;

  -webkit-animation-fill-mode:forwards;
  -moz-animation-fill-mode:forwards;
  animation-fill-mode:forwards;

  -webkit-animation-duration:1s;
  -moz-animation-duration:1s;
  animation-duration:1s;
}

.fadeIn.first {
  -webkit-animation-delay: 0.4s;
  -moz-animation-delay: 0.4s;
  animation-delay: 0.4s;
}

.fadeIn.second {
  -webkit-animation-delay: 0.6s;
  -moz-animation-delay: 0.6s;
  animation-delay: 0.6s;
}

.fadeIn.third {
  -webkit-animation-delay: 0.8s;
  -moz-animation-delay: 0.8s;
  animation-delay: 0.8s;
}

.fadeIn.fourth {
  -webkit-animation-delay: 1s;
  -moz-animation-delay: 1s;
  animation-delay: 1s;
}

/* Simple CSS3 Fade-in Animation */
.underlineHover:after {
  display: block;
  left: 0;
  bottom: -10px;
  width: 0;
  height: 2px;
  background-color: #56baed;
  content: "";
  transition: width 0.2s;
}

.underlineHover:hover {
  color: #0d0d0d;
}

.underlineHover:hover:after{
  width: 100%;
}

a:hover
{
text-decoration-style:none;
}


*:focus {
    outline: none;
} 

#icon {
  width:60%;
}


 </style>

</head>
<body>
	<div class="container-fluid" >
		<div class="row">
			<div class="col-md-6 col-sm-6 col-lg-6 col-xl-6" style="background-color: #fdfdfd;height: 44em;">
				<h1 style="margin: 4rem;color: #d99439;">
					Revolutionary of Intranet System based AI for students Complaint 
                </h1>
              <div class="pc"> <img src="./img/mac3.png" alt="" class="img-fluid laptop animated" style="width: 27rem; height: 27rem;margin-top: -5rem; margin-left: 5rem;"></div>
		</div>
			<div class="col-md-6 col-sm-6 col-lg-6 col-xl-6" style="background-color:#1a3057;height: 44rem;">

                   
               <!--  <form action="index.php" method="POST" style="margin-top: 7rem;margin-left:9rem;border: 0px solid ;padding:2rem;border-radius: 2rem;background-color: #fdfdfd;">
                    <div class="form-group">
                        <img src="./img/logoines.png" alt="" style="width: 13rem;">
                    </div>
                    <div class="form-group">
                      <label for="email">UserName:</label>
                      <img src="./img/id-card.png" alt="" style="width: 20px;position: absolute;top: 294px;left: 197px;"></i>
                      <input type="text" class="form-control" id="userName" name="UserName" required="required">
                       <label for="pwd">Password:</label>
                       <i class="fa fa-key icon"><img src="./img/password.png" alt="" style="width: 20px;position: absolute;top: 388px;left: 197px;"></i>
                      <input type="password" class="form-control" id="passWord" src="./img/password.png" name="passWord"  required="required" >
                    </div>
                    <div class="form-group form-check">
                      <label class="form-check-label">
                        <span class="psw">Forgot <a href="#">password?</a></span>
                      </label>
                    </div>
                    <button type="submit" class="btn btn-info" style="width: 15rem;"><b style="font-size: 20px;" name="logbtn">Login</b><img src="./img/key.png" style="width: 30px;padding-left: 4px;"></button>
                  </form> -->
<div class="wrapper fadeInDown" style="overflow:hidden;">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first " >
         <!--<img src="Govlogo.png" id="icon" alt="User Icon"  height="150" /> -->
         <img src="./img/logg.png" alt="" style="width: 6rem; height:6rem; float: left; border:solid 0px;">

         <font class="text-primary font-weight-bold" style="font-size:2.8vw;"> INES-Ruhengeri</font>
         <hr style="background-color:#d99439; ">
    </div>
 <!-- Login Form -->
    <form action="loggy.php" method="POST" style="border:solid 0px; margin-left: 5px; width: 450px;" class="col-12">
       <br>

             <div class="form-group row justify-content-center px-3">
                               <br><br> <div class="col-12 px-0"> 

                                  <input type="text" placeholder="&#xf007;  User name" class="form-control border-info placeicon col-12" name="username" style="border:solid 1px blue; float: center;"> 
                                </div>
                            </div> <br>

                            <div class="form-group row justify-content-center px-3">
                                <div class="col-12 px-0"> 
                                  <input type="password" placeholder="&#xf084; &nbsp; &#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;" class="form-control border-info placeicon col-12" style="border:solid 1px blue; float: center;" name="password"> </div>
                            </div> <br>
      
      <input type="submit" name="logbtn" id="logbtn" class="fadeIn fourth col-6" value="SIgn In " style="height:50px;font-size: 18px; font-weight: bolder; text-align: center;"> 

    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a href="preset/index.php" target="_blank" class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
<br>

			<p style="color: white;font-size: 30px;position: absolute;top: 2rem;left:6rem;text-align: center;">Enter your credentials to have access...</p>
      </div>	


  </body>
</html>
