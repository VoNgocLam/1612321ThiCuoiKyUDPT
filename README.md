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
- [x] Hệ thống 1: API quản lý điểm của các cụm thi (Ngôn ngữ lập trình php)
    - [x] API cho phép xem danh sách điểm của các thí sinh theo phương thức GET
    - [x] API cho phép xem thông tin điểm chi tiết của từng thí sinh theo phương thức GET
       - [x] Tự động deploy lên staging khi merge/commit trên master
       - [x] Manual trigger khi deploy lên production  
- [x] Deploy GKE with Terraform
- [x] Deploy Apache Airflow + DAGs + Tasks
    - [x] Quản lí version bằng tag
    - [x] Push image lên Docker Hub
    - [x] Tự động deploy lên staging khi merge/commit trên master
    - [x] Manual trigger khi deploy lên production
- [x] Pipeline stages
    - [x] Commit
    - [x] Provision
    - [x] Build
    - [x] Deploy
- [x] Demo video
