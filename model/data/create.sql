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

CREATE TABLE requetesclient (
  idrequete INTEGER,
  idclient INTEGER,
  listeid STRING,
  descriprequete STRING
)

CREATE TABLE servicesdispo (
  idservice INTEGER,
  nomservice STRING,
  descripservice STRING
)
