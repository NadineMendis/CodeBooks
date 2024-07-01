<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bookreview"; 

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Variables to store data retrieved from the review form
    $bookId = $_POST['bookId'];
    $name = $_POST['name']; 
    $rating = $_POST['rating'];
    $reviewDes = $_POST['reviewDes'];

    // Generate a unique reviewer Id
    $reviewerId = uniqid('R');

    // Query to insert reviewer's name and Id to the Reivewer table
    $insertReviewerSql = "INSERT INTO Reviewer (reviewerId, reviewerName) VALUES ('$reviewerId', '$name')";

    if ($conn->query($insertReviewerSql) === TRUE) {
        $sql = "INSERT INTO Report (bookId, reviewerId, rating, reviewDes) VALUES ('$bookId', '$reviewerId', '$rating', '$reviewDes')";

        
        if ($conn->query($sql) === TRUE) {
            // Redirects user to the previous page
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            exit;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Error inserting reviewer's name: " . $insertReviewerSql . "<br>" . $conn->error;
    }

    $conn->close();
?>
