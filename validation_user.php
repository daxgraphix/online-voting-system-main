<?php
include("dbConnect.php");

$sql = "SELECT candidate, count(*) as result FROM `users` GROUP BY candidate";

$stmt = $pdo->prepare($sql);
$stmt->execute();
$rs = $stmt->fetchAll();

$totalVotes = 0;
foreach ($rs as $row) {
    $totalVotes += $row['result'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting Results</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f6f9;
            padding-bottom: 50px;
        }

        .card-5 {
            border: 2px solid #343a40;
            padding: 30px;
            margin-top: 5%;
            width: 70%;
            margin-left: auto;
            margin-right: auto;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .card-5 h2 {
            color: #343a40;
        }

        .progress {
            height: 25px;
            margin-bottom: 20px;
        }

        .progress-bar {
            border-radius: 20px;
        }

        .result-container {
            margin-bottom: 20px;
        }

        #footersection {
            position: fixed;
            bottom: 0;
            width: 100%;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card-5">
                    <h2><strong>Voting Results</strong></h2>
                    <hr>
                    <?php
                    foreach ($rs as $row) {
                        $percentage = ($row['result'] / $totalVotes) * 100;
                        echo "<div class='result-container'>";
                        echo "<strong>" . $row['candidate'] . " = " . $row['result'] . " votes (" . round($percentage, 2) . "%)</strong><br>";
                        echo "<div class='progress'>
                                <div class='progress-bar progress-bar-striped bg-success progress-bar-animated' role='progressbar' aria-valuenow='$percentage' aria-valuemin='0' aria-valuemax='100' style='width: $percentage%'>
                                </div>
                              </div>";
                        echo "</div>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div id="footersection">
        <?php include("footer.html"); ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>