<?php

    $macumthi = $_REQUEST['macumthi'];
    $tencumthi = $_REQUEST['tencumthi'];
    $link = $_REQUEST['api'];

    require("dbconnect.php");

    $mysqli = connect();
    $mysqli->query("SET NAMES utf8");
    $query = "UPDATE dscumthi SET dscumthi.TenCumThi = '$tencumthi', dscumthi.Link = '$link' WHERE dscumthi.MaCT= '$macumthi'";
    $result = $mysqli->query($query);

    if ($result) {
        echo  "Cập nhật cụm thi thành công";
    } else {
        echo "Cập nhật dữ liệu thất bại";
    }

    $mysqli->close();
