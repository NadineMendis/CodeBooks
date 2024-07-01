<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />

    <?php include 'php/pagetitles.php'; ?>
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
            <div class="container">
                <?php include 'php/bookinfo.php'; ?>
            </div>

            <div class="container">
                <?php include 'php/similarbooks.php'; ?>
            </div>

            <script>
                var ratings = document.querySelectorAll('.rating');
                
                ratings.forEach(function(rating){
                    rating.addEventListener("mouseover",function(){
                        this.style.color = "var(--secondary-color)";
                    });
                    rating.addEventListener("mouseout",function(){
                        this.style.color = "var(--other-color)";
                    });
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
        </main>

    </body>

    <!--Footer-->
    <footer>
        <?php include 'php/footer.php'; ?>
    </footer>
</html>