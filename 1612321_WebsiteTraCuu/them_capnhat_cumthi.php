
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
                    <li class="active"><a href="xemcumthi.php">Xem danh sách các cụm thi</a></li>
                    <ul>
                        <li class="list-group-item disabled"><a href="xemcumthi.php">Xem/Tìm kiếm danh sách các cụm thi</li>
                        <li class="list-group-item list-group-item-info"><a href="them_capnhat_cumthi.php">Thêm/Cập nhật danh sách các cụm thi</li>

                    </ul>
                    <li><a href="tracuudiemthi.php">Tra cứu điểm thi</a></li>
                </ul><br>

            </div>

            <div class="col-sm-9">
                <h4><small>Thêm / Cập nhật các cụm thi</small></h4>
                <hr/>
                <h3>Thông tin cụm thi</h3>

                <table class="table table-dark">
                    <tr>
                        <th scope="col">Mã cụm thi</th>
                        <td><input id="macumthi" type="text" /></td><br/>
                    </tr>
                    <tr>
                        <th scope="col">Tên cụm thi</th>
                        <td><input id="name" type="text" /></td><br/>
                    </tr>
                    <tr>
                        <th scope="col">Link API Webservice</th>
                        <td><input id="api" type="text" /></td>
                    </tr>
                </table>

                <br/>

                <button  type="submit"  class="btn btn-primary" value="add" onclick="add();"> Thêm cụm thi </button>
                <button  type="submit" class="btn btn-danger" value="update" onclick="update();"> Cập nhật thông tin cụm thi </button>
                <br/><br/>
                <h4 id="status"></h4>

            </div>
        </div>
    </div>

</body>

<footer class="container-fluid">
    <p>Sinh viên thực hiện: Võ Ngọc Lâm - 1612321</p>
</footer>
</html>

<script  language="javascript" type="text/javascript">
    var xmlhttp1;
    var xmlhttp2;

    function createXMLHttpRequest()
    {
        var xmlhttp;
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

    function add()
    {
        var mact = document.getElementById("macumthi").value;
        var tenct = document.getElementById("name").value;
        var api = document.getElementById("api").value;

        if (mact == "" || tenct == "" || api == "")
        {
            alert ("Nhập đầy đủ thông tin");
            return false;
        }
        else {
            showResultAdd(mact,tenct,api);
        }
    }

    function showResultAdd(mact,tenct,api)
    {

        xmlhttp1 = createXMLHttpRequest();

        xmlhttp1.onreadystatechange=function()
        {
            console.log(xmlhttp1.readyState);
            console.log(xmlhttp1.status);

            if (xmlhttp1.readyState==4 && xmlhttp1.status==200)
            {
                document.getElementById("status").innerHTML= xmlhttp1.responseText;
            }
        }
        var serverURL = 'CumThi/ajax_themmoi_cumthi.php?macumthi=' + encodeURI(mact) + "&tencumthi=" + encodeURI(tenct) + "&api=" + encodeURI(api) + "&t=" + (new Date()).getTime();
        xmlhttp1.open("POST",serverURL,true);
        xmlhttp1.send();
    }

    function sleep(ms)
    {
        var dt = new Date();
        dt.setTime(dt.getTime() + ms);
        while (new Date().getTime() < dt.getTime());
    }

    function update()
    {
        var mact = document.getElementById("macumthi").value;
        var tenct = document.getElementById("name").value;
        var api = document.getElementById("api").value;

        if (mact == "" || tenct == "" || api == "")
        {
            alert ("Nhập đầy đủ thông tin");
            return false;
        }
        else {
            showResultUpdate(mact,tenct,api);
        }
    }

    function showResultUpdate(mact,tenct,api)
    {

        xmlhttp2 = createXMLHttpRequest();

        xmlhttp2.onreadystatechange=function()
        {
            console.log(xmlhttp2.readyState);
            console.log(xmlhttp2.status);

            if (xmlhttp2.readyState==4 && xmlhttp2.status==200)
            {
                document.getElementById("status").innerHTML= xmlhttp2.responseText;
            }
        }
        var serverURL = 'CumThi/ajax_capnhat_cumthi.php?macumthi=' + encodeURI(mact) + "&tencumthi=" + encodeURI(tenct) + "&api=" + encodeURI(api) + "&t=" + (new Date()).getTime();
        xmlhttp2.open("POST",serverURL,true);
        xmlhttp2.send();
    }
</script>