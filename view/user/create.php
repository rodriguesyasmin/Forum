<h1>Créer une compte:</h1>
<form action="index.php?controller=user&function=newUser" method="post">
    <label> Nom :
        <input name="nom" type="text">
    </label>
    <label> Email:
        <input name="nomUtilisitaseurEmail" type="email" required>
    </label>
    <label> Mot de passe :
        <input name="motDePasse" type="text" minlength="6" maxlength="20" required>
    </label>
    <label> Naissance :
        <input name="dateNaissance" type="date" required>
    </label>
    <input type="submit" value="Créer" required>
</form>