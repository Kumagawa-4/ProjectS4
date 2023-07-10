create database regime;
use regime;

--  UTILISATEUR 

create table utilisateur (
    id integer primary key auto_increment,
    nom varchar(50),
    prenom varchar(50),
    email varchar(50),
    admin integer
);

create table genre (
    id integer primary key auto_increment,
    nom varchar(20)
);

CREATE TABLE details (
    idUtilisateur INTEGER PRIMARY KEY auto_increment,
    idGenre INTEGER,
    taille DECIMAL(10,2),
    poids DECIMAL(10,2),
    monnaie DECIMAL(10,2),
    FOREIGN KEY (idGenre) REFERENCES genre(id)
);


--  OBJECTIF

create table objectif (
    id integer primary key auto_increment,
    nom varchar(50)
);

create table objectif_utilisateur (
    id integer primary key auto_increment,
    idUtilisateur integer,
    idObjectif integer,
    foreign key (idUtilisateur) references utilisateur(id),
    foreign key (idObjectif) references objectif(id)
);



--  SAKAFO

create table sakafo (
    id integer primary key auto_increment,
    nom varchar(50)
);

create table menu (
    id integer primary key auto_increment,
    nom varchar(50)
);

create table composant_menu (
    id integer primary key auto_increment,
    idMenu integer,
    idSakafo integer,
    foreign key (idMenu) references menu(id),
    foreign key (idSakafo) references sakafo(id)    
);



-- ACTIVITE SPORTIVE

create table activite_sportive (
    id integer primary key auto_increment,
    nom varchar(50)
);

create table activite (
    id integer primary key auto_increment,
    nom varchar(20)
);

create table composant_activite (
    id integer primary key auto_increment,
    idActivite integer,
    idActiviteSportive integer,
    foreign key (idActivite) references activite(id),
    foreign key (idActiviteSportive) references activiteSportive(id)
);


--  REGIME

create table regime (
    id integer primary key auto_increment,
    idMenu integer,
    idActivite integer,
    duree timestamp,
    foreign key (idActivite) references activite(id),
    foreign key (idMenu) references menu(id)        
);


--  CODE

create table code (
    id integer primary key auto_increment,
    numero varchar(50),
    status integer,
    montant decimal(10,2)
);