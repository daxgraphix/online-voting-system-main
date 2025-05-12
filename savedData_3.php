<?php
$name = $_REQUEST['txtName'];
$email   = $_REQUEST['txtEmail'];
$number = $_REQUEST['txtNumber'];
$candi = $_REQUEST['txtCand'];
$rollno =  $_REQUEST['txtRollNo'];
$reason =  $_REQUEST['txtReason'];

// Database connection
include('dbConnect.php');

// Check if the user has already voted (based on email, number, or rollno)
$sqlCheck = "SELECT * FROM users_3rd WHERE email = :email OR number = :number OR rollno = :rollno";
$stmtCheck = $pdo->prepare($sqlCheck);
$stmtCheck->execute(['email' => $email, 'number' => $number, 'rollno' => $rollno]);
$existingVote = $stmtCheck->fetch();

if ($existingVote) {
    // User has already voted, display JavaScript alert and redirect
    echo "<script>alert('You have already voted.'); window.location.href = 'validation_3_user.php';</script>";
    exit();  // Make sure to stop further script execution
} else {
    // User has not voted, proceed with inserting the vote
    $sql = "INSERT INTO users_3rd(name, email, Branch, number, candidate, rollno, reason) 
            VALUES(:name, :email, :Branch, :number, :candidate, :rollno, :reason)";
    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(":name", $name);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":Branch", $Branch);
    $stmt->bindParam(":number", $number);
    $stmt->bindParam(":candidate", $candi);
    $stmt->bindParam(":rollno", $rollno);
    $stmt->bindParam(":reason", $reason);

    $stmt->execute();

    header('Location: successfully.php');
    exit();  // Make sure to stop further script execution
}
