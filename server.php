<?php
$json_text = file_get_contents("./dischi.json");
$dischi = json_decode($json_text, true);

if (!is_array($dischi)) {
    $dischi = [];
}

$nuovoDisco = [
    "titolo" => $_POST["titolo"],
    "artista" => $_POST["artista"],
    "cover" => $_POST["cover"],
    "anno" => $_POST["anno"],
    "genere" => $_POST["genere"]
];

$dischi[] = $nuovoDisco;
file_put_contents("dischi.json", json_encode($dischi, JSON_PRETTY_PRINT));
header("Location: index.php");
exit;
?>