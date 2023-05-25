create database bdestoque;


use bdestoque;



create table produto

(id int auto_increment primary key,nome varchar(255),qtd int,preco double);



insert into produto values (default, 'bala', 5, 0.1);
insert into produto values (default, 'chiclete', 15, 0.2);



select * from produto;