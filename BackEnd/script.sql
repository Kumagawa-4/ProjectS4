create database regime;
use regime;


create table utilisateur (
    id integer primary key auto_increment,
    nom varchar(50),
    prenom varchar(50),
    email varchar(50),
    mdp varchar(20),
    is_admin integer
);

create table genre (
    id integer primary key auto_increment,
    nom varchar(20)
);

CREATE TABLE details (
    idUtilisateur INTEGER,
    idGenre INTEGER,
    taille DECIMAL(10,2),
    poids DECIMAL(10,2),
    monnaie DECIMAL(10,2),
    objectif INTEGER, -- -1, 1 
    FOREIGN KEY (idGenre) REFERENCES genre(id),
    FOREIGN KEY (idUtilisateur) REFERENCES utilisateur(id)
);


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

--  CODE

create table code (
    id integer primary key auto_increment,
    numero varchar(50),
    status integer,  -- utilisé : 1  / non utilisé : 0
    montant decimal(10,2)
);

create table validation_code (
    id integer primary key auto_increment,
    id_code integer,
    id_user integer,
    date date,
    valide integer, -- 0 : pas encore validé / 1 : validé / -1 : refusé
    foreign key (id_code) references code(id),    
    foreign key (id_user) references utilisateur(id)    
);


create table historique (
    id integer primary key auto_increment,
    idUtilisateur int,
    Montant int,
    date_du_jour date 
);
