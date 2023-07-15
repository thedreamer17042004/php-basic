create database php;
use php;
create table lop_hoc (
    id int primary key AUTOINCREMENT,
    name varchar(255) not null
)

create table sinh_vien (
    name varchar(255) not null,
    email varchar(255) not null,
    phone varchar(255) not null,
    lop_hoc_id varchar(255) not null
)