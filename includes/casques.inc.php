<?php
// la connexion PDO doit indiquer le port utilisé par MySQL sous MAMP (souvent 8889)
// et gérer proprement les erreurs pour éviter le fatal error "Connection refused".
$cnx = new PDO('mysql:host=127.0.0.1;port=8888;dbname=nolark', 'nolarkuser', 'nolarkpwd');
// le champ "nom" n'est pas utilisé dans l'affichage ; on peut l'omettre
// cela évite les problèmes de colonnes ambiguës/absentes
$req = 'SELECT casque.id, nom, casque.modele, libelle, casque.prix, casque.classement, casque.image, casque.stock';
$req .= ' FROM casque INNER JOIN type ON casque.type=type.id';
$req .= ' INNER JOIN marque ON casque.marque=marque.id';
$res = $cnx->query($req);
echo '<section id="casques">';
while ($ligne = $res->fetch(PDO::FETCH_OBJ)) {
echo '<article>';
echo '<img src="../images/casques/', $ligne->type, '/', $ligne->image,'" alt="', $ligne->modele,'">';
echo '</article>';
}
echo '</section>';