create database starkim;
use starkim;
create table integrantes(
id int auto_increment primary key,
nombres varchar(50),
apellidos varchar(50)
);
insert into integrantes (nombres, apellidos)
values ('yhorelei', 'villegas contreras');
insert into integrantes (nombres, apellidos)
values ('william arturo', 'lopèz jeronimo');

select * from integrantes;