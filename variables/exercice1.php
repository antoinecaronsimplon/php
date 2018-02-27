<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>exercice1</title>
</head>
<body>
    <form method="post">
        <label for="field-login">Login</label>
        <input type="text" id="field-login" name="login" placeholder="john">
        <label for="field-password">Mot de passe</label>
        <input type="password" id="field-password" name="password" placeholder="********">
        <input type="submit" name="send" value="Valider">
    </form>
    <?php 
        if (!empty($_POST)){
            $login = $_POST["login"];
            $password = $_POST["password"];
            $ip = $_SERVER["REMOTE_ADDR"];
            $send = $_POST["send"];
            if(empty($login) || empty($password)){
                echo "Please enter your login and password";
            }else{
                echo "<p>Login : $login</p> <p>Password : $password</p> <p>Adresse ip : $ip</p>";
            }
        }
        
        /*print("<p>Login : $login</p> <p>Password : $password</p> <p>Adresse ip : $ip</p>");*/

    /**
    *
    * Créer un formulaire qui demande un login et un mot de passe
    * puis une fois le formulaire validé, afficher :
    * 
    * - Le login
    * - Le mot de passe
    * - L'adresse ip du client
    */
    ?>
</body>
</html>
