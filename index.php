<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Twibbon</title>
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js">
    </script>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <div class="container mt-5">
      <h1 class="text-center">Twibbon Generator</h1>
      <div class="row mt-4">
        <div class="col-md-6">
          <h2>Choose a Twibbon</h2>
          <select id="twibbonimg" class="form-select">
            <option value="img/MabaTwibbon.png">Maba Twibbon</option>
            <option value="img/PanitiaTwibbon.png">Panitia Twibbon</option>
          </select>
          <br>
          <label for="photoimg" class="form-label">Upload Photo</label>
          <input type="file" id="photoimg" class="form-control">
          <br>
          <label for="wh" class="form-label">Resize</label>
          <input type="range" id="wh" class="form-range" min="0" max="100" value="40">
          <label for="top" class="form-label">Top</label>
          <input type="range" id="top" class="form-range" min="-500" max="500" value="0">
          <label for="left" class="form-label">Left</label>
          <input type="range" id="left" class="form-range" min="-500" max="500" value="0">
        </div>
      </div>
    </div>

    <h2>Pick A Photo</h2>
    <div class="card-twbn">
      <div class="twibbon">
        <img src="" id="twibbon" alt="" class="img-fluid">
        <img src="" id="photo" alt="" class="img-fluid">
      </div>
      <a href="#" id="download" class="btn btn-primary mt-3">Download</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="script.js"></script>
  </body>
</html>
