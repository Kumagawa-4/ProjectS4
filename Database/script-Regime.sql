create database regime;
use regime;

-- regime
create table plat(
    id int primary key auto_increment,
    nom varchar(30),
    prix decimal(7,2)
);

create table activites(
    id int primary key auto_increment,
    nom varchar(30)
);

create table regime(
    id int primary key auto_increment,
    duree int,
    typeRegime int,
    poids int,
    poidsAlimentParJ int
);



create table detailsActivites(
    id int primary key auto_increment,
    idActivite int,
    frequence int,
    periode int,
    idRegime int,
    foreign key (idActivite) references activites(id) ON DELETE CASCADE,
    foreign key (idRegime) references regime(id) ON DELETE CASCADE
);

create table menu(
    id int primary key auto_increment,
    idPlat int,
    frequence int,
    idRegime int,
    foreign key (idPlat) references plat(id) ON DELETE CASCADE,
    foreign key (idRegime) references regime(id) ON DELETE CASCADE
);
