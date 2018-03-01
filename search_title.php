<?php
include 'dblogin.php';
include 'htmlhead.php';
include 'menu.php';
?>


        <h1>Search Movie by Name</h1>
        <br><br>
        Find a movie with keywords.
        <br><br>
        
        <div>
            <!--  main body here -->
            <form  method="POST">
        Search
        <input type="text" name="name" size="50">
        <input type="submit" name="submit">
            </form><br><br>
    <?php
    if (isset($_REQUEST['submit'])) {
        $name = $_POST['name'];
        if (empty($name)) {
            $badsearch = '<h4>You must type a word to search!</h4>';
        } else {
            $badsearch = '<h4>No match found for:&emsp;&emsp;'. $name. '</h4>';
            $sql = "SELECT * FROM Titles WHERE Title LIKE '%$name%'";
            $result = $db->query($sql);


            if (mysqli_num_rows($result) > 0) {
                            echo"<div id='mytable'>";
            echo "<table>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr><td><br>" .'<h4>&emsp;' . $row['Title'] . 
                            '&emsp;&emsp;&emsp;&emsp;</h4><br>&emsp;&emsp;';
                    echo '&emsp;&emsp;Released : ' . $row['ReleaseYear'] . 
                            " <br>&emsp;&emsp;</td></tr>";
                }
            
                        echo "</table>";
        echo"</div>";
                } else {
                echo'<h2> Search Result</h2>';
                print ($badsearch);
            }
            mysqli_free_result($result);
        }
    }
            ?>
        </div>

<?php
include 'foot.php';
?>
