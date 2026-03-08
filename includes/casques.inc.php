<?php
// la connexion PDO doit indiquer le port utilisé par MySQL sous MAMP (souvent 8889)
// et gérer proprement les erreurs pour éviter le fatal error "Connection refused".
$dsn = 'mysql:host=127.0.0.1;port=8889;dbname=nolark;charset=utf8';
try {
	$cnx = new PDO($dsn, 'nolarkuser', 'nolarkpwd');
	$cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	die('Erreur de connexion à la base de données : ' . $e->getMessage());
}
// le champ "nom" n'est pas utilisé dans l'affichage ; on peut l'omettre
// cela évite les problèmes de colonnes ambiguës/absentes
$req = 'SELECT casque.id, modele, libelle, prix, classement, image, stock';
$req .= ' FROM casque INNER JOIN type ON casque.type=type.id';
$req .= ' INNER JOIN marque ON casque.marque=marque.id';
$res = $cnx->query($req);
echo '<section id="casques">';
while ($ligne = $res->fetch(PDO::FETCH_OBJ)) {
echo '<article>';
echo '<img src="../images/casques/', $ligne->libelle, '/', $ligne->image,
'" alt="', $ligne->modele,
'">';
echo '</article>';
}
echo '</section>';



