<div class=" container center sign-card">
    <div class="flex center row">
        <h1>Inscription</h1>
    </div>
    <div class="flex center row">
        <form  class="flex col" action="index.php?uc=sign&action=sign_up" method="POST">
                <label for="username">Nom d'utilisateur</label>
                <input type="text" id="username" name="username" size="45" placeholder="Nom d'utilisateur">
               <label class="mt-1" for="mail">Mail</label>
               <input type="text" id="mail" name="mail" placeholder="Mail">
            <label class="mt-1" for="password">Mot de passe</label>
            <input type="password" id="password" name="password" placeholder="Mot de passe">
            <label class="mt-1" for="password_verify" >Confirmez le mot de passe</label>
            <input type="password" id="password_verify" name="password_verify" placeholder="Confirmation du mot de passe">
            <button type="submit" class="blue-ocean white-text mt-2 rounded-25 ">S'inscrire</button>
            <p>
                <?php if(isset ($errorMessage))
                    {echo $errorMessage;} ?>
            </p>
           </div>

        </form>
    </div>
</div>
<div class="flex row  center mt-3">
    <a href="index.php?uc=users&action=show">Retour à la liste</a>
</div>