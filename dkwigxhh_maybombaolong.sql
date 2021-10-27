use webBaoLong;

show tables;

select * from personal_access_tokens;

select * from customer_orders_admin;

select * from news_post;

select * from news_post_categories;	

select * from images;

select * from products;

select * from products_categories;

select * from users;

select * from pages_of_web;

select * from table_comments;

insert into table_comments(id, comment, comment_name, comment_date, cmt_product_id) values ('3','Sản phẩm rất tệ','@Khachhang','27.10.2021','12');