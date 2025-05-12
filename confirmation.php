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

    .container {
      padding: 0;
      margin: 0 auto;
      max-width: 800px;
    }

    .form-group {
      display: flex;
      align-items: center;
    }

    .form-group label {
      width: 150px;
      margin-right: 10px;
      font-weight: bold;
      text-align: right;
    }

    .form-group input,
    .form-group select,
    .form-group textarea {
      flex: 1;
      height: 40px;
      padding: 0 10px;
      font-size: 16px;
      border-radius: 4px;
      border: 1px solid #ccc;
    }

    .form-group textarea {
      height: 100px;
      resize: none;
    }

    form {
      max-width: 600px;
      margin: 0 auto;
    }

    .col-md-6 img {
      max-width: 100%;
      height: auto;
      margin-top: 30%;
    }
  </style>
</head>

<body>

  <section id="center">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1 style="padding-top: 20px;">Confirmation</h1>
          <form action="SavedData.php" method="post" id="ConfirmForm">

            <div class="form-group">
              <label for="txtName">Name:</label>
              <input type="text" id="txtName" name="txtName" class="form-control" required>
            </div>

            <div class="form-group">
              <label for="txtEmail">Email:</label>
              <input type="email" id="txtEmail" name="txtEmail" class="form-control" required>
            </div>

            <div class="form-group">
              <label for="txtBranch">College:</label>
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
              <label for="txtNumber">Mobile Number:</label>
              <input type="number" id="txtNumber" name="txtNumber" class="form-control" required pattern="[6-9]{1}[0-9]{9}">
            </div>

            <div class="form-group">
              <label for="txtCand">Which Candidate:</label>
              <select name="txtCand" id="txtCand" class="form-control" required>
                <option value="" disabled selected>Select a Candidate</option>
                <?php
                $sql = "select name from candidates where approve_status=1";
                include("dbConnect.php");

                $stmt = $pdo->prepare($sql);
                $stmt->execute();
                $results = $stmt->fetchAll();

                foreach ($results as $output) { ?>
                  <option><?php echo $output["name"]; ?></option>
                <?php } ?>
              </select>
            </div>

            <div class="form-group">
              <label for="txtRollNo">ID No.:</label>
              <input type="number" id="txtRollNo" name="txtRollNo" class="form-control" required>
            </div>

            <div class="form-group">
              <label for="txtReason">Reason:</label>
              <textarea name="txtReason" id="txtReason" class="form-control" style="margin-top: 10px;" placeholder="Why You Vote This Candidate any Reason?" rows="4"></textarea>
            </div>

            <div class="form-group" style="padding-top: 20px; padding-bottom: 40px;">
              <button class="magnifyBtn" name="Submit">Submit</button>
            </div>
          </form>
        </div>

        <div class="col-md-6" style="padding-top: 50px;">
          <img src="img/7.svg" alt="">
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