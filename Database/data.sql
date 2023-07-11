INSERT INTO utilisateur (nom, prenom, email, mdp, is_admin) VALUES
('Doe', 'John', 'johndoe@example.com', 'password123', 0),
('Smith', 'Jane', 'janesmith@example.com', 'pass123', 1),
('Johnson', 'Michael', 'michaeljohnson@example.com', 'test456', 0);

INSERT INTO details (idUtilisateur, idGenre, taille, poids, objectif, monnaie) VALUES
(1, 1, 180.50, 75.20, 1, 100.00),
(2, 2, 165.75, 62.50, 1, 50.00),
(3, 1, 175.80, 80.00, -1, 75.00);

INSERT INTO code (numero, status, montant) VALUES
('ABC123', 1, 100.50),
('DEF456', 0, 75.20),
('GHI789', 0, 50.00),
('JKL012', 1, 200.75);

INSERT INTO validation_code (id_code, id_user) VALUES
(2, 1),
(3, 2);


INSERT INTO historique (idUtilisateur, Montant, date_du_jour) VALUES
(1, 100, '2023-07-01'),
(1, 150, '2023-07-02'),
(2, 200, '2023-07-03'),
(2, 75, '2023-07-04'),
(3, 120, '2023-07-05'),
(3, 80, '2023-07-06'),
(4, 90, '2023-07-07'),
(4, 200, '2023-07-08'),
(5, 150, '2023-07-09'),
(5, 180, '2023-07-10');
