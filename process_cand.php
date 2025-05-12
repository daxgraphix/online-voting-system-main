<?php
$name = $_REQUEST['txtName'];
$email   = $_REQUEST['txtEmail'];
$number = $_REQUEST['txtNumber'];
$branch =  $_REQUEST['txtbranch'];
$rollno =  $_REQUEST['txtRollNo'];

// Database connection
include('dbConnect.php');

// Check if the person has already applied using their email or mobile number
$sql_check = "SELECT * FROM candidates WHERE email = :email OR mobile = :mobile";
$stmt_check = $pdo->prepare($sql_check);
$stmt_check->bindParam(":email", $email);
$stmt_check->bindParam(":mobile", $number);
$stmt_check->execute();

// If a record exists, redirect with an alert
if ($stmt_check->rowCount() > 0) {
    echo "<script>
            alert('You have already applied as a candidate.');
            window.location.href = 'index.html';
          </script>";
    exit();
} else {
    // Insert the new candidate record into the database
    $sql = "INSERT INTO candidates (name, email, mobile, branch, rollno, enrollid) 
            VALUES (:name, :email, :mobile, :branch, :rollno, :enrollid)";

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":name", $name);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":mobile", $number);
    $stmt->bindParam(":branch", $branch);
    $stmt->bindParam(":rollno", $rollno);
    $stmt->bindParam(":enrollid", $enroll);

    $stmt->execute();

    // Redirect to the pending page after successful insertion
    header('Location: pending.php');
    exit();
}
