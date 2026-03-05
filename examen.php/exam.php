<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire de l'inscription</title>
</head>
<body>
     <form method="POST">
                           <label>nom:</label>   
                      <input type="text"    name="nom">         
                                   <br>
                           <label>prenom:</label>    
                     <input type="text" name="prenom">
                                  <br>
                           <label> age:</label>     
                   <input type="text" name="age">     
                              <br>
                 <button type="submit"    name ="envoyer" value="envoyer">
                                    </button>                                            
                  </form>
   <?php
   if(isset($_POST["envoyer"])){
    echo"tous les champs sont valider";
             }
         $nom=$_POST["nom"];
        $prenom=$_POST["prenom"];
          $age=$_POST["age"];
     if ($age>=18) {

     }   


   
   ?>
    
</body>
</html>