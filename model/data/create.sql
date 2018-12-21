CREATE TABLE compteClient (
  id INTEGER PRIMARY KEY AUTOINCREMENT,
  login STRING,
  mdp STRING,
  prenom STRING,
  nom STRING,
  mail STRING,
  sexe STRING,
  telephone STRING,
  adresse STRING
);
CREATE TABLE compteGraphiste (
  id INTEGER PRIMARY KEY AUTOINCREMENT,
  login STRING,
  mdp STRING,
  prenom STRING,
  nom STRING,
  mail STRING,
  sexe STRING,
  telephone STRING,
  adresse STRING,
  portfolio STRING
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
