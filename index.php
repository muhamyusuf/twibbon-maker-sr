<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Twibbon</title>
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    </script>
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js">
    </script>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    Twibbon
    <select id = "twibbonimg">
      <option value="img/MabaTwibbon.png">Maba Twibbon</option>
      <option value="img/PanitiaTwibbon.png">Panitia Twibbon</option>
    </select>
    <br>
		Photo <input type="file" id="photoimg" value=""> <br>
		Resize <input type="range" id="wh" min="0" max="100" value="50">
		Width <input type="range" id="width" min="-300" max="300" value="50">
		Height <input type="range" id="height" min="-300" max="300" value="50">
		Top <input type="range" id="top" min="-500" max="500" value="0">
		Left <input type="range" id="left" min="-500" max="500" value="0">

    <hr>

    <div class="card">
      <h2>Pick A Photo</h2>
      <div class="twibbon">
        <img src="" id = "twibbon" alt="">
        <img src="" id = "photo" alt="">
      </div>
      <a href="#" id = "download">Download</a>
    </div>

    <script type="text/javascript" src="script.js"></script>
  </body>
</html>
