<?php
session_start();
$dbconn;
function dbConnection()
{
    global $dbconn;
    $dbconn = mysqli_connect('localhost', 'root', '', 'flavourful');
    if (!$dbconn) {
        die(mysqli_error($dbconn));
    }
}
dbConnection();

// Functions for recipes

function getRecipes() {
    global $dbconn;

    $sql = "SELECT * from recipes";

    $result = mysqli_query($dbconn, $sql);
    return $result;
}


// Functions for categories



function getCategories() {
    global $dbconn;

    $sql = "SELECT category_name, image_url FROM Categories";
    $result = mysqli_query($dbconn, $sql);
    return $result;
}