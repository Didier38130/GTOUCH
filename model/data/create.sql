CREATE TABLE compte (
  id INTEGER,
  login STRING,
  mdp STRING,
  prenom STRING,
  nom STRING,
  mail STRING,
  sexe STRING,
  telephone STRING,
  adresse STRING
);

CREATE TABLE requetesClient (
  idRequete INTEGER,
  idClient INTEGER,
  listeId STRING,
  descripRequete STRING
);
--remplacer liste id par des référence sur tous les services possibles ?

CREATE TABLE servicesDispo (
  idService INTEGER,
  nomService STRING,
  nomServiceParent STRING,
  nomServiceGrandparent STRING,
  descripService STRING
);
