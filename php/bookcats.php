<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bookreview";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get the book details
    $sql = "SELECT * FROM Book";
    $result = $conn->query($sql);

    // Creates an array to store retrieved book details
    $books = array();
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $books[] = $row;
        }
    
    // Changes each books details
    for ($i = 0; $i < count($books); $i++) {
        $books[$i]["image"] = $books[$i]["bookId"] . ".jpg";
        $books[$i]["alt"] = $books[$i]["title"];
        $books[$i]["class"] = strtolower(preg_replace('/[0-9]+/', '', $books[$i]["bookId"]));
    }

    // Displays the book details
    echo "<div class='book-container'>";
    foreach ($books as $book) {
        echo "<div class='img-item " . $book['class'] . "'>";
        echo "<a href='book-details.php?bookId=" . $book['bookId'] . "'>";
        echo "<img src='images/" . $book['image'] . "' alt='" . $book['alt'] . "' />";
        echo "</a>";
        echo "<h4>" . $book['title'] . "</h4>";
        echo "</div>";
    }
    echo "</div>";
    } else {
        echo "0 results";
    }
$conn->close();
?>