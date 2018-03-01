<?php
include 'dblogin.php';
include 'htmlhead.php';
include 'menu.php';
?>

        <h1>Multi-Talented Stars</h1>
        <br><br>
        All of the cast shown are non-Action stars who have been featured in over 10 other genres.
        <br><br>
        
        <div>
            <?php
        $crew = $db->query("SELECT FirstName AS First, LastName AS Last, COUNT(DISTINCT GenreName) as NumberOfGenres FROM Genres NATURAL JOIN Titles NATURAL JOIN TheCast NATURAL JOIN Person WHERE PersonID IN (     SELECT PersonID     FROM Titles NATURAL JOIN TheCast NATURAL JOIN Person NATURAL JOIN Genres     GROUP BY PersonID     HAVING COUNT(DISTINCT GenreName) > 10 ) AND PersonID NOT IN (SELECT PersonID     FROM Titles NATURAL JOIN TheCast NATURAL JOIN Person NATURAL JOIN Genres     WHERE GenreName = 'Action' ) GROUP BY FirstName ORDER BY NumberOfGenres DESC");
		
		echo"<div id='mytable'>";
        echo "<table>";
        echo "<tr><td><h3>First</h3><br></td>
		<td><h3>Last</h3><br></td>
		<td><h3>&emsp;Number of Genres&emsp;&emsp;</h3><br></td></tr> ";
		while ($row = $crew->fetch_object()) {
            echo "<tr><td><br><center>" . $row->First . "<br>&emsp;&emsp;</center></td>
				<td><br><center>" . $row->Last . "<br>&emsp;&emsp;</center></td>
				<td><br><center>&emsp; " . $row->NumberOfGenres . " <br>&emsp;&emsp;</center></td></tr>";
        }        
        echo "</table>";
        echo"</div>";

    // Close connection
        $db->close();
        ?>
        </div>

<?php
include 'foot.php';
?>