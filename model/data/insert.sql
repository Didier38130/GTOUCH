INSERT into compteClient (login,mdp,prenom,nom,mail,sexe,telephone,adresse)
values('faurepeq','123','quentin','faure','petraz.quentin@gmail.com','homme','0750835966','8 rue ariste berges 38000 Grenoble');
INSERT into compteClient (login,mdp,prenom,nom,mail,sexe,telephone,adresse)
values('faurepeq2','123','quentin','faure','petraz.quentin@gmail.com','homme','0750835966','8 rue ariste berges 38000 Grenoble');
INSERT into compteClient (login,mdp,prenom,nom,mail,sexe,telephone,adresse)
values('faurepeq3','123','quentin','faure','petraz.quentin@gmail.com','homme','0750835966','8 rue ariste berges 38000 Grenoble');

INSERT into compteGraphiste (login,mdp,prenom,nom,mail,sexe,telephone,adresse,portfolio)
values('faurepeq4','123','quentin','faure','petraz.quentin@gmail.com','homme','0750835966','8 rue ariste berges 38000 Grenoble','adresse portfolio');
INSERT into compteGraphiste (login,mdp,prenom,nom,mail,sexe,telephone,adresse,portfolio)
values('faurepeq5','123','quentin','faure','petraz.quentin@gmail.com','homme','0750835966','8 rue ariste berges 38000 Grenoble','adresse portfolio');
INSERT into compteGraphiste (login,mdp,prenom,nom,mail,sexe,telephone,adresse,portfolio)
values('faurepeq6','123','quentin','faure','petraz.quentin@gmail.com','homme','0750835966','8 rue ariste berges 38000 Grenoble','adresse portfolio');

insert into servicesdispo values(1, "Isolation", "Retirer objet", "Retouche paysage", "Isoler un objet/personne dans le paysage",'adresse portfolio', 20);
insert into servicesdispo values(2, "Element", "Retirer objet", "Retouche paysage", "Enlever un élément", 15);
insert into servicesdispo values(3, "Défaut", "Retirer objet", "Retouche paysage", "Enlever les défauts apparents", 25);

insert into servicesdispo values(4, "Lumière", "Ambiance", "Retouche paysage", "Arranger l'éclairages", 10);
insert into servicesdispo values(5, "Couleur", "Ambiance", "Retouche paysage", "Faire ressortir les couleurs", 8);

insert into servicesdispo values(6, "Forme", "Corps", "Retouche beauté", "Corriger les formes du corps", 19);
insert into servicesdispo values(7, "Silhouette", "Corps", "Retouche beauté", "Améliorer la silhouette", 17);

insert into servicesdispo values(8, "Regard", "Visage", "Retouche beauté", "Adoucir le regard", 10);
insert into servicesdispo values(9, "Peau", "Visage", "Retouche beauté", "Revoir le tein de peau", 10);
insert into servicesdispo values(10, "Nez", "Visage", "Retouche beauté", "Corriger la forme du nez", 15);

insert into messages values(2, 1, "2018-12-01 20:12:56", "test", "test");
