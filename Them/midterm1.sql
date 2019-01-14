drop database if exists Watch;
create database Watch DEFAULT CHARACTER SET UTF8;
use Watch;


create table if not exists category (
id int(11) not null auto_increment,
cat_name varchar(255),
note text,
primary key(id)
);

create table if not exists product (
id int(11) not null auto_increment,
prod_name varchar(255),
category_id int(11),
price int(11),
quantity int(11),
status int(1),
imported_date date,
image mediumblob,
primary key(id),
foreign key(category_id) references category (id)
);

create table if not exists users (
id int(11) not null auto_increment,
user_name varchar(255),
address varchar(255),
password varchar(255),
sdt varchar(100),
email varchar(255),
img varchar(255),
role varchar(255) default 'khachhang',
primary key (id)
);

create table if not exists orders (
id int(11) not null auto_increment,
user_name	int(11),
date datetime,
primary key (id),
foreign key (user_name) references users (id)
);

create table if not exists prod_orders (
prod_id int(11),
order_id int(11),
quantity int(11),
primary key(prod_id, order_id),
foreign key(prod_id) references product(id),
foreign key(order_id) references orders(id)
);


insert into category (cat_name) values
('Đồng hồ bấm giờ'),
('Đồng hồ thợ lặn'),
('Đồng hồ báo thức'),
('Đồng hồ nguyên tử'),
('Đồng hồ điện tử'),
('Đồng hồ thông minh'),
('Đồng hồ đa năng'),
('Đồng hồ cơ'),
('Đồng hồ mặt trời'),
('Đồng hồ kỹ thuật số');


/*insert into orders (user_name, date) values
(1,date('2018-01-02')),
(1,date('2018-12-12')),
(2,date('2018-01-02')),
(2,date('2018-01-03')),
(2,date('2018-03-01'));*/


insert into product 
(prod_name,		category_id,	price,	quantity,	status,	imported_date) 
values
('Đồng hồ bấm giờ-Đồng hồ canh giờ nấu nướng', 	1, 350000, 20, 1, date('2017-01-01')),
('Đồng hồ bấm giờ-Đồng hồ dùng cho nhà bếp', 	1, 300000, 10, 1, date('2017-01-01')),

('Đồng hồ thợ lặn-Seiko ', 	2, 400000, 	10, 1, date('2018-08-01')),
('Đồng hồ thợ lặn-G Sock', 	2, 550000, 	15, 1, date('2016-08-01')),

('Đồng hồ báo thức đeo tay thông minh', 3, 600000, 50, 1, date('2017-12-12')),
('Đồng hồ báo thức có đèn led ', 		3, 75000, 15, 1, date('2018-12-12')),

('Đồng hồ nguyên tử mặt hạt cá tính', 	4, 500000, 10, 1, date('2017-01-01')),
('Đồng hồ nguyên tử đo sức khỏe', 4, 8, 1000000, 15, date('2017-01-01')),

('Đồng hồ điện tử',5, 1500000, 50, 	 1, date('2010-01-02')),
('Đồng hồ điện tử kiểu dáng thể thao', 	5, 100000, 100, 1, date('2015-01-02')),

('Đồng hồ thông minh',6, 1500000, 50, 	 1, date('2010-01-02')),
('Đồng hồ thông minh SmartWatch', 	6, 100000, 100, 1, date('2015-01-02')),

('Đồng hồ đa năng gỗ vuông',7, 2500000, 20, 	 1, date('2010-01-02')),
('Đồng hồ đa năng đo điện trở kỹ thuật', 	7, 200000, 10, 1, date('2015-01-20')),

('Đồng hồ cơ nữ Shahire',8, 500000, 5, 	 1, date('2016-01-02')),
('Đồng hồ cơ nam', 	8, 600000, 18, 1, date('2018-01-02')),

('Đồng hồ mặt trời nữ tích lũy năng lượng',9, 2500000, 50, 	 1, date('2017-01-02')),
('Đồng hồ mặt trời', 	9, 100000, 150, 1, date('2016-12-02')),

('Đồng hồ kỹ thuật số',10, 200000, 50, 	 1, date('2018-01-02')),
('Đồng hồ Led kỹ thuật số', 	10, 100000, 125, 1, date('2019-01-01'));





