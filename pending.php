<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700;900&display=swap"
    rel="stylesheet">

  <style>
    .fa-clock-o {
      font-size: 80px;
      color: #FF7902;
      font-weight: bold;
      height: 110px;
      width: 110px;
      border: 1px solid #FF7902;
      text-align: center;
      padding-top: 13px;
      border-radius: 50%;
      box-sizing: border-box;
      margin: 40px 0 0 0px;
    }
    #footersection {
      margin-top: 5%;
    }
  </style>
</head>

<body>
  <div class="container-fluid" id="cont-3">
    <header id="nav-bar">
      <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <a class="navbar-brand" href=index.html style="color: white; font-weight: 900; margin-top: 15px;">GO VOTE</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon" style="color: white;"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto animate__animated animate__bounceInDown" style="padding-right: 50px;">
            <li class="nav-item">
              <a class="nav-link" href="index.html"
                style="color:white; font-weight: 900; text-align: center; font-size: 18px; margin-top: 5px;  text-transform: capitalize; padding: 20px;">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="year.php"
                style="color: white; font-weight: 900; text-align: center; font-size: 18px; margin-top: 5px;  text-transform: capitalize; padding: 20px;">Candidate</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="result_year_user.php"
                style="color: white; font-weight: 900; text-align: center; font-size: 18px; margin-top: 5px;  text-transform: capitalize; padding: 20px;">Result</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="admin_login.php"
                style="color: white; font-weight: 900; text-align: center; font-size: 18px; margin-top: 5px;  text-transform: capitalize; padding: 20px;">Admin</a>
            </li>

          </ul>
        </div>
      </nav>
    </header>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <i class="fa fa-clock-o" aria-hidden="true"></i>
            <H1 style="margin-top: 40px;">Request Pending</H1>
          </div>
          <div class="col-md-12">
            <p>Go Home Click this Link -><a href="index.html">Click Me</a></p>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container" style="margin-top:190px">
        <div class="row">
          <div class="col-md-12">

          </div>
        </div>
      </div>
    </section>

    <section id="footersection">
      <div class="container-fluid">
        <div class="row" style="justify-content: center;">
          <div class="col-md-6">
            <hr>
            <div class="Footer">
              <ul style="display: flex; justify-content: center; font-weight: 600;">
                <li style="list-style: none; padding: 10px; "><a href="index.html"
                    style="text-decoration: none; color: #333;">Home</a></li>
                <li style="list-style: none; padding: 10px; "><a href="about.php"
                    style="text-decoration: none; color: #333;">About</a></li>
                <li style="list-style: none; padding: 10px; "><a href="suggestion.html"
                    style="text-decoration: none; color: #333;">Suggestion</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <!-- jQuery (full version) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Popper.js (for Bootstrap dropdowns, tooltips, etc.) -->
    <script src="js/popper.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>

    <script>
      $(document).ready(function() {
        new bootstrap.Collapse(document.getElementById('navbarNav'), {
          toggle: false
        });

        $(".navbar-toggler").click(function() {
          $("#navbarNav").collapse("toggle");
        });
      });
    </script>
</body>

</html>