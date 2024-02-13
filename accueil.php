<?php
require_once("include/init_twig.php");
$json = file_get_contents("json/produits.json");
$twig = init_twig();
$template = $twig->load("accueil.twig");
$produits = json_decode($json);

echo $template->render(["produits"=>$produits]);

?>