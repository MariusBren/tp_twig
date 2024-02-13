<?php
require_once("include/init_twig.php");
$json = file_get_contents("json/employes.json");
$twig = init_twig();
$template = $twig->load("contact.twig");
$employes = json_decode($json);

echo $template->render(["employes"=>$employes]);

?>