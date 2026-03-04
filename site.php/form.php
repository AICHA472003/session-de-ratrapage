<?php
require "signup.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
             <label>email</label>
       <input type="text"   name="email" >
                    <br>
          <label>mot de passe</label>  
     <input type="password"  name="password">                   
                      <br>
                      <label>Confirmer mot de passe :</label>
                     <input type="password" name="confirm">
                            <br>
               <button type="submit"   name="s'inscrire" value="s'inscrire"> </button>  

    </form>