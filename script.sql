create database testdatabase;
use testdatabase;

create table utilisateur(
    id int primary key auto_increment,
    nom varchar(30),
    pass varchar(10)
);

insert into utilisateur values(null,'admin','superadmin');
insert into utilisateur values(null,'user','mdp');
