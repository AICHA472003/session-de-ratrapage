<!DOCTYPE html>
<html>
<body>

<form method="post">
    <label>Number</label>
    <input type="number" name="num">
    <button type="submit" name="ok">OK</button>
</form>

<?php
if(isset($_POST["ok"])) {

    $num = $_POST["num"];

    if($num > 0) {

        $i = 1;

        echo "Les diviseurs sont : <br>";

        while($i <= $num) {

            if($num % $i == 0) {
                echo $i . "<br>";
            }

            $i++;
        }

    } else {
        echo "Entrer un nombre positif";
    }
}
?>

</body>
</html>