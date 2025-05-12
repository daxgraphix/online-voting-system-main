<!DOCTYPE html>
<html lang="en">

<head>

  <!------------------  Required Meta Tags ------------------>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!------------------  Bootstrap css ------------------>

  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!------------------  FontAwesome CDN ------------------>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!------------------  Custom css------------------>

  <link rel="stylesheet" href="css/style.css">

  <!------------------  Fonts CDN ------------------>

  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700;900&display=swap"
    rel="stylesheet">

  <!------------------  Internal Css ------------------>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      scroll-behavior: smooth;
      text-align: center;
      font-family: 'Quicksand', sans-serif;
    }

    body {
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    .container {
      flex: 1;
      padding-bottom: 60px;
    }

    #footersection {
      width: 100%;
    }

    body {
      display: flex;
      flex-direction: column;
    }
  </style>
</head>

<body>
  <!------------------  Navbar Section ------------------>
  <div class="container-fluid" id="cont-3">
    <header id="nav-bar">
      <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <a class="navbar-brand" href="index.html" style="color: white; font-weight: 900; margin-top: 15px;">GO VOTE</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon" style="color: white;"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto animate__animated animate__bounceInDown" style="padding-right: 50px;">
            <li class="nav-item">
              <a class="nav-link" href="index.html" style="color:white; font-weight: 900; text-align: center; font-size: 18px; margin-top: 5px;  text-transform: capitalize; padding: 20px;">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="candidate.php" style="color: white; font-weight: 900; text-align: center; font-size: 18px; margin-top: 5px;  text-transform: capitalize; padding: 20px;">Candidate</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="result_year_user.php"
                style="color: white; font-weight: 900; text-align: center; font-size: 18px; margin-top: 5px;  text-transform: capitalize; padding: 20px;">Result</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="admin_login.php" style="color: white; font-weight: 900; text-align: center; font-size: 18px; margin-top: 5px;  text-transform: capitalize; padding: 20px;">Admin</a>
            </li>

          </ul>
        </div>
      </nav>
    </header>
  </div>

  <div class="container">

    <div class="row">
      <div class="col-md-12">
        <h1 class="text-center" style="margin-bottom: 10px;">UAUT STUDENTS VOTING SYSTEM</h1>
        <p class="text-center" style="margin-bottom: 50px;">3<sup>rd</sup> Year Candidates</p>
      </div>
      <?php



      $sql = "select * from candidate_3rd where approve_status=1";
      include("dbConnect.php");

      $result = $pdo->query($sql);

      $rs =   $result->fetchAll();

      foreach ($rs as $row) {
      ?>
        <!-- Card Start -->
        <div class="col-md-3 " style=" margin-left:25px; padding-top: 30px;">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="img/9.svg" alt="shinzo" height="350px">
            <div class="card-body">
              <h2 class="card-title"><?php echo $row['name']; ?></h2>
              <p class="card-text"><?php echo $row['branch']; ?></p>
             
            </div>
          </div>
        </div>
      <?php } ?>
      <!-- Card End -->

    </div>
  </div>
  </section>
  <div class="d-flex justify-content-center">
  <a href="confirmation_3.php" class="btn btn-primary">Vote Now</a>
 
</div>
  <!------------------ Footer Section ------------------>

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