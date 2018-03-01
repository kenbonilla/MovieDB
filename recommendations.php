<?php
include 'dblogin.php';
include 'htmlhead.php';
include 'menu.php';
?>

        <h1>Recommendations for User 1001</h1>
        <br><br>
        Lists movies the user may like based on what movies are in the genre
        they have liked the most.
        <br><br>
        
        
        <!---  main body here --->
        <?php
        $movies = $db->query("
        SELECT Title, Rating, ReleaseYear
        FROM Titles
        NATURAL JOIN Genres
        WHERE MovieID NOT IN (
            SELECT MovieID
            FROM Titles t
            NATURAL JOIN Rates r
            NATURAL JOIN Genres g
            WHERE r.UserID = 1001)
        AND GenreName IN (SELECT GenreName
        FROM (
            SELECT GenreName, MAX(count) as max
            FROM (
                SELECT GenreName, COUNT(GenreName) as count
                FROM 
                    (SELECT * 
                    FROM Titles t 
                    NATURAL JOIN Rates r 
                    NATURAL JOIN Genres g 
                    WHERE r.UserID = 1001 
                    AND r.Likes = 1) as temp
                GROUP BY GenreName
                ORDER BY count DESC
            ) as temp2
        ) as temp3)");
        echo "<div id='mytable'>";
        echo "<table>";
        echo "<tr>
                <td><h3>Title</h3><br></td>
                <td><h3>Rating</h3><br></td>
                <td><h3>ReleaseYear</h3><br></td>
              </tr>";
        while ($row = $movies->fetch_object()) {
            echo "<tr>
                    <td><br><center>" . $row->Title . "<br></center></td>
                    <td><br><center>" . $row->Rating . "<br></center></td>
                    <td><br><center>" . $row->ReleaseYear . "<br></center></td>
                  </tr>";
            
        }
        echo "</table>";
        echo "</div>";
        ?>

<?php
include 'foot.php';
?>


