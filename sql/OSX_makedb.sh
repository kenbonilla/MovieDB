#!/bin/bash
# Make MovieDB
# 2018 Kenneth Bonilla
# Build MovieDB on OS X XAMPP with default install options

echo "Making DB..."
cat MovieDB.sql | /Applications/XAMPP/xamppfiles/bin/mysql -u root 
echo "Titles..."
cat Titles.sql | /Applications/XAMPP/xamppfiles/bin/mysql -u root MovieDB
echo "Cast..."
cat Cast.sql | /Applications/XAMPP/xamppfiles/bin/mysql -u root  MovieDB
echo "Directors..."
cat Directors.sql | /Applications/XAMPP/xamppfiles/bin/mysql -u root  MovieDB
echo "Genres..."
cat Genres.sql | /Applications/XAMPP/xamppfiles/bin/mysql -u root  MovieDB
echo "Likes/Dislikes..."
cat Rates.sql | /Applications/XAMPP/xamppfiles/bin/mysql -u root  MovieDB
echo "Person..."
cat Person.sql | /Applications/XAMPP/xamppfiles/bin/mysql -u root  MovieDB
echo "Users..."
cat Users.sql | /Applications/XAMPP/xamppfiles/bin/mysql -u root  MovieDB
echo "...DB creation complete"
