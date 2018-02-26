<?php
include 'dblogin.php';
include 'htmlhead.php';
include 'menu.php';
?>


        <h1>Search Movie by Genre</h1>
        <br><br>
        Find a movie by Genre.
        <br><br>
        
        <div>
            <form  method="POST">
        Search
        <select name = "genreChoice">
        <option value="Action">Action</option>
        <option value="Adventure">Adventure</option>
        <option value="Animation">Animation</option>
        <option value="Black Comedy">Black Comedy</option>
        <option value="Bollywood">Bollywood</option>
        <option value="Comedy">Comedy</option>
        <option value="Cult Classic">Cult Classic</option>
        <option value="Documentary">Documentary</option>
        <option value="Family Friendly">Family Friendly</option>
        <option value="Fantasy">Fantasy</option>
        <option value="Film Noir">Film Noir</option>
        <option value="ForeignLanguage">Foreign Language</option>
        <option value="Historical Period">Historical Period</option>
        <option value="Horror">Horror</option>
        <option value="Independent">Independent</option>
        <option value="Martial Arts">Martial Arts</option>
        <option value="Mockumentary">Mockumentary</option>
        <option value="Musical">Musical</option>
        <option value="Mystery">Mystery</option>
        <option value="Parody">Parody</option>
        <option value="Romance">Romance</option>
        <option value="Satire">Satire</option>
        <option value="ScienceFiction">Science Fiction</option>
        <option value="Silent">Silent</option>
        </select> 
    
        <input type="submit" name="submit">   
         </form><br><br>   
            
    <?php
    if (isset($_POST['submit'])) {
        $varGenre = $_POST['genreChoice'];
        
        $sql = ("SELECT t.Title FROM Titles t "
                . "INNER JOIN Genres g ON t.MovieID = g.MovieID "
                . "&& g.GenreName LIKE '%$varGenre%'");
      
                $result = $db->query($sql);
                
                echo "<table>";
                echo $varGenre . " Movies:". "<br>". "<br>";
                
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr><td>" . $row["Title"]. "</td></tr><br>";
                }
                        echo "</table>";
        }
            ?>
        </div>

<?php
include 'foot.php';
?>
