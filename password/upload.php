<?php
$uploadDir = 'files/';
$uploadFile = $uploadDir . basename($_FILES['file']['name']);

if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadFile)) {
    echo "Datei wurde erfolgreich hochgeladen.";
   
    
} else {
    echo "Beim Hochladen der Datei ist ein Fehler aufgetreten.";
}
?>
<html>
    <head>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            color: white;
            padding: 20px;
            font-family: arial;
        }
    </style>
    </head>
    <form action="index.html">
        <button type="submit">Zurück zur Cloud</button>
    </form>
</html>