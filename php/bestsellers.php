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
        <h2>Best Sellers</h2>
        <div class="bar"></div>
        <div class="container">
            <?php
            // Query to select book details randomly and limit it to only 8
            $query = "SELECT * FROM Book ORDER BY RAND() LIMIT 8";
            $result = $conn->query($query);

            // Checks if any rows are returned by the above query
            if ($result->num_rows > 0) {
                $count = 0;
                while($row = $result->fetch_assoc()) {
                    // Starts a new row every fourth book
                    if ($count % 4 == 0 && $count != 0) {
                        echo "</div><div class='gap'></div><div class='container'>";
                    }
                    // If th book is the first book in the row, create a new container
                    if ($count % 4 == 0) {
                        echo "</div><div class='container'>";
                    }
                    ?>
                    
                    <!-- Retrieves and displays information about the current book -->
                    <div class="img-item" id="img">
                    <a href="book-details.php?bookId=<?php echo $row['bookId']; ?>" class="book-link"><img src="images/<?php echo $row['bookId']; ?>.jpg" /></a>
                    <h4><?php echo $row['title']; ?></h4>
                    </div>
                    <?php
                    $count++;
                }
                echo "</div>";
            } else {
                echo "No books found";
            }
            ?>
        </div>
</section>