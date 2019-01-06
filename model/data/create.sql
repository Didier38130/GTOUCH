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
  image BLOB,
  idRequete INTEGER PRIMARY KEY AUTOINCREMENT,
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

CREATE TABLE messages (
	idMessage INTEGER PRIMARY KEY AUTOINCREMENT,
	idExpediteur INTEGER NOT NULL default '0',
	idDestinataire INTEGER NOT NULL default '0',
	dateMessage date NOT NULL default '0000-00-00 00:00:00',
	objetMessage STRING NOT NULL,
	contenuMessage STRING NOT NULL,
  typeExp STRING
);
