# BÁO CÁO ĐỀ THI CUỐI KỲ MÔN SEMINAR MẠNG MÁY TÍNH
Sinh viên thực hiện:
| MSSV | Họ tên |
| :-- | :-- |
| 1612321 | Võ Ngọc Lâm |

## Mục lục

<!-- vim-markdown-toc GFM -->

* [Chức năng](#chức-năng)
* [Terraform](#terraform)
* [Pipelines](#pipelines)
    * [Staging](#staging)
    * [Production](#production)
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
