<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <script type="text/javascript" src="scripts/slider.js"></script>
    <title>Home | CodeBooks</title>
    </head>

    <body>

        <header class="hero">
            <!--Logo Container-->
            <div class="navbar">
                <div class="logo">
                    <a href="index.php"><img src="images/logo.png" alt="logo"/></a>
                </div>
                <!--Navigation-->
                <nav>
                    <?php include 'php/menu.php'; ?>
                </nav>
            </div>
        </header>

        <main>
            <!--Slider-->
            <section class="slider">
                <div class="container">
                    <a href="books.php"><img src="images/slider1.jpg" alt="aislider"/></a>
                </div>
            </section>

            <!--New Releases Section-->
            <section class="book-slider">
                <h2>New Releases</h2>
                <div class="bar"></div>
                <div class="container">
                    <p id="slider-new-left-arrow" onclick="slider_move_left(this)"><i class="slider-arrow slider-left-arrow"></i></p>
                    <div class="img-item">
                        <a href="book-details.php?bookId=AI3"><img src="images/AI3.jpg" alt="Artificial Intelligence & Generative AI for Beginners" /></a>
                        <h4>Artificial Intelligence & Generative AI for Beginners</h4>
                    </div>
                    <div class="img-item">
                        <a href="book-details.php?bookId=CS2"><img src="images/CS2.jpg" alt="Sandworm: A New Era of Cyberwar" /></a>
                        <h4>Sandworm: A New Era of Cyberwar</h4>
                    </div>
                    <div class="img-item">
                        <a href="book-details.php?bookId=CC3"><img src="images/CC3.jpg" alt="Cloud Computing Basics" /></a>
                        <h4>Cloud Computing Basics</h4>
                    </div>
                    <div class="img-item">
                        <a href="book-details.php?bookId=WT4"><img src="images/WT4.jpg" alt="Web3: Charting the Internets Next Economic and Cultural Frontier" /></a>
                        <h4>Web3: Charting the Internets Next Economic and Cultural Frontier</h4>
                    </div>
                    <div class="img-item">
                        <a href="book-details.php?bookId=AI2"><img src="images/AI2.jpg" alt="Web3: Charting the Internets Next Economic and Cultural Frontier" /></a>
                        <h4>Artificial Intelligence: A Modern Approach</h4>
                    </div>
                    <p id="slider-new-right-arrow" onclick="slider_move_right(this)"><i class="slider-arrow slider-right-arrow"></i></p>
                </div>
                <div class="btn-wrapper">
                    <a href="books.php" class="btn" id="btn">View More</a>
                </div>
            </section>

            <!--Best Sellers-->
            <?php include 'php/bestsellers.php'; ?>
        </main>

        <script>
            var btn = document.getElementById("btn");
            btn.addEventListener("mouseover", function() {
                this.style.backgroundColor = "var(--other-color)";
            });
            btn.addEventListener("mouseout", function() {
                this.style.backgroundColor = "var(--secondary-color)";
            });

            var imgs = document.querySelectorAll(".img-item");

            imgs.forEach(function(img) {
                img.addEventListener("mouseover", function() {
                    this.style.backgroundColor = "var(--bg-color)";
                });
                img.addEventListener("mouseout", function() {
                    this.style.backgroundColor = "#fdfdfd";
                });
            });
        </script>
    </body>

    <!--Footer-->
    <footer>
        <?php include 'php/footer.php'; ?>
    </footer>
</html>