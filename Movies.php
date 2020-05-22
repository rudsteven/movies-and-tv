<!doctype html>
<html lang=''>
    <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="Styles/styles.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
   <title>Stream Movies and TV Shows</title>
<head style="background-color:grey">
    

</head>
<body style="background-color:moccasin;width:100%">
<div id='navigation'> 
    <a class='active' href='Movies.php'>Movies</a>
    <a href=''>TV Shows</a>
    <a href=''>Stand-Up Comedies</a>
</div>  
     &nbsp;
<h1 style="text-align:center;color:blue">Movies</h1>
    <p><center>

    
<?php
require 'vendor/autoload.php';
 
 $client = new MongoDB\Client;

 $entertainmentdb = $client->Entertainment;
$moviecollection = $entertainmentdb->Movies;


$movielist = $moviecollection->find();

foreach ($movielist as $movie) {
    $title =$movie["movie_name"];
    $posterurl =$movie["movie_poster"];
    $filename = $movie["file_name"];
    $filepath = "E:Video\Movies\\";

    echo "<a href='", $filepath, $filename, "'><img src='", $posterurl,"' class='movie-img'
      alt='", $title,"'></a>";
    /*
    echo "<a href='E:\Video\Movies\ $filename'" ,
     "<img src='", $posterurl,"' class='movie-img'
      alt='", $title,"'></a>";
      */

}


 /*

 CREATE A COLLECTION
 $result1 = $moviedb->createCollection('demodropdb');

 var_dump($result1);
 

DROP COLLECTION
$result2 = $moviedb->dropCollection('demodropdb');

var_dump($result2);
 

LIST COLLECTIONS
 foreach ($moviedb->listCollections() as $collection) {
     var_dump($collection);
  }

LIST DATABASES
foreach ($moviedb->listDatabases() as $db) {
     var_dump($db);
  }

 */
?>


</body>
<html>