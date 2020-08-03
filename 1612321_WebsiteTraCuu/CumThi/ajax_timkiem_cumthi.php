<?php

    $keyword = $_REQUEST['keyword'];

    echo "Kết quả tìm kiếm với từ khóa: <b>$keyword</b>: <hr/>";


    require("dbconnect.php");

    $response = "<table class='table table-dark' border='1'>";
    $response = $response." <thead class='thead-dark'>
                                <tr>
                                <th>#</th>
                                <th scope='col'>Mã Cụm Thi</th>	
                                <th scope='col'>Tên Cụm Thi</th>
                                <th scope='col'>Link API Webservice</th>                         
                               </tr>
                               </thead>";


    $mysqli = connect();
    $mysqli->query("SET NAMES utf8");
    $query  = "SELECT * FROM dscumthi AS DSCT WHERE DSCT.MaCT = '$keyword' OR DSCT.TenCumThi LIKE '%$keyword%'";
    $result = $mysqli->query($query);

    if ($result)
    {
        foreach ($result as $row) {
            $id = $row["MaCT"];
            $name = $row["TenCumThi"];
            $link = $row["Link"];
            $delete_button = "<a href=\"javascript:DeleteARow('$id')\"> Xóa bỏ</a>";
            $response = $response."<tr>
                                    <td>$delete_button</td>
                                    <td>$id</td>
                                    <td>$name</td>
                                    <td><a href='$link'>API</a></td>
                                   </tr>";
        }
    }

    $response = $response."</table>";
    $mysqli->close();
    echo $response;
