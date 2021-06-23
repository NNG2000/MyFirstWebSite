<?php
require ("entities/Cakeentity.php");
class Cakesmodel {
    //to get all types of cakes from our database an return in  an array
    function GetCakeTypes(){
        require 'Credentials.php';
        
        //now open connection and select database
       // mysql_connect($host, $user, $passwd) or die(mysql_error());
        //mysql_select_db($database);
        $linkFst = mysqli_connect($host, $user, $passwd);
        mysqli_select_db($linkFst, $database);
        $result = mysqli_query($linkFst, "SELECT DISTINCT type FROM cakeflavors") or die(mysqli_error($linkFst));
        $types = array();
        //now we will get data from database.
        while ($row = mysqli_fetch_array($result)) {
            array_push($types, $row[0]);
        }
        //then we close connection and return the result
        mysqli_close($linkFst);
        return $types;
    }
    
    //to get cakeentity objects from the database and return them in an array
    function GetCakeByType($type) {
        require 'Credentials.php';
        //now open connection and select database
       // mysqli_connect($host, $user, $passwd) or die(mysql_error);
        $link = mysqli_connect($host, $user, $passwd);
        mysqli_select_db($link, $database);
  
        $query = "SELECT * fROM cakeflavors WHERE type LIKE '$type'";
        $result = mysqli_query($link,$query) or die(mysqli_error($link));
        $cakearray = array();
        
        //get data from database
        while ($row = mysqli_fetch_array($result)) {
            $name = $row[1];
            $type = $row[2];
            $price = $row[3];
            $image = $row[4];
            $review = $row[5];
           
            //create coffe objects and store them in an array
            $cake = new Cakeentity(-1, $name, $type, $price, $image, $review);
            array_push($cakearray, $cake);
        }
        //then we close connection and return the result
        mysqli_close($link);
        return $cakearray;
    }
}
?>