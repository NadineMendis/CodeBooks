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

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "<div class='container'>";
        echo "<div class='left-col'>";
        echo "<img src='images/{$row["bookId"]}.jpg' alt='{$row["title"]}' />";
        echo "</div>";
        echo "<div class='right-col'>";
        echo "<div class='book-info'>";
        echo "<h2>{$row["title"]}</h2>";
        $authorSql = "SELECT authorName FROM Author JOIN Authorship ON Author.authorId = Authorship.authorId WHERE Authorship.bookId = '{$row["bookId"]}'";
        $authorResult = $conn->query($authorSql);
        if ($authorResult->num_rows > 0) {
            $authorRow = $authorResult->fetch_assoc();
            echo "<h4>{$authorRow["authorName"]}</h4>";
        }
        echo "<p>{$row["bookDes"]}</p>";
        echo "</div>";
        echo "<div class='book-ratings'>";
        echo "<h2>Ratings and Reviews</h2>";
        $reviewSql = "SELECT * FROM Report WHERE bookId = '{$row["bookId"]}'";
        $reviewResult = $conn->query($reviewSql);
        if ($reviewResult->num_rows > 0) {
            while ($reviewRow = $reviewResult->fetch_assoc()) {
                echo "<div class='review'>";
                $reviewerSql = "SELECT reviewerName FROM Reviewer WHERE reviewerId = '{$reviewRow["reviewerId"]}'";
                $reviewerResult = $conn->query($reviewerSql);
                if ($reviewerResult->num_rows > 0) {
                    $reviewerRow = $reviewerResult->fetch_assoc();
                    echo "<div class='reviewer-name'>{$reviewerRow["reviewerName"]}</div>";
                }
                // Based on the rating in the database convert the number to stars
                echo "<div class='rating'>";
                for ($i = 0; $i < $reviewRow["rating"]; $i++) {
                    echo "★";
                }
                echo "</div>";
                
                echo "<p>{$reviewRow["reviewDes"]}</p>";
                echo "</div>";
            }
        }
        echo "</div>";
        echo "<div class='submit-review'>";
        echo "<h2>Submit a Review</h2>";
        echo "<form action='php/submit_review.php' method='post'>";
        echo "<input type='hidden' name='bookId' value='{$row["bookId"]}'>";
        echo "<input type='text' name='name' placeholder='Your Name' required><br>";
        echo "<input type='number' class='ratingscale' name='rating' placeholder='Rating (1-5)' min='1' max='5' required><br>";
        echo "<textarea name='reviewDes' class='reviewDes' placeholder='Your Review' rows='4' required></textarea><br>";
        echo "<input type='submit' value='Submit' class='reviewBtn'>";
        echo "</form>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    } else {
        echo "0 results";
    }

    $conn->close();

?>
