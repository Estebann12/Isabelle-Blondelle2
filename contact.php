<?php
if (isset($_POST["email"])) {
    $message = "Ce message vous a été envoyé via votre site Web
    Nom : " . $_POST["name"] . "
    Email : " . $_POST["email"] . "
    Message : " . $_POST["message"] . "
    Numéro : " . $_POST["phone"];

    $retour = mail("estebannkrebs2@gmail.com", $_POST["objet"], $message, "From:estebann.lana@gmail.com\r\nReply-to:" . $_POST["email"]);
    if ($retour) {
        echo "<p>L'email à bien été envoyé</p>";
    }
}