/* Ecrivez dans le fichier “job15.sql” une requête permettant de récupérer le nom des
salles et le nom de leur étage. */

SELECT salles.nom AS salles_nom, etage.nom AS etage_nom FROM salles JOIN etage ON salles.id_etage=etage.id;