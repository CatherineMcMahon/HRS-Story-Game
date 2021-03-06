<?php 

    session_start();
    $_SESSION['sleep'] = 50;
    $_SESSION['nutrition'] = 50;
    $_SESSION['stress'] = 50;
    $_SESSION['grades'] = 50;
    $_SESSION['social' ] = 50;

    $choice = '';
    if( isset($_POST['choice']) ) {
        $choice = $_POST['choice'];
    }
    
    if ($choice == 'choice1')
    {
        $_SESSION['nutrition'] = $_SESSION['nutrition']+ 10;
        $_SESSION['stress'] = $_SESSION['stress']+ 5;
        $_SESSION['sleep'] = $_SESSION['sleep']+ 20;
        header('Location: https://javascript-game-catherinemcmahon.c9users.io/hallway.php');
    } 
    if($choice == 'choice2') 
    {
        $_SESSION['grades'] +=10;
        $_SESSION['sleep'] +=15;
        header('Location: https://javascript-game-catherinemcmahon.c9users.io/hallway.php');
        
    } 
    if($choice == 'choice3')
    {
        $_SESSION['sleep'] +=40;
        $_SESSION['stress']-=15;
        header('Location: https://javascript-game-catherinemcmahon.c9users.io/hallway.php');
    }
    
?>

<html>
    <head>
        <title>HRS Story Game - Home</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">               
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="game.css" />
        <script type="text/javascript" src="storyline.js"></script> 
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    
    </head>
    
    <body>
    <div class="page">
    <div class="container-fluid">
    <div class="row">
                        
    <img id='doll' src='images/doll.jpg' style='position:absolute; display: none;' />
        
            <!-- Modal 1 -->
            <div id="Location" class="modalDialog">
                <div class="col-sm-12">
                    <a href="#close" title="Close" class="close"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
                    <h1 class="lead">You are in your room.</h1>
                </div>
            </div> 
            <!-- Modal 2 -->
            <div id="Map" class="modalDialog">
                <div class="col-sm-12">
                    <a href="#close" title="Close" class="close"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
                    <h1>The Head Royce School</h1>
                    <!--import image-->
                    <h2>Select an area on the image</h2>
                    <img src="images/Aerial-view-930x595-1.jpg" height="280" width="450">
                </div>	
            </div>   
            
            <!--Modal 3-->
            <div id="Levels" class="modalDialogBar">
                <div class="col-sm-12">
                    <a href="#close" title="Close" class="close"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
                    <table class="table table-bordered" style="margin-top:10px;">
                        <tr>
                            <td>Sleep</td>
                            <td>
                                <span style="color:#009900">.......................</style>
                                <div class="progress">
			                      <div class="progress-bar progress-bar-striped active" role="progressbar" style="width:<?php echo $_SESSION['sleep'] ?>%; background-color: #00D7D7;">
			                        <span class="sr-only"></span>
			                      </div>
		                    	</div>
    		                </td>
                        </tr>
                        <tr>
                            <td>Nutrition</td>
                            <td>
                                <span style="color:#009900">.......................</style>
                                <div class="progress">
			                      <div class="progress-bar progress-bar-striped active" role="progressbar" style="width:<?php echo $_SESSION['nutrition']?>%; background-color:orange;">
			                        <span class="sr-only"></span>
			                      </div>
		                    	</div>
                            </td>
                        </tr>
                        <tr>
                            <td>Stress</td>
                            <td>
                                <span style="color:#009900">.......................</style>
                                <div class="progress">
			                      <div class="progress-bar progress-bar-striped active" role="progressbar" style="width:<?php echo $_SESSION['stress']?>%; background-color:#FF6347;">
			                        <span class="sr-only"></span>
			                      </div>
		                    	</div>
                            </td>
                        </tr>
                        <tr>
                            <td>Grades</td>
                            <td>
                                <span style="color:#009900">.......................</style>
                                <div class="progress">
			                      <div class="progress-bar progress-bar-striped active" role="progressbar" style="width:<?php echo $_SESSION['grades']?>%; background-color:green;">
			                        <span class="sr-only"></span>
			                      </div>
		                    	</div>
                            </td>
                        </tr>
                        <tr>
                            <td>Social Life</td>
                            <td>
                                <span style="color:#009900">.......................</style>
                                <div class="progress">
			                      <div class="progress-bar progress-bar-striped active" role="progressbar" style="background-color: #FF14FF; width:<?php echo $_SESSION['social'];?>%;">
			                        <span class="sr-only"></span>
			                      </div>
		                    	</div>
                            </td>
                        </tr>
                    </table>
                </div>	
            </div>   
           
        </div>
    </div>
    </div>
    
    <canvas id="drawing" style="border:1px solid #000000; float:right; display: inline-block; width:100%; height:100%; margin:auto; overflow: hidden; position:absolute; background-size: cover;" height ="440px" width="1000px">
    <img id='bg' src='images/bedroom.jpg' style='display:none; position:absolute;'>
    <img id='url' src='images/url.jpg' style=' display:none; position:absolute;'>
    </canvas>
    
    <script type="text/javascript">
    var audio = new Audio('background-1.mp3');
    var canvas = document.getElementById('drawing');
    var context = canvas.getContext("2d");
    var drag = null;
    var doll = document.getElementById('doll');
    var bg = document.getElementById('bg');
    var url = document.getElementById('url');
    function make_base()
    {
    console.log("make base ran");
    audio.play();
    context.clearRect(0,0, canvas.width, canvas.height);
    doll.mozImageSmoothingEnabled = true;
    doll.webkitImageSmoothingEnabled = true;
    doll.msImageSmoothingEnabled = true;
    doll.imageSmoothingEnabled = true;
    context.drawImage(bg, 0, 0, 1200, 470);
    context.drawImage(doll, 600, 80, 250, 350);
   // context.drawImage(url, 50, 320, 900, 150);
   // context.font = "20px Cambria";
    //context.fillText("You had a good day at school. You got an A on your Enelow paper.",55, 380);
    //context.fillText("A fellow classmate invited you to a party tonight. Do you want to go?", 55, 420);
    //context.fillText("YOU ARE AT HEAD-ROYCE",20,60);
    context.font = "19px Cambria";
    drag != null;           
    }
    
    window.onload = make_base;    
    </script>

    <!-- Current Backgrounds
    Pool - http://cahill-sf.com/sites/default/files/styles/header-slideshows/public/projects/head-royce-school/headroycepool.jpg
    Gym - http://www.ratcliffarch.com/content/projects/MPNewLowMSGym/Head-Royce_3a.jpg
    Field - Cole
    Home - Cole
    -->
       <!--
        <nav class="navbar navbar-tabs" id="nav">
            <ul class="nav nav-pills nav-stacked" id="bottomnav">
                <li role="presentation"><a href="#Location" class="scroll">Location</a></li>
                <li role="presentation"><a href="map.html" class="scroll">Map</a></li>
                <li role="presentation"><a href="#Levels" class="scroll">Levels</a></li>
            </ul>
        </nav> 
        
        -->
    <nav class="navbar navbar-inverse" style="background-color:green">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#" style="color: white">Head-Royce Virtual Game</a>
        </div>
        <ul class="nav navbar-nav">
          <li><a href="map.html">Map</a></li>
          <!--<li class="dropdown">-->
          <!--  <a class="dropdown-toggle" data-toggle="dropdown">Possible Activities-->
          <!--  <span class="caret"></span></a>-->
          <!--  <ul class="dropdown-menu"></li>-->
          <!--    <li><a href="#">Workout</a></li>-->
          <!--    <li><a href="#">Eat</a></li>-->
          <!--    <li><a href="#">Sleep</a></li> -->
          <!--    <li><a href="#">Do Homework</a></li>-->
          <!--  </ul>-->
          <!-- </li> -->
           <li role="presentation"><a href="#Levels">Levels</a></li>
           <li role="presentation"><a href="#Location" class="scroll">Location</a></li>
        </ul>
        <div style="float:right">
            <button type="button" class="btn btn-default" onclick="unmute()" aria-label="Unmute" id="unmute">
            <span class="glyphicon glyphicon-volume-up" aria-hidden="true"></span>
        </button>
        <button type="button" class="btn btn-default" onclick="mute()" aria-label="Mute" id = "mute">
            <span class="glyphicon glyphicon-volume-off" aria-hidden="true"></span>
        </button>
        <script>
            function mute() {
                audio.pause();
            }
            function unmute() {
                audio.play();
            }
        </script>
        </div>
      </div>
    </nav>
            
           
        <!-- Storyline -->
        
        <div id="StoryRect" class="well" style=" min-height: 60px; float: bottom; position:absolute; background-color:gold; margin-left: 200px; margin-top: 140px; opacity:0.9;">
            <h1 class="lead"><strong>7:30am</strong> What would you like to do before going to school?</h1>
            <form action="room.php" name="RoomActivities" method="POST" class="form-horizontal">
				<h3 class="lead"><input type="radio" name="choice" value="choice1"> Eat breakfast<br>
				<input type="radio" name="choice" value="choice2">  Study for test today<br>
				<input type="radio" name="choice" value="choice3">  Go back to sleep<br><br>
			    <input type="submit" value="Next" name="Room1" class="btn btn-lg"  style="background-color:green; color:yellow;">
	        </form>
        </div> 
        
         <!-- <div id="StoryRect" class="well" style=" min-height: 60px; float: bottom; position:absolute; background-color:gold; margin-left: 200px; margin-top: 140px; opacity:0.9;">
            <h1 class="lead">Welcome to the Head Royce Virtual Simulator! </h1>
			    <input type="submit" value="Next" name="Room1" class="btn btn-lg"  style="background-color:green; color:yellow;">
	        </form>
        </div> -->
        
    </body>
</html>