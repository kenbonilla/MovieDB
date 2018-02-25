<?php
include 'dblogin.php';
include 'htmlhead.php';
include 'menu.php';
?>


        <h1>Movies, Ratings, and Genres</h1>
        <br><br>
        Lists every movie with their rating and genres
        <br><br>
        <div>
        <?php
        $titles = $db->query('SELECT * FROM `Titles`');
echo"<div id='mytable'>";
        echo "<table>";
        
        while ($movie = $titles->fetch_object()) {
            echo '<tr><td><br><h2>&emsp;' . $movie->Title 
                    . '</h2><br><h4> &emsp;&emsp;&emsp;Rated: ' 
                    . $movie->Rating . '</h4><br>&emsp;';
            $genres = $db->query('SELECT * FROM `Genres` WHERE `MovieID` = ' 
                    . $movie->MovieID);
            
            while ($genre = $genres->fetch_object()) {
                echo '&emsp;&emsp;&emsp;' . $genre->GenreName . '&emsp;' ;
            }
          

            echo '<br><br></td></tr>';
        }

        echo "</table>";
        echo "</div>";

    // Close connection
        $db->close();
        ?>
        </div>
<?php
include 'foot.php';
?>