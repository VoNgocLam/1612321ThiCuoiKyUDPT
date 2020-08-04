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
* [Kiểm thử website tra cứu điểm thi](#kiểm-thử-website-tra-cứu-điểm-thi)
    * [Trang chủ](#trang-chủ)
    * [Xem danh sách các cụm thi](#xem-danh-sách-các-cụm-thi)
    * [Tra cứu điểm thi](#Tra-cứu-điểm-thi)
    
## Chức năng
- [x] Hệ thống 1: API quản lý điểm của các cụm thi (Ngôn ngữ lập trình: PHP)
    - [x] 1.1. API cho phép xem danh sách điểm của các thí sinh theo phương thức GET
       - Đầu vào:
       - [x] q: Từ khóa tìm kiếm (bắt buộc)
       - [x] page: Chỉ số trang (không bắt buộc)  
       - [x] page_size: Kích thước tối đa (không bắt buộc)
       - Đầu ra:
       - [x] Danh sách thí sinh và tổng điểm của thí sinh có tên hoặc số báo danh thỏa mãn từ khóa
       - [x] total_rows: Số lượng kết quả record thỏa mãn  
       - [x] pageno: Chỉ số trang hiện tại
       - [x] total_pages: Tổng số trang
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
#### Sử dụng kỹ thuật RESTful API với PHP & JSON (sử dụng phân trang)
- Link mô tả
  - http://localhost:8888/1612321/1612321_CumThi1/JSON_ListDiemThiSinh.php
  - http://localhost:8888/1612321/1612321_CumThi2/JSON_ListDiemThiSinh.php
- Tham số đầu vào
  - q: Từ khóa tìm kiếm (bắt buộc)
  - page: Chỉ số trang (không bắt buộc)
  - Page_size: Kích thước tối đa trả về (không bắt buộc)
- Link gọi API thực hiện
  - http://localhost:8888/1612321/1612321_CumThi1/JSON_ListDiemThiSinh.php?q=Võ+Ngọc+Lâm
  - http://localhost:8888/1612321/1612321_CumThi1/JSON_ListDiemThiSinh.php?q=01.0003
  - http://localhost:8888/1612321/1612321_CumThi1/JSON_ListDiemThiSinh.php?q=Lâm&page=1
  - http://localhost:8888/1612321/1612321_CumThi1/JSON_ListDiemThiSinh.php?q=Lâm&page=1&page_size=2
- Mô tả cách kiểm tra
  - Kiểm tra khi thiếu đầu vào q
  ![7.png](https://2.pik.vn/2020ca30ee17-8c29-46d9-a7f1-14c58f7c3a23.png)
  - Kiểm tra với đầu vào q là tên thí sinh
  ![Annotation 2020-08-04 085755.png](https://2.pik.vn/2020d0995e7b-8c1d-4905-a4d6-da26abba3476.png)
  - Kiểm tra với đầu vào q là số báo danh của thí sinh
  ![2.png](https://2.pik.vn/20206f219e64-a9c7-4204-82e9-4ccc9c903ea8.png)
  - Kiểm tra với đầu vào là q và page
  ![3.png](https://2.pik.vn/202021176a34-eba7-4485-9171-f3390316ef0d.png)
  - Kiểm tra với đâu vào là q, page và page_size
  ![4.png](https://2.pik.vn/2020c290c7b1-6279-4c00-aefe-e8d3e60e9332.png)

### API cho phép xem thông tin điểm chi tiết của từng thí sinh
#### Sử dụng kỹ thuật RESTful API với PHP & JSON 
- Link mô tả
  - http://localhost:8888/1612321/1612321_CumThi1/JSON_GetDiemThiSinh.php
  - http://localhost:8888/1612321/1612321_CumThi2/JSON_GetDiemThiSinh.php
- Tham số đầu vào
  - SBD: Từ khóa tìm kiếm (bắt buộc)
- Link gọi API thực hiện
  - http://localhost:8888/1612321/1612321_CumThi1/JSON_GetDiemThiSinh.php?SBD=01.0003
  - http://localhost:8888/1612321/1612321_CumThi2/JSON_GetDiemThiSinh.php?SBD=02.0001
- Mô tả cách kiểm tra
  - Kiểm tra khi thiếu đầu vào SBD
  ![8.png](https://2.pik.vn/20200fd5e9b4-71bd-4f5d-8f44-986ec9dc5e27.png)
  - Kiểm tra với đầu vào SBD ở cụm thi 1
  ![5.png](https://2.pik.vn/20206745dd6f-1b75-4bc6-a36d-86fb53b90c94.png)
  - Kiểm tra với đầu vào SBD ở cụm thi 2
  ![6.png](https://2.pik.vn/20201ecb0b25-80f8-4ec7-bec3-81b791e0c018.png)

## Kiểm thử website tra cứu điểm thi

### API cho phép xem danh sách điểm của thí sinh
#### Sử dụng kỹ thuật RESTful API với PHP & JSON (sử dụng phân trang)
- Link mô tả
  - http://localhost:8888/1612321/1612321_CumThi1/JSON_ListDiemThiSinh.php
  - http://localhost:8888/1612321/1612321_CumThi2/JSON_ListDiemThiSinh.php
- Tham số đầu vào
  - q: Từ khóa tìm kiếm (bắt buộc)
  - page: Chỉ số trang (không bắt buộc)
  - Page_size: Kích thước tối đa trả về (không bắt buộc)
- Link gọi API thực hiện
  - http://localhost:8888/1612321/1612321_CumThi1/JSON_ListDiemThiSinh.php?q=Võ+Ngọc+Lâm
  - http://localhost:8888/1612321/1612321_CumThi1/JSON_ListDiemThiSinh.php?q=01.0003
  - http://localhost:8888/1612321/1612321_CumThi1/JSON_ListDiemThiSinh.php?q=Lâm&page=1
  - http://localhost:8888/1612321/1612321_CumThi1/JSON_ListDiemThiSinh.php?q=Lâm&page=1&page_size=2
- Mô tả cách kiểm tra
  - Kiểm tra khi thiếu đầu vào q
  ![7.png](https://2.pik.vn/2020ca30ee17-8c29-46d9-a7f1-14c58f7c3a23.png)
  - Kiểm tra với đầu vào q là tên thí sinh
  ![Annotation 2020-08-04 085755.png](https://2.pik.vn/2020d0995e7b-8c1d-4905-a4d6-da26abba3476.png)
  - Kiểm tra với đầu vào q là số báo danh của thí sinh
  ![2.png](https://2.pik.vn/20206f219e64-a9c7-4204-82e9-4ccc9c903ea8.png)
  - Kiểm tra với đầu vào là q và page
  ![3.png](https://2.pik.vn/202021176a34-eba7-4485-9171-f3390316ef0d.png)
  - Kiểm tra với đâu vào là q, page và page_size
  ![4.png](https://2.pik.vn/2020c290c7b1-6279-4c00-aefe-e8d3e60e9332.png)

## Trang chủ
#### Sử dụng Bootstarp
- Mô tả giao diện
![Annotation 2020-08-04 092825.png](https://2.pik.vn/2020167c217d-0e26-4fae-8607-6c41ddef8c19.png)

## Xem danh sách các cụm thi

### Xem/tìm kiếm danh sách các cụm thi
#### Sử dụng Bootstarp, AJAX
- Mô tả giao diện
![1.png](https://2.pik.vn/2020faddc53e-c446-4322-b999-ff47f92e6d18.png)

![2.png](https://2.pik.vn/2020ccef324d-b7cc-4009-8ef4-6ffee573def8.png)

![3.png](https://2.pik.vn/2020fcab7d23-687d-45f5-8100-57462506e73d.png)

![4.png](https://2.pik.vn/2020ec3d7db0-573e-4d70-8576-4c8f29260257.png)

### Thêm/cập nhật danh sách các cụm thi
#### Sử dụng Bootstarp, AJAX
![1.png](https://2.pik.vn/2020ed83e71f-348f-4b0d-8fc6-95554405376d.png)

![2.png](https://2.pik.vn/2020e47ac81f-a8cd-47c1-b58d-a0c59e83065e.png)

![3.png](https://2.pik.vn/202028e56c60-f27f-4ed9-b8e9-53b2911f1ee4.png)

![4.png](https://2.pik.vn/20204771e442-dbcf-40ac-848f-7e738e4ba170.png)

![5.png](https://2.pik.vn/2020dfcec3aa-fc20-4fa7-b5f6-2e8ff708372a.png)

![6.png](https://2.pik.vn/2020c9d93da6-f429-41aa-b7f5-53fdd6f9d2e8.png)

![7.png](https://2.pik.vn/2020df6e45ca-95b8-4b24-bd9d-a8f626b1c23e.png)

## Tra cứu điểm thi
#### Sử dụng Bootstarp, AJAX & JSON

![1.png](https://2.pik.vn/2020c19aabd3-49fb-4fd8-8dd7-eef1313bd329.png)

![2.png](https://2.pik.vn/2020f342e160-3e21-4e37-a160-3c61257618d1.png)

![3.png](https://2.pik.vn/2020b87aa8c4-c2cc-4683-937b-1e615f9ae756.png)

![4.png](https://2.pik.vn/20203cc3592a-834b-4b20-8498-8ad1bd8a5357.png)

![5.png](https://2.pik.vn/20205661c588-9410-4c4d-8f60-ce4a3b6b72ab.png)

![6.png](https://2.pik.vn/202063c31a2f-80fe-4ae5-827b-d8e512d47590.png)

![7.png](https://2.pik.vn/202083c775d2-e22d-4f1c-8ea9-d9eb8bf572bb.png)

![8.png](https://2.pik.vn/2020baa38599-28c7-4e98-95f4-9097872590fd.png)

![9.png](https://2.pik.vn/20200f49eadb-797f-4175-b357-8e8f184cc437.png)

![10.png](https://2.pik.vn/202010015f43-f1ed-474b-a712-fb0756b0e93b.png)
