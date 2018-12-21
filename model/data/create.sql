CREATE TABLE compte (
  id INTEGER,
  login STRING,
  mdp STRING,
  prenom STRING,
  nom STRING,
  mail STRING,
  sexe STRING,
  telephone INTEGER,
  adresse STRING
);

CREATE TABLE requetesClient (
  idRequete INTEGER,
  idClient INTEGER,
  listeId STRING,
  descripRequete STRING,
  dateRequete date
);

CREATE TABLE servicesDispo (
  idService INTEGER,
  nomService STRING,
  nomServiceParent STRING,
  nomServiceGrandparent STRING,
  descripService STRING
);
