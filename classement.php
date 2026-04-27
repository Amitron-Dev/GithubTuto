<?php
// Fichier classement.php - Exemple de script PHP pour afficher un classement

// Données fictives pour le classement
$joueurs = [
    ['nom' => 'Alice', 'score' => 150],
    ['nom' => 'Bob', 'score' => 120],
    ['nom' => 'Charlie', 'score' => 100],
];

// Trier par score décroissant
usort($joueurs, function($a, $b) {
    return $b['score'] <=> $a['score'];
});

// Afficher le classement
echo "<h1>Classement des joueurs</h1>";
echo "<ol>";
foreach ($joueurs as $joueur) {
    echo "<li>{$joueur['nom']} : {$joueur['score']} points</li>";
}
echo "</ol>";
?>