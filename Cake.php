<?php

require 'controller/CakeController.php';
$cakeController = new CakeController();

if (isset($_POST ['types'])) {
    //Fill page with cakes of the select types
    $cakeTables = $cakeController -> CreateCakeTables($_POST['types']);
    
} else {
    // page is loaded for first time, no type selected
    $cakeTables = $cakeController-> CreateCakeTables('%');
}
//output page data
$title = 'Cake overview';
$content = $cakeController->CreateCakeDropdownList().$cakeTables;


include 'Template.php';

?>
