<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Lewd Cats | Home</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/slate/bootstrap.css">
    <link href="https://fonts.googleapis.com/css?family=Orbitron:700" rel="stylesheet">
    <link rel="icon" href="/images/logo.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
</style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <a class="navbar-brand" style="font-family: 'Orbitron', sans-serif;" href="#">Lewd Cats</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Leaders</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Join us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Discord</a>
          </li>
          <li class="nav-item" id="myBtn" style="right: 0px;position: absolute;">
            <a class="nav-link" href="#">PLACE_HOLDER</a>
          </li>
        </ul>
      </div>
    </nav>
  <div id="myModal" class="modal">
    <div class="modal-dialog" role="document">
      <div class="modal-content" style="background-color: #32383e;width: 500px;">
        <div class="modal-header">
          <h5 class="modal-title">%PLACE_HOLDER_NAME%'s Profile</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span class="close" aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a class="nav-link" href="#">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Guild Stats</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Admin Panel</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="alerts" style="padding-top:2%;margin: 0 auto;width:70%;z-index: 200;">
    <div class="alert alert-dismissible alert-light">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      This website is still in development if you have any questions please ask in our <a href="https://discord.gg/pFrh4NT">DISCORD</a>
    </div>
  </div>
  <div class="mainPage" style="padding-top:2%;margin: 0 auto;width:70%;">
    <h3>%icon50% Members 8/10</h3>
    <div class="progress">
      <div class="progress-bar bg-info progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"></div>
    </div>
  </div>

  <script src="inc/xaxi_placeholders.js"></script>
  <script>
  // Get the modal
  var modal = document.getElementById('myModal');

  // Get the button that opens the modal
  var btn = document.getElementById("myBtn");

  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];

  // When the user clicks the button, open the modal
  btn.onclick = function() {
      modal.style.display = "block";
  }

  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
      modal.style.display = "none";
  }

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
      if (event.target == modal) {
          modal.style.display = "none";
      }
  }
  </script>
  </body>
</html>
