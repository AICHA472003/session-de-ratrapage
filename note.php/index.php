<!DOCTYPE html>
<html>
<head>
    <title>bilan de note</title>
</head>
<body>

<form method="post">
    <label>Saisir une note</label>
    <input type="text" name="note">
    <br>
    <button type="submit" name="ok" value="ok">Valider</button>
</form>

<?php
if(isset($_POST["ok"])) {

    $note = $_POST["note"];

    if(empty($note)) {
        echo "Note vide";
    } 
    else {

        if(is_numeric($note) && $note <= 20 && $note >= 0) {

            if($note >= 10) {
                echo "Vous êtes admis";
            } 
            else {
                echo "Vous n'êtes pas admis";
            }

        } 
        else {
            echo "Note invalide !!";
        }

    }
}
?>

</body>
</html>