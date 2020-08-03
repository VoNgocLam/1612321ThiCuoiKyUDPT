<?php

    error_reporting(E_ERROR | E_PARSE);
    require("dbconnect.inc");

    if (isset($_REQUEST['SBD'])) {
        $sbd = $_REQUEST['SBD'];
        $mysqli = connect();
        $mysqli->query("SET NAMES utf8");
        $query = "SELECT DT.SBD, TS.HoTen, TS.NgaySinh, TS.GioiTinh, MT.TenMonThi, DT.Diem FROM diem_thi AS DT LEFT JOIN thi_sinh AS TS ON DT.SBD = TS.SBD LEFT JOIN monthi AS MT ON DT.MAMT = MT.MaMT WHERE DT.SBD=$sbd";
        $result = $mysqli->query($query);
        header('Content-type: application/json');

        $arr = array();
        if ($result) {
            foreach ($result as $row) {

                $arr[] = $row; //add an item into array
            }
        }

        $mysqli->close();
        echo json_encode($arr);
    } else {
        echo json_encode(array("error" => "Thiếu từ khóa tìm kiếm"));
    }
