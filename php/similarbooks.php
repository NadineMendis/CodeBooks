<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bookreview";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    ?>

    <section class="book-slider">
        <h2>You May Also Like</h2>
        <div class="bar"></div>
        <div class="container">
            <?php
            // Query to selec 5 random books from the book table
            $query = "SELECT * FROM Book ORDER BY RAND() LIMIT 5";
            $result = $conn->query($query);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    ?>
                    <!-- Displays book details for each row -->
                    <div class="img-item" id="img">
                        <a href="book-details.php?bookId=<?php echo $row['bookId']; ?>" class="book-link"><img src="images/<?php echo $row['bookId']; ?>.jpg" /></a>
                        <h4><?php echo $row['title']; ?></h4>
                    </div>
                    <?php
                }
            } else {
                echo "No books found";
            }
            ?>
        </div>
</section>