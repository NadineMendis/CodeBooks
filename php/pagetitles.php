<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bookreview";   

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieves the bookId from the URL
    $bookId = $_GET['bookId'];

    $sql = "SELECT * FROM Book WHERE bookId = '$bookId'";
    $result = $conn->query($sql);

    $pageTitle = "Book Details";

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Changes the page title to the one retrieved from the Book table
        $pageTitle = $row["title"];
    }

    $conn->close();
?>
<!-- Sets the page title to the value stored in the variable $pageTitle -->
<title><?php echo $pageTitle; ?></title>
