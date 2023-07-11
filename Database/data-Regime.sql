INSERT INTO plat (nom,prix) VALUES
    ('Viande',100),
    ('Poisson',250),
    ('Volaille',300);

INSERT INTO activites (nom) VALUES
    ('Course à pied'),
    ('Natation'),
    ('Cyclisme'),
    ('Yoga'),
    ('Entraînement en force');

INSERT INTO regime (duree,typeRegime,poids,poidsAlimentParJ) VALUES
    (7,-1,5,200),
    (5,1,3,400),
    (2,-1,2,200),
    (7,1,4,300),
    (3,-1,4,100);

-- explication: duree 7 jours, -1: perdre du poids, 1: gagner du poids

INSERT INTO menu (idPlat,frequence,idRegime) VALUES
    (1,40,1),
    (2,30,1),
    (3,30,1),
    (1,20,2),
    (2,30,2),
    (3,50,2);

INSERT INTO detailsActivites (idActivite,frequence,periode,idRegime) VALUES
    (2,1,1,1),
    (3,2,3,1);
