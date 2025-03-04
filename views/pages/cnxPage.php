<?php
require_once 'controllers/authController.php';
$auth = new authController();
$auth->loginUser();
?>

<div class="cnx">
    <h1 >Connexion</h1></br>
    <div class="cnx-form">
        <form method="POST">
            <label for ="email">Email:</label> 
            <input type="email" name="mail" required placeholder="Email"><br>

            <label for ="password">Mot de passe:</label> 
            <input type="password" name="password" required placeholder="Mot de passe"><br>

            <button type="submit" class="btn-envoyer">Se connecter</button>
        </form>
        <a class="conexion" href="inscription">Pas de compte ? Inscris toi ici</a>
    </div>
</div>