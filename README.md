## Mục lục

<!-- vim-markdown-toc GFM -->

* [Thành viên](#thành-viên)
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
- [x] Apache Airflow + DAGs + Tasks
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
