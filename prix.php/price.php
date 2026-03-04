<!DOCTYPE html>
<html>
<head>
    <title>Calcul Prix</title>
</head>
<body>

<form method="post">
    <input type="number" name="qte" placeholder="Quantité">
    <input type="number" name="prix" placeholder="Prix">
    <button type="submit" name="ok">OK</button>
</form>

<?php

function calculerprix($prix, $qte){
    $total = $prix * $qte;

    if($qte >= 10){
        $total = $total - ($total * 0.1); // réduction 10%
        return "Vous avez bénéficié d'une réduction. Total = " . $total;
    }

    return "Total = " . $total;
}

if(isset($_POST['ok'])){

    $prix = $_POST['prix'];
    $qte = $_POST['qte'];

    if(empty($prix) || empty($qte)){
        echo "Champs vide";
    }
    elseif($qte <= 0 || $prix <= 0){
        echo "Valeur négative interdite";
    }
    else{
        echo calculerprix($prix, $qte);
    }
}

?>

</body>
</html>