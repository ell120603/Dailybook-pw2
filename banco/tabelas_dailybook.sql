create database dailybase;
use dailybase;
create table login(
user_id int not null primary key auto_increment,
usuario varchar (100) not null,
senha varchar(50) not null
)engine=innodb;
create table notas(
nota_id int not null primary key auto_increment,
anotacao varchar(16000) not null,
user_id int,
constraint FK_ foreign key(user_id) references login(user_id)
);
insert into notas(anotacao,user_id) values('A imaginação é mais importante que o conhecimento');

insert into login(user_id, usuario, pergunta_seguranca, senha) values ('1' ,'joão_pedro', 'pedro','4002');
insert into login(usuario,pergunta_seguranca, senha) values('teste', 'maria', 'teste123');

delete from login where user_id=1;

select user_id from login where usuario = 'teste';
select * from notas;
select * from login;

drop table login;
drop table notas;

update notas set anotacao = 'bla' where nota_id = 1

truncate login;





