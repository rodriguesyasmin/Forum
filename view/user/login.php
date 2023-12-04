<h1>Login:</h1>
<form id="loginForm" action="index.php?controller=user&function=validation" method="post">
    <label for="nomUtilisitaseurEmail">Email:
        <input type="email" id="nomUtilisitaseurEmail" name="nomUtilisitaseurEmail" required></label>

    <label for="motDePasse">Senha:
        <input type="password" id="motDePasse" name="motDePasse" required></label>

    <input type="submit" value="Login">
</form>