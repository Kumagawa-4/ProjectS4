INSERT INTO utilisateur (nom, prenom, email, mdp, is_admin) VALUES
('Doe', 'John', 'johndoe@example.com', 'password123', 0),
('Smith', 'Jane', 'janesmith@example.com', 'pass123', 1),
('Johnson', 'Michael', 'michaeljohnson@example.com', 'test456', 0);

-- regime
INSERT INTO plat (nom,prix) VALUES
    ('Salade verte',2000),
    ('Saumon grillé avec légumes',1000),
    ('Smoothie aux fruits frais',1000),
    ('Quinoa aux légumes',2500),
    ('Bol de fruits',3000);

INSERT INTO activites (nom) VALUES
    ('Course à pied'),
    ('Natation'),
    ('Cyclisme'),
    ('Yoga'),
    ('Entraînement en force');

INSERT INTO regime (duree,typeRegime,poids) VALUES
    (7,-1,5),
    (5,1,3);

-- explication: duree 7 jours, -1: perdre du poids, 1: gagner du poids

INSERT INTO menu (idPlat,frequence,periode,idRegime) VALUES
    (1,1,2,1),
    (5,2,1,1);

-- explication: frequence: 1 fois,2 fois; periode: 1 jour (par jour), 2 jours (tous les 2 jours), 7 jours (par semaine)

INSERT INTO detailsActivites (idActivite,frequence,periode,idRegime) VALUES
    (2,1,1,1),
    (3,2,3,1);
