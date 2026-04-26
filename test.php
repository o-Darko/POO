<?php
// on va faire un test pour voir si on peut faire upload un fichier
if (isset($_FILES['file'])) {
    $file = $_FILES['file'];
    $uploadDirectory = 'uploads/'; // Assurez-vous que ce répertoire existe et est accessible en écriture
}
?><!DOCTYPE html>
<html lang="en">