<!DOCTYPE html>

<?php 
$pageTitle = "First Page";
$pageHeader = "Main Page - Home";
 ?>

<html lang="en">

        <head>

            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title><?php echo $pageTitle ?></title>

        </head>
        <body>
            
            <h1><?php echo $pageHeader; ?> </h1>
            <p>WELCOME TO MY PERSONAL PORTFOLIO!</p>
            <h4>INFO</h4>
            <p>This page includes my name, birthday and current occupation</p>
            <p>Name: Paulo Colmenares <br> Birthday: October 27, 2004 <br> Occupation: College Student/Working Student Assitant </p>

            <img src="images/susdog.gif" width="500" height="500">
            


            <h2>Navigation</h2>
            <ul>
                <li><a href="Page2.php">Page 2 <br></a></li>
                <li><a href="Page3.php">Page 3</a></li>
            </ul>

        </body>
</html>