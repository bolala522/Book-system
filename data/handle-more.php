<?php
include("conn-local.php");

if (isset($_GET['page'])) {
    $page = $_GET['page'];
    $sql = "SELECT * FROM `book-info`ORDER BY id LIMIT $page ,6";
    $result = mysqli_query($conn, $sql);

    $output = array();
    while ($rows = mysqli_fetch_array($result)) {
        array_push($output, $rows);
    }
    $output = json_encode($output);
    echo $output;
} else if (isset($_GET['key'])) {
    $key = $_GET['key'];
    $sql = "SELECT * FROM `book-info` WHERE `language` LIKE '$key'";
    $result = mysqli_query($conn, $sql);
    $output = array();
    while ($rows = mysqli_fetch_array($result)) {
        array_push($output, $rows);
    }
    $output = json_encode($output);
    echo $output;
} else if (isset($_GET['searchkey'])) {
    $searchkey = $_GET['searchkey'];
    $sql = "SELECT * FROM `book-info` WHERE `book` LIKE '%$searchkey%'";
    $result = mysqli_query($conn, $sql);
    $output = array();
    while ($rows = mysqli_fetch_array($result)) {
        array_push($output, $rows);
    }
    $output = json_encode($output);
    echo $output;
}
else {
    $sql = "SELECT * FROM `book-info`ORDER BY id";
    $result = mysqli_query($conn, $sql);
    $output = array();
    while ($rows = mysqli_fetch_array($result)) {
        array_push($output, $rows);
    }
    $output = json_encode($output);
    echo $output;
}
