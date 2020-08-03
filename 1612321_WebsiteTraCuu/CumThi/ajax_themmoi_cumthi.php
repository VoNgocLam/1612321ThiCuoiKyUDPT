<?php

    $macumthi = $_REQUEST['macumthi'];
    $tencumthi = $_REQUEST['tencumthi'];
    $link = $_REQUEST['api'];

    require("dbconnect.php");

    $mysqli = connect();
    $mysqli->query("SET NAMES utf8");
    $query = "INSERT INTO dscumthi values ($macumthi, '$tencumthi', '$link')";
    $result = $mysqli->query($query);

    if ($result) {
        echo  "Thêm mới cụm thi thành công";
    } else {
        echo "Thêm mới thất bại";
    }

    $mysqli->close();


