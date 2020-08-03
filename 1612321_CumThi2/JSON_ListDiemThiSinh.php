<?php
    error_reporting(E_ERROR | E_PARSE);
    require("dbconnect.inc");
    if (isset($_REQUEST['q']))
    {
        $keyword = $_REQUEST['q'];

        if (isset($_REQUEST['page'])) {
            $pageno = $_REQUEST['page'];
        } else {
            $pageno = 1;
        }

        if (isset($_REQUEST['page_size'])) {
            $no_of_records_per_page  = $_REQUEST['page_size'];
        } else {
            $no_of_records_per_page = 5;
        }

        $offset = ($pageno-1) * $no_of_records_per_page;

        $mysqli = connect();
        $mysqli->query("SET NAMES utf8");
        $query = "SELECT COUNT(*)  FROM thi_sinh AS TS WHERE TS.SBD = '$keyword' or TS.HoTen LIKE '%$keyword%'";
        $result = $mysqli->query($query);
        $total_rows=mysqli_fetch_array($result)[0]; // So luong record thoa man
        $total_pages = ceil($total_rows / $no_of_records_per_page);

        $query = "SELECT DT.SBD, TS.HoTen, TS.NgaySinh, TS.GioiTinh, SUM(DT.Diem) AS \"TongDiem\" FROM diem_thi AS DT LEFT JOIN thi_sinh AS TS ON DT.SBD = TS.SBD LEFT JOIN monthi AS MT ON DT.MAMT = MT.MaMT WHERE TS.SBD = '$keyword' or TS.HoTen LIKE '%$keyword%' GROUP BY DT.SBD LIMIT $offset, $no_of_records_per_page";
        $result = $mysqli->query($query);

        $arr = array();
        if ($result)
        {
            foreach ($result as $row) {

                $arr[] = $row; //add an item into array
            }
        }
        $mysqli->close();

        header('Content-type: application/json');
        $paginatoinInfo = ['pageno' => $pageno, 'total_pages' => $total_pages, 'total_rows' => $total_rows];
        $new = array_push($arr, $paginatoinInfo);
        echo json_encode($arr);
    }
    else
    {
        echo json_encode(array("error"=>"Thiếu từ khóa tìm kiếm"));
    }