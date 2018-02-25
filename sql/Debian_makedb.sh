#!/bin/bash
# Make MovieDB
# 2018 Kenneth Bonilla
# Build MovieDB on Debian Stretch XAMPP default install options

echo "Making DB..."
cat MovieDB.sql | /opt/lampp/bin/mysql -u root 
echo "Titles..."
cat Titles.sql | /opt/lampp/bin/mysql -u root MovieDB
echo "Cast..."
cat Cast.sql | /opt/lampp/bin/mysql -u root  MovieDB
echo "Directors..."
cat Directors.sql | /opt/lampp/bin/mysql -u root  MovieDB
echo "Genres..."
cat Genres.sql | /opt/lampp/bin/mysql -u root  MovieDB
echo "Likes/Dislikes..."
cat Rates.sql | /opt/lampp/bin/mysql -u root  MovieDB
echo "Person..."
cat Person.sql | /opt/lampp/bin/mysql -u root  MovieDB
echo "Users..."
cat Users.sql | /opt/lampp/bin/mysql -u root  MovieDB
echo "...DB creation complete"
