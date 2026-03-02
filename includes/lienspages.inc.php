<?php

$pages = ['route.html', 'cross.html', 'piste.html', 'enfants.html',
    'nous-contacter.html'];
$noms = ['Route', 'Cross', 'Piste', 'Enfants', 'Nous contacter'];
$nbLiens = count($pages);
for ($i = 0; $i < $nbLiens; $i++) {
    echo '<li><a href="pages/', $pages[$i], '">', $noms[$i], '</a></li>';
}
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

