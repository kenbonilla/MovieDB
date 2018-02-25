<?php
    include 'dblogin.php';
    include 'htmlhead.php';
    include 'menu.php';
?>


        <h1>Most Famous Actors</h1>
        <br><br>
        Lists the actors by how many movies they're in.
        <br><br>



        <?php

        $roles = $db->query(
                "SELECT COUNT(c.MovieID) as count, c.MovieID, c.PersonID, "
                . "p.FirstName, p.LastName "
                . "FROM TheCast c "
                . "INNER JOIN Person p "
                . "ON c.PersonID = p.PersonID "
                . "GROUP BY c.PersonID "
                . "ORDER BY count DESC");
        echo"<div id='mytable'>";
        echo "<table>";
        echo "<tr><td><h3>Actor </h3><br></td><td><h3>&emsp;Number of Movies&emsp;&emsp;</h3><br></td></tr> ";
        while ($row = $roles->fetch_object()) {
            echo "<tr><td><br><center>" . $row->FirstName . " " . $row->LastName
                    . "<br>&emsp;&emsp;</center></td><td><br><center>&emsp; " . $row->count . " <br>&emsp;&emsp;</center></td></tr>";
        }
        
        echo "</table>";
        echo"</div>";
        ////////////////////////////
        // Close connection
        //$db->close();
        ?>
<?php
        include 'foot.php';
        ?>