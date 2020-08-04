# BÁO CÁO ĐỀ THI CUỐI KỲ MÔN SEMINAR MẠNG MÁY TÍNH
Sinh viên thực hiện:
| MSSV | Họ tên |
| :-- | :-- |
| 1612321 | Võ Ngọc Lâm |

## Mục lục

<!-- vim-markdown-toc GFM -->

* [Chức năng](#chức-năng)
* [Cấu trúc tập tin](#cấu-trúc-tập-tin)
* [Kiểm thử API](#kiểm-thử-api)
    * [API cho phép xem danh sách điểm của thí sinh](#api-cho-phép-xem-danh-sách-điểm-của-thí-sinh)
    * [API cho phép xem thông tin điểm chi tiết của từng thí sinh](#api-cho-phép-xem-thông-tin-điểm-chi-tiết-của-từng-thí-sinh)
* [Apache Airflow](#apache-airflow)
    * [DAGs](#dags)
    * [Phạm vi](#phm-vi)
    * [Đối số mặc định](#i-s-mc-nh)
    * [Thực thi DAG](#thc-thi-dag)
    * [Tasks](#tasks)

## Chức năng
- [x] Hệ thống 1: API quản lý điểm của các cụm thi (Ngôn ngữ lập trình: PHP)
    - [x] 1.1. API cho phép xem danh sách điểm của các thí sinh theo phương thức GET
       - Đầu vào:
       - [x] q: Từ khóa tìm kiếm (bắt buộc)
       - [x] page: Chỉ số trang (không bắt buộc)  
       - [x] page_size: Kích thước tối đa (không bắt buộc)
       - Đầu ra:
       - [x] Danh sách thí sinh và tổng điểm của thí sinh có tên hoặc số báo danh thỏa mãn từ khóa
       - [x] Số lượng kết quả record thỏa mãn  
       - [x] Chỉ trả ra tối đa {page_size}, tại trang thứ {page}
    - [x] 1.2. API cho phép xem thông tin điểm chi tiết của từng thí sinh theo phương thức GET
       - Đầu vào:
       - [x] SDB: Từ khóa tìm kiếm (bắt buộc)
       - Đầu ra:
       - [x] Thông tin thí sinh và điểm thi
- [x] Hệ thống 2: Website tra cứu điểm thi cho tất cả các cụm thi (Ngôn ngữ lập trình: PHP)
   - [x] Xem danh sách các cụm thi
        - [x] Cho phép tìm kiếm trên mã cụm thi và tên cụm thi
        - [x] Cho phép thêm cụm thi mới
        - [x] Cho phép chỉnh sửa cụm thi
    - [x] Tra cứu điểm thí sinh theo từng cụm thi    
         - [x] Cho phép nhập từ khóa tìm kiếm, chọn cụm thi
         - [x] Hiển thị danh sách thông tin thí sinh và tổng điểm của thí sinh (bằng cách gọi API 1.1) 
## Cấu trúc tập tin
- 1612321/                   Thư mục gốc ứng dụng
    - 1612321_CumThi1       Tập tin chứa hệ thống API tra cứu điểm của cụm thi 1
        - CumThi1DB.sql         Tập tin cấu hình CSDL
        - dbconnect.inc         Tập tin cấu hình kết nối đến CSDL
        - JSON_GetDiemThiSinh.php         Tập tin cấu hình API cho phép xem danh sách điểm của các thí sinh
        - JSON_ListDiemThiSinh.php        Tập tin cấu hình API cho phép xem thông tin điểm chi tiết của thí sinh
    - 1612321_CumThi2/      Tập tin chứa hệ thống API tra cứu điểm của cụm thi 2
        - CumThi2DB.sql         Tập tin cấu hình CSDL
        - dbconnect.inc         Tập tin cấu hình kết nối đến CSDL
        - JSON_GetDiemThiSinh.php         Tập tin cấu hình API cho phép xem danh sách điểm của các thí sinh
        - JSON_ListDiemThiSinh.php        Tập tin cấu hình API cho phép xem thông tin điểm chi tiết của thí sinh
    - 1612321_WebsiteTraCuu/      Tập tin chứa cấu hình website tra cứu điểm thi
       - CumThi/             Thư mục chứa các tập tin cấu hình liên quan đến cụm thi
            - ajax_capnhat_cumthi.php        Tập tin cấu hình chức năng cập nhật cụm thi
            - ajax_themmoi_cumthi.php        Tập tin cấu hình chức năng thêm mới cụm thi
            - ajax_timkiem_cumthi.php        Tập tin cấu hình chức năng tìm kiếm cụm thi
            - dbconnect.php                  Tập tin cấu hình kết nối đến CSDL
       - index.php           Tập tin thực thi ứng dụng
       - them_capnhat_cumthi.php    Tập tin cấu hình thêm mới / cập nhật cụm thi 
       - tracuudiemthi.php          Tập tin cấu hình trang tra cứu điểm thi
       - xemcumthi.php              Tập tin cấu hình trang xem/tìm kiếm cụm thi
       - TraCuuDiemThiDB.php        Tập tin cấu hình CSDL của website tra cứu điểm thi
## Kiểm thử API

### API cho phép xem danh sách điểm của thí sinh
- Hệ sinh thái của Prometheus bao gồm nhiều components, một số là tính năng optional
  - Prometheus server chính, làm nhiệm vụ scrapes và lưu time series data
  - client libraries cho client dễ dàng kết nối API
- Link mô tả
 - http://localhost:8888/1612321/1612321_CumThi1/
 - http://localhost:8888/1612321/1612321_CumThi2/

- Đầu vào:
- Link gọi thực hiện bằng trình duyệt: 
### API cho phép xem thông tin điểm chi tiết của từng thí sinh
