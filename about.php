<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <title>About CodeBooks</title>
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
            <div class="about-container">
                <h2>About</h2>
                <p>Welcome to CodeBooks, your go to destination for a curated selection of the latest books in IT. Whether you’re new to the field or or a seasoned professional, we have something for everyone. </p>
                
                <h2>The Author</h2>
                
                <div class="my-details">
                    <img src="images/nadine.jpeg" alt="nadine">
                    <p>A second-year Master of Information and Communications Technology
                        student majoring in cloud computing, equipped with prior experience in
                        web development. I am enthusiastic about delving into opportunities
                        within the tech industry. Armed with a robust understanding of cloud
                        services and web development. I am keen to apply my knowledge and
                        skills, while remaining committed to ongoing learning and professional
                        growth in this dynamic and evolving industry.
                        </p>
                </div>

                <div class="tables">
                    <table>
                        <tr>
                            <th>Level of Qualificaton</th>
                            <th>Year</th>
                        </tr>

                        <tr>
                            <td>Master of Information and Communications Technology - Western Sydney University</td>
                            <td>2025</td>
                        </tr>

                        <tr>
                            <td>Diploma of Information Technology - UTS</td>
                            <td>2022</td>
                        </tr>
            
                        <tr>
                            <td>Bachelor’s Degree, Business and Management</td>
                            <td>2019</td>
                        </tr>
            
                        <tr>
                            <td>HND Business Administration</td>
                            <td>2018</td>
                        </tr>
                    </table>

                    <table>
                        <tr>
                            <th>Designation</th>
                            <th>Year</th>
                        </tr>

                        <tr>
                            <td>Student Publications Designer - WSUP</td>
                            <td>2023 - Present</td>
                        </tr>
            
                        <tr>
                            <td>Freelance Designer</td>
                            <td>2012 - Present</td>
                        </tr>
            
                        <tr>
                            <td>Head of Communications - Global Unites</td>
                            <td>2019 - 2021</td>
                        </tr>
            
                        <tr>
                            <td>Web Designer</td>
                            <td>2016 - 2018</td>
                        </tr>
            
                        <tr>
                            <td>Trainee Web Developer</td>
                            <td>2014 - 2015</td>
                        </tr>
            
                        <tr>
                            <td>Graphic Designer - Intern</td>
                            <td>2012 - 2013</td>
                        </tr>
            
                        <tr>
                            <td>Trainee Graphic Designer</td>
                            <td>2012</td>
                        </tr>
                    </table>

                </div>
            </div>
        </main>

    </body>

    <!--Footer-->
    <footer>
        <?php include 'php/footer.php'; ?>
    </footer>
</html>