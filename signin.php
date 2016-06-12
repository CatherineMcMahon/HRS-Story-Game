<html>
    <head>
        <title>Head-Royce Simulator</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="indexformat.css" />
    </head>

	<body>
    <div class="header">
        <h1><a href="index.html">Head-Royce Simulation</a></h1>
    </div>
    
    <div id="dropdowncolor">
    </div>

    <div class="main">
      <h3>Home Page</h3>
      <form method='GET' name="myForm" action="example.html" onsubmit="myFunction(this, event)">
        <!--code's broken-->
        <label>
          <input type="radio" name="character" value="1" />
          <img src="images/cole.jpg" width="150px" height="150px">
        </label>
        <label>
          <input type="radio" name="character" value="2" />
          <img src="images/izzy.jpg" width="150px" height="150px">
        </label>
        <label>
          <input type="radio" name="character" value="3" />
          <img src="images/isaiah.jpg" width="150px" height="150px">
        </label>
        <label>
          <input type="radio" name="character" value="4" />
          <img src="images/catherine.jpg" width="150px" height="150px">
        </label>
        <label>
          <input type="radio" name="character" value="5" />
          <img src="images/sea.jpg" width="150px" height="150px">
        </label>
        <label>
        <input type="submit" id="memes" class="btn btn-lg" value="Save Character" onclick="myFunction(this,event)" style="margin: 0 auto 0 auto; position: absolute; background-color: gold; color: green;">
        <input type="radio" name="character" value="0" id="easteregg" checked><br>
      </form>
    </div>
  
    <footer>
      <p>Website created by:</p>
      <p>The Juniors of Advanced Topics in Computer Science</p>
      <p>Class of 2017</p>
      <p>Students of Brian Sea</p>
    </footer>
    
    <script>
      function myFunction(target, ev) {
        ev.preventDefault();
        console.log(ev);
        if (target == document.getElementById('memes')) {
          var x = document.forms["myForm"].elements["character"];
          if (x == 0) {
            window.location="easteregg.html";
          }
          else {
            window.location="example.html";
          }
        }
        return true;
      }
    </script>
	</body>
</html>
