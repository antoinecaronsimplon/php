<?php
    /**
    * Creer un formulaire qui demande le nom de l'utilisateur
    * une fois envoyé
    * afficher le nom et demander le prenom
    * enfin afficher le nom ET le prénom après la validation 
    *
    * Indice : il faut utiliser les sessions
    */

    echo "<form method='post'>
            <label for='field-login'>Login</label>
            <input type='text' id='field-login' name='login' placeholder='john'>
            <input type='submit' name='send' value='Valider'>
         </form>";
    

        //  if POST(name){     avec un isset à l'intérieur
        //      if !$session(name){        variable de session 
        //          $session(name) = post_name     la condition c'est si la var session n'esxiste pas alors je la créé.
        //      }
        //  }