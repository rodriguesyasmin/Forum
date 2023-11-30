<h1>Créer une compte:</h1>
<form action="index.php?controller=user&function=newUser" method="post">
    <label> Nom :
        <input name="nom" type="text">
    </label>
    <label> Email:
        <input name="nomUtilisitaseurEmail" type="email">
    </label>
    <label> Mot de passe :
        <input name="motDePasse" type="text" minlength="6" maxlength="20">
    </label>
    <label> Naissance :
        <input name="dateNaissance" type="date">
    </label>
    <input type="submit" value="Créer">
</form>