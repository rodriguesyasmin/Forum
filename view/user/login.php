<h1>Login:</h1>
<form id="loginForm" action="index.php?controller=user&function=validation" method="post">
    <label for="nomUtilisitaseurEmail">Email:</label>
    <input type="email" id="nomUtilisitaseurEmail" name="nomUtilisitaseurEmail" required>

    <label for="motDePasse">Senha:</label>
    <input type="password" id="motDePasse" name="motDePasse" required>

    <input type="submit" value="Login">
</form>
