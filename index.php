<?php

include 'htmlhead.php';
include 'menu.php';
?>


        <h1>Home</h1>
        
        

        
        <div>
            <div>
                <br>
                Example queries:<br>------------------------<br>

        <div><a href="search_title.php">
                Search for a movie with keywords.
            </a></div><br>        
        <div><a href="search_genre.php">
                Search for movies by genre
            </a></div><br>
        <div><a href="list_the_movies.php">
                List the movies with rating and genres.
            </a></div><br>
        <div><a href="mrpopular.php">
                Sorts actors by how many movies they're in
            </a></div><br>
        <div><a href="multi_talent.php">
                Search for non-action stars in 10+ other genres.
            </a></div><br>
            <div><a href="recommendations.php">
                Recommends movies in your favorite genre.
            </a></div><br>
            <br>
            Support files:<br>------------------------<br>
        <div><a href="skeleton.php">PHP Template </a>
        Build a SQL program using this handy template</div>
            <div><a href="sql/">SQL support files </a>
        Build the DB with scripts for Debian and OS X, 
        or use SQL interface of your choice</div>
                
            </div>
        </div>

<?php
include 'foot.php';
?>
