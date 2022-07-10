<?php 
    include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies Arena: Stream Movies with ease</title>
    <link rel="stylesheet" href="../external.css"/>
    <!-- CSS only -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> -->




</head>
<body>
<div class="header">
        <!-- <div class="login"><a href="login.php">Login/Signup</a></div> -->
    <div class="heading">
        <img src="../static/images/logo2.png">
        <a href="../index.php" class="glitch" data-glitch="MOVIES ARENA">MOVIES ARENA</a>
    </div>
        
    <div class="wrap">
        <form class="search" method="get" action="../search.php">
                
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


    <div class="main">
        <?php if(isset($_GET['sort'])){?>

            <center><h2>SHOWING RESULTS FOR MOVIES SORTED DESCENDINGLY BY: <i><?PHP echo $_GET['sort'];?></i></h2>

            <div class="wrapper">

            <?php
                $sql_query="select * from movies_list order by ".$_GET['sort']." desc;";
                $result = mysqli_query($conn,$sql_query);
                while($data=mysqli_fetch_array($result)){
            ?>

                <div class="movie-card">
                    <img src="../static/movies/<?php echo $data['movie_name']."/".$data['image']?>">
                    <div class="descriptions" style="font-family:'Finlandica';font-weight:bold;text-align:left;">
                        <h1 style="font-family:'Marcellus';color:black;font-size:1.5em"><?php echo $data['movie_name']?></h1>
                        <p>
                            <?php echo $data['description'] ?>
                        </p>
                    
                    <!-- <form method="get" action="trailer.php/?num=<?php echo $data['num']?>">
                    <button type="submit">
                        <i class="yt"></i>
                        Watch now!
                    </button>
                    </form> -->
                        <a class="watch-button" href="../videos.php/?srnumber=<?php echo $data['num']?>">Watch now!</a>
                        <p style="text-align:right;position:relative;top:20px">
                            IMDb <?php echo $data['rating'] ?>
                        </p>
                    </div>
                </div>

            <?php } ?>
                
                
            </div>


        <?php } else{?>


            <center><h2>SHOWING RESULTS FOR MOVIES WITH GENRE: <i><?PHP echo $_GET['genre'];?></i></h2>

            <div class="wrapper">

                <?php
                    $sql_query="select * from movies_list where(genre1='".$_GET['genre']."' OR genre2='".$_GET['genre']."' OR genre3='".$_GET['genre']."');";
                    $result = mysqli_query($conn,$sql_query);
                    while($data=mysqli_fetch_array($result)){
                ?>


                    <div class="movie-card">
                        <img src="../static/movies/<?php echo $data['movie_name']."/".$data['image']?>">
                        <div class="descriptions" style="font-family:'Finlandica';font-weight:bold;text-align:left;">
                            <h1 style="font-family:'Marcellus';color:black;font-size:1.5em"><?php echo $data['movie_name']?></h1>
                            <p>
                                <?php echo $data['description'] ?>
                            </p>
                            
                            <!-- <form method="get" action="trailer.php/?num=<?php echo $data['num']?>">
                            <button type="submit">
                                <i class="yt"></i>
                                Watch now!
                            </button>
                            </form> -->
                            <a class="watch-button" href="../videos.php/?srnumber=<?php echo $data['num']?>">Watch now!</a>
                            <p style="text-align:right;position:relative;top:20px">
                                IMDb <?php echo $data['rating'] ?>
                            </p>
                        </div>
                    </div>

                <?php } ?>
                
                
            </div>
        <?php }?>
    </div>
    
    
</body>
</html>