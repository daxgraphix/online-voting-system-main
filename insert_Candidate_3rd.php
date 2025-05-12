<?php
include("header.html");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700;900&display=swap"
    rel="stylesheet">

  <style>
    .navbar {
      height: 75px;
    }

    .form-group {
      display: flex;
      align-items: center;
    }

    .form-group label {
      width: 160px;
      margin-right: 10px;
      font-weight: bold;
      text-align: right;
    }

    .form-group input,
    .form-group select {
      flex: 1;
      height: 40px;
      padding: 0 10px;
      font-size: 16px;
      border-radius: 4px;
      border: 1px solid #ccc;
    }

    form {
      max-width: 450px;
      margin: 0 auto;
    }

    .col-md-6 img {
      max-width: 100%;
      height: auto;
      margin-top: 20%;
    }
  </style>
</head>

<body>

  <section id="center">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1 style="padding-top: 20px;">Candidate Registration</h1>
          <p style="padding-top: 20px;">3<sup>rd</sup> Year Enrollment</p>
          <form action="process_cand_3.php" method="post">

            <div class="form-group">
              <label for="txtName" class="td-1">Name :</label>
              <input type="text" id="txtName" required style="text-align: left; margin-bottom: 0px" name="txtName" autofocus class="form-control">
            </div>

            <div class="form-group">
              <label for="txtEmail" class="td-1">Email :</label>
              <input type="email" id="txtEmail" required style="text-align: left; margin-bottom: 0px" name="txtEmail" class="form-control">
            </div>

            <div class="form-group">
              <label for="txtNumber" class="td-1">Mobile Number :</label>
              <input type="number" id="txtNumber" required style="text-align: left;" name="txtNumber" class="form-control">
            </div>

            <div class="form-group">
              <label for="txtBranch" class="td-1">College :</label>
              <select id="txtBranch" name="txtbranch" required class="form-control">
                <option>Information Technology</option>
                <option>Computer Science</option>
                <option>Civil</option>
                <option>Mechanical</option>
                <option>Electrical</option>
                <option>Metallurgy</option>
                <option>Electronics and Telecom.</option>
              </select>
            </div>

            <div class="form-group">
              <label for="txtRollNo" class="td-1">ID No. :</label>
              <input type="number" id="txtRollNo" required style="text-align: left;" name="txtRollNo" class="form-control">
            </div>

            <div class="form-group" style="padding-top: 20px; padding-bottom: 40px;">
              <button class="magnifyBtn" name="Submit">Submit</button>
            </div>
          </form>
        </div>

        <div class="col-md-6" style="padding-top: 50px;">
          <img src="img/8.svg" alt="" srcset="">
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
<?php
include("footer.html");
?>