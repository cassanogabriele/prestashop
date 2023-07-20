<?php 
// On crée ce fichier dans chacun des dossiers et sous-dossiers des modules pour sécuriser l'accès au module

// L'en-tête renvoyé par PHP force l'absence de mise en cache avec les options "Cache-Control", "Pragma" et la date d'expiration dans le passé 
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
// Puis redirection de l'utilisateur vers la page d'acceuil
header("Location: ../");
exit;