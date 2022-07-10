<?php include "config.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videos</title>
    
    <link href="../external.css" rel="stylesheet"/>

</head>
<body>

    <div class="header">
        <!-- <div class="login"><a href="login.php">Login/Signup</a></div> -->
        <div class="heading">
            <img src="../static/images/logo2.png">
            <a href="../index.php" class="glitch" data-glitch="MOVIES ARENA">MOVIES ARENA</a>
        </div>
        
        <div class="wrap">
            <form class="search" method="get" action="search.php">
                
                <input class="searchTerm" placeholder="Search by full movie name, year or genre" type="text" name="search">
                <button type="submit" class="searchButton">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                </button>
            </form>
        </div>
        
    </div>
    <div class="links-section">
        
        <div class="dropdown">
            <div class="btn btn-two dropdown-btn" style="width:178px">
                <a href="#">SORT BY</a>
            </div>
            <div class="dropdown-content">
                <a href="../genre.php/?sort=<?php echo "rating"?>">RATING</a>
                <a href="../genre.php/?sort=<?php echo "views"?>">VIEWS</a>
            </div>
        </div>
        <div class="btn btn-two">
            <a href="../genre.php/?genre=<?php echo "Superhero"?>">SUPERHERO</a>
        </div>
        <!-- <div class="btn btn-two">
            <a href="genre.php/?genre=<?php echo "Romance"?>">ROMANCE</a>
        </div> -->
        <div class="dropdown">
            <div class="btn btn-two dropdown-btn">
                <a href="#">BROWSE BY GENRE</a>
            </div>
            <div class="dropdown-content">
                <a href="../genre.php/?genre=<?php echo "Action"?>">ACTION</a>
                <a href="../genre.php/?genre=<?php echo "Crime"?>">CRIME</a>
                <a href="../genre.php/?genre=<?php echo "Fantasy"?>">FANTASY</a>
                <a href="../genre.php/?genre=<?php echo "Mystery"?>">MYSTERY</a>
                <a href="../genre.php/?genre=<?php echo "Romance"?>">ROMANCE</a>
                <a href="../genre.php/?genre=<?php echo "Superhero"?>">SUPERHERO</a>
                <a href="../genre.php/?genre=<?php echo "Science Fiction"?>">SCIENCE FICTION</a>
                <a href="../genre.php/?genre=<?php echo "Spy"?>">SPY</a>
                <a href="../genre.php/?genre=<?php echo "Thriller"?>">THRILLER</a>
            </div>
        </div>
        <div class="btn btn-two">
            <a href="../genre.php/?genre=<?php echo "Crime"?>">CRIME</a>
        </div>
        <div class="btn btn-two">
            <a href="../genre.php/?genre=<?php echo "Thriller"?>">THRILLER</a>
        </div>
        
    </div>


    <div class="container">
        <?php
        $sql_query="select * from movies_list where num=".$_GET['srnumber'].";";
        $result = mysqli_query($conn,$sql_query);
        $data=mysqli_fetch_array($result);
        ?>
        <div class="video-container">
            <div class="data">
                <h1><?php echo $data['movie_name']." (".$data['year'].")";?></h1>
                <h2>Synopsis</h2>
                <p><?php echo $data['description']?></p>
                <div class="genres">
                    
                    <div style="background-color:#00a6ff;width:33.3%;display:flex;align-items:center;justify-content:center;">
                        <a href="../genre.php/?genre=<?php echo $data['genre1']?>">
                            <?php echo $data['genre1']?>
                        </a>
                    </div>

                    <div style="background-color:#fb6031;width:33.3%;display:flex;align-items:center;justify-content:center;">
                        <a href="../genre.php/?genre=<?php echo $data['genre2']?>">
                            <?php echo $data['genre2']?>
                        </a>
                    </div>

                    <div style="background-color:#ff2377;width:33.3%;display:flex;align-items:center;justify-content:center;">
                        <a href="../genre.php/?genre=<?php echo $data['genre3']?>">
                            <?php echo $data['genre3']?>
                        </a>
                    </div>
                    
                    
                    
                </div>
                <div style = "font-family:Verdana, Geneva, Tahoma, sans-serif;">Starring: <?php echo $data['starring']?></div>
                <div class="genres">
                    <div style="width:33.3%;padding:20px;text-align:center;">IMDb rating: <?php echo $data['rating']?></div>
                    <div style="width:33.3%;padding:20px;text-align:center;"><?php echo $data['length']?></div>
                    <div style="width:33.3%;padding:20px;text-align:center;">Directed by <?php echo $data['director']?></div>
                </div>
            </div>
            <div class="video">
                <video width="400" controls>
                    <!-- <source src="static/movies/Loki/loki_movie.mp4" type="video/mp4"> -->
                    <source src="../static/movies/<?php echo $data['movie_name']."/".$data['trailer']?>" type="video/mp4">
                    Your browser does not support HTML video.
                </video>
            </div>
        </div>
    </div>
</body>
</html>