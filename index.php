<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="index.css">
    <title>Homepage</title>
</head>

<body>

        <div class="menu">
            <a href="index.php">Home</a>
            <a href="populart.php">Popular Tricks</a>
            <a href="zhalloffam.php">Hall of Fame</a>
            <a href="contacts.php">Contact</a>
            <a href="comments.php">Comments</a>
        </div>
        
        <div id = "headings">
            <h1>HOME OF SKATEBOARDING</h1>
        </div>

            <section class="carousel" aria-label="Gallery">
                <ol class="carousel__viewport">
                    <li id="carousel__slide1" tabindex="0" class="carousel__slide">
                        <img src="grind.jpg" alt="mand grinding the ledge of a skate bowl" width="600" height="600" />

                        <div class="carousel__snapper">
                            <a href="#carousel__slide4" class="carousel__prev">Go to last slide</a>
                            <a href="#carousel__slide2" class="carousel__next">Go to next slide</a>
                        </div>
                    </li>
                    <li id="carousel__slide2" tabindex="0" class="carousel__slide">
                        <img src="car_ollie.jpg" alt="a guy ollies over a car" width="600" height="500" />

                        <div class="carousel__snapper"></div>
                        <a href="#carousel__slide1" class="carousel__prev">Go to previous slide</a>
                        <a href="#carousel__slide3" class="carousel__next">Go to next slide</a>
                    </li>
                    <li id="carousel__slide3" tabindex="0" class="carousel__slide">
                        <img src="vert.jpg" alt="a palm grab at the top of a ramp" width="600" height="500" />

                        <div class="carousel__snapper"></div>
                        <a href="#carousel__slide2" class="carousel__prev">Go to previous slide</a>
                        <a href="#carousel__slide4" class="carousel__next">Go to next slide</a>
                    </li>
                    <li id="carousel__slide4" tabindex="0" class="carousel__slide">
                        <img src="boardslide.jpg" alt="a guy boardsliding a hand rail" width="600" height="500" />

                        <div class="carousel__snapper"></div>
                        <a href="#carousel__slide3" class="carousel__prev">Go to previous slide</a>
                        <a href="#carousel__slide1" class="carousel__next">Go to first slide</a>
                    </li>
                </ol>
                <aside class="carousel__navigation">
                    <ol class="carousel__navigation-list">
                        <li class="carousel__navigation-item">
                            <a href="#carousel__slide1" class="carousel__navigation-button">Go to slide 1</a>
                        </li>
                        <li class="carousel__navigation-item">
                            <a href="#carousel__slide2" class="carousel__navigation-button">Go to slide 2</a>
                        </li>
                        <li class="carousel__navigation-item">
                            <a href="#carousel__slide3" class="carousel__navigation-button">Go to slide 3</a>
                        </li>
                        <li class="carousel__navigation-item">
                            <a href="#carousel__slide4" class="carousel__navigation-button">Go to slide 4</a>
                        </li>
                    </ol>
                </aside>
            </section>
        </div>

    <div class = "texth">
        <h1>SKATEBOARDING CULTURE</h1>
    </div>

    <div class = "indextext">
            <p>
                Skateboarding is an action sport that originated in the United States which involves riding and performing tricks using a skateboard, as well as a recreational activity, an art form, an entertainment industry job, and a method of transportation. Skateboarding has been shaped and influenced by many skateboarders throughout the years. 
                <br>
                <br>
                A 2009 report found that the skateboarding market is worth an estimated $4.8 billion in annual revenue, with 11.08 million active skateboarders in the world and In 2016 history was made when it was announced that skateboarding will be added to the list of sports for the 2020 Summer Olympics in Tokyo, for both male and female teams.
                <br>
                <br>
                Since the 1970s skateboarding has developed its own culture, music (skate punk) and even entertainment channels such as the xgames which for many years was seen as the extreme sport version of the olympics. although be thought of as a nucence in city centeres and even being associated with criminal activity such as vandalism which also sparked the "skatebosrding is not a crime" movement, skateboarding continued to grow in popularity through out the 90's and been pushed to the forefront of popular culture, being fetured in songs such as opm- heaven is a halfpipe, even producing films such as street dreams.
                <br>
                <br>
                Since its beginings and the popularity boom of the 90's, skateparks have been constructed specifically for use by skateboarders, freestyle BMXers, aggressive skaters, and very recently, scooters.
            </p>
    </div>
    <div class="existing_comments">
    <?php
        $db=mysqli_connect('localhost', 'root', 'toor', 'website_project');
        $sql= 'SELECT * FROM comments';
        $result=mysqli_query($db, $sql);

        if(mysqli_num_rows($result) > 0){
            while($row=mysqli_fetch_array($result)){
                echo '<h5 class="user">' . $row['name'] . '</h5>';
                echo '<p class="user_comment">' . $row['comments'] . '</p>';
            }
        }
    ?>
    </div>
<div id="form_block">
        <h5 id="tag">Please leave a comment below!</h5>
        <form id="php-form" action="comments_connection.php" method="post">
            <table id="php-table">
                <tr class="php-tr">
                    <td class="php-td"><label class="php-label">Name:</label></td>
                    <td class="php-td"><input id="name" class="php-input" name="name" type="text" placeholder="Username" autocomplete="off"></td>
                </tr>
                <tr class="php-tr">
                    <td class="php-td"><label class="php-label">Comments</label></td>
                    <td class="php-td"><textarea id="comments" class="php-textarea" name="comments" required></textarea></td>
                </tr>
            </table>
            <button type="submit" class="php-button">Submit</button>
        </form>
</div>
</body>

</html>