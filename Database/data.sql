INSERT INTO utilisateur (nom, prenom, email, mdp, is_admin) VALUES
('Doe', 'John', 'johndoe@example.com', 'password123', 0),
('Smith', 'Jane', 'janesmith@example.com', 'pass123', 1),
('Johnson', 'Michael', 'michaeljohnson@example.com', 'test456', 0);

INSERT INTO details (idUtilisateur, idGenre, taille, poids, monnaie) VALUES
(1, 1, 180.50, 75.20, 100.00),
(2, 2, 165.75, 62.50, 50.00),
(3, 1, 175.80, 80.00, 75.00);

INSERT INTO code (numero, status, montant) VALUES
('ABC123', 1, 100.50),
('DEF456', 0, 75.20),
('GHI789', 0, 50.00),
('JKL012', 1, 200.75);

INSERT INTO validation_code (id_code, id_user) VALUES
(2, 1),
(3, 2);

