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
                    <li class="active"><a href="index.php">Trang Chủ</a></li>
                    <li><a href="xemcumthi.php">Xem danh sách các cụm thi</a></li>

                    <li><a href="tracuudiemthi.php">Tra cứu điểm thi</a></li>
                </ul><br>
            </div>

            <div class="col-sm-9">
                <h4><small>Tra Cứu Điểm Thi</small></h4>
                <hr/>

                <div id="tableCV"></div>
                <input type="hidden" id="ids"/>

            </div>
        </div>
    </div>
</body>

<footer class="container-fluid">
    <p>Sinh viên thực hiện: Võ Ngọc Lâm - 1612321</p>
</footer>
</html>
