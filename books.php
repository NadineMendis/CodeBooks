<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Books</title>
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
            <!-- Search bar to filter books by title -->
            <div class="search-container">
                <input type="text" id="search" onkeyup="searchBooks()" placeholder="Search for books by title..">
            </div>
            <div class="category-container">
                <div class="left-col">
                    <h5>Browse Books</h5>
                    <ul class="book-menu">
                        <li onClick="filterObjects('all')">All</li>
                        <li onClick="filterObjects('ai')">Artificial Intelligence</li>
                        <li onClick="filterObjects('cs')">Cybersecurity</li>
                        <li onClick="filterObjects('cc')">Cloud Computing</li>
                        <li onClick="filterObjects('wt')">Web Technology</li>
                        <li onClick="filterObjects('ds')">Data Science</li>
                    </ul>
                </div>
                <div class="right-col">
                    <?php include 'php/bookcats.php'; ?>
                </div>
            </div>
        </main>
        
    <script>

        filterObjects("all");

        function filterObjects(c) {
            var x, i;
            x = document.getElementsByClassName("img-item");
            if (c == "all") c = "";
            for (i = 0; i < x.length; i++) {
                removeClass(x[i], "show");
                if (x[i].className.indexOf(c) > -1) {
                    addClass(x[i], "show");
                }
            }
        }

        function addClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                if (arr1.indexOf(arr2[i]) == -1) {
                    element.className += " " + arr2[i];
                }
            }
        }

        function removeClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                while (arr1.indexOf(arr2[i]) > -1) {
                    arr1.splice(arr1.indexOf(arr2[i]), 1);
                }
            }
            element.className = arr1.join(" ");
        }

        var imgs = document.querySelectorAll(".img-item"); 

        imgs.forEach(function(img) {
            img.addEventListener("mouseover", function() {
                this.style.backgroundColor = "var(--bg-color)";
            });
            img.addEventListener("mouseout", function() {
                this.style.backgroundColor = "#fdfdfd";
            });
        });

        function searchBooks() {
            var input, container, book, i, title;
            input = document.getElementById('search').value.toUpperCase();
            container = document.getElementsByClassName('img-item');
            for (i = 0; i < container.length; i++) {
                book = container[i].getElementsByTagName("h4")[0];
                title = book.textContent || book.innerText;
                if (title.toUpperCase().indexOf(input) > -1) {
                    container[i].style.display = "";
                } else {
                    container[i].style.display = "none";
                }
            }

        }
    </script>

    </body>

    <!--Footer-->
    <footer>
        <?php include 'php/footer.php'; ?>
    </footer>
</html>