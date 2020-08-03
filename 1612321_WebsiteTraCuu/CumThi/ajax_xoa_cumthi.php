<?php
    require("dbconnect.php");
    $mysqli = connect();
    $mysqli->query("SET NAMES utf8");
    $id = $_REQUEST["id"];
    $query = "DELETE FROM dscumthi WHERE dscumthi.MaCT = '$id'";
    echo $query;
    $result = $mysqli->query($query);
    $mysqli->close();