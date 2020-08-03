
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tra cứu điểm thi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
        .row.content {height: 909px}

        /* Set gray background color and 100% height */
        .sidenav {
            background-color: #f1f1f1;
            height: 100%;
        }

        /* Set black background color, white text and some padding */
        footer {
            background-color: #555;
            color: white;
            padding: 15px;
        }

        /* On small screens, set height to 'auto' for sidenav and grid */
        @media screen and (max-width: 767px) {
            .sidenav {
                height: auto;
                padding: 15px;
            }
            .row.content {height: auto;}
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row content">
        <div class="col-sm-3 sidenav">
            <h4>Trang chủ</h4>
            <ul class="nav nav-pills nav-stacked">
                <li ><a href="index.php">Trang Chủ</a></li>
                <li ><a href="xemcumthi.php">Xem danh sách các cụm thi</a></li>
                <li class="active"><a href="tracuudiemthi.php">Tra cứu điểm thi</a></li>
            </ul><br>

        </div>

        <div class="col-sm-9">
            <h4><small>Tra cứu điểm thi của thí sinh</small></h4>
            <hr/>
            <div class="input-group">

                <input  type="text" id="txtKeyword"  class="form-control" placeholder="Tìm kiếm theo số báo danh hoặc họ tên...">
                <span class="input-group-btn">
                      <button class="btn btn-default" type="button" id ="handleClick">
                        <span class="glyphicon glyphicon-search"></span>
                      </button>
                    </span>
                <select class="form-control" id="selectCT"></select>

            </div>
            <br/>
            <h4 id="count"></h4>
            <div id="tableCV"></div>

            <nav aria-label="...">
                <ul class="pagination" id="pagination"></ul>
            </nav>

        </div>
    </div>
</div>

</body>

<footer class="container-fluid">
    <p>Sinh viên thực hiện: Võ Ngọc Lâm - 1612321</p>
</footer>
</html>

<script  language="javascript" type="text/javascript">
    var tagSelect = document.getElementById("selectCT");
    <?php
    require("CumThi/dbconnect.php");

    $mysqli = connect();
    $mysqli->query("SET NAMES utf8");
    $query = "SELECT * FROM dscumthi";
    $result = $mysqli->query($query);

    foreach ($result as $row){
    $id = $row["MaCT"];
    $name = $row["TenCumThi"];
    $link = $row["Link"];
    ?>
    var tagOption = document.createElement("option");
    tagOption.value= "<?php echo $link ?>";
    tagOption.text= "<?php echo $name ?>";
    tagSelect.add(tagOption);

    <?php
    }
    ?>
</script>

<script  language="javascript" type="text/javascript">
    var xmlhttp;

    function createXMLHttpRequest()
    {
        if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
        }
        else
        {// code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        return xmlhttp;
    }

    document.getElementById('handleClick').addEventListener("click", function(e) {
        var tagSelect = document.getElementById("selectCT");
        // var opt = getSelectedOption(tagSelect);
        var linkAPI = tagSelect.options[tagSelect.selectedIndex].value;
        // console.log(linkAPI);
        var keyword = document.getElementById("txtKeyword").value;
        // console.log(keyword);
        Search(keyword, linkAPI);

    })

    function Search(str, link)
    {

        xmlhttp = createXMLHttpRequest();

        xmlhttp.onreadystatechange=showResult;
        var host = link;
        // console.log(host);
        var serverURL = host + '/JSON_ListDiemThiSinh.php?q=' + encodeURI(str) + "&page_size=15" + "&t=" + (new Date()).getTime();
        xmlhttp.open("GET",serverURL,true);
        // console.log(serverURL);

        xmlhttp.send();
    }

    function showResult()
    {
        if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
        {
            var kq = xmlhttp.responseText;

            var jSONObject = eval("(" + kq + ")");

            var s = "";
            s += "<table class='table table-dark' border='1'>";
            s += "<thead class='thead-dark'>" +
                " <tr>" +
                "<th scope='col'>Số Báo Danh</th>" +
                "<th scope='col'>Họ Tên</th>" +
                "<th scope='col'>Ngày Sinh</th>" +
                "<th scope='col'>Giới Tính</th>" +
                "<th scope='col'>Tổng điểm</th>" +
                "</tr>" +
                "</thead>";

            for(var i =0; i < jSONObject.length; i++)
            {
                if( i == jSONObject.length-1)
                {
                    var total_rows = jSONObject[i].total_rows;
                }else {
                    s += "<tr><td>" + jSONObject[i].SBD + "</td>" +
                        "<td>" + jSONObject[i].HoTen + "</td>" +
                        "<td>" + jSONObject[i].NgaySinh + "</td>" +
                        "<td>" + jSONObject[i].GioiTinh + "</td>" +
                        "<td>" + jSONObject[i].TongDiem + "</td>" +
                        "</tr>";
                }
            }
            s += "</table>";

            document.getElementById("tableCV").innerHTML= s;
            document.getElementById("count").innerHTML= "Có " + total_rows +" tìm kiếm phù hợp";


        }
    }

</script>
<?php
