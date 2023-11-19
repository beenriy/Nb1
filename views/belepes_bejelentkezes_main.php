<h2>Bejelentkezés</h2>
<form action="<?= SITE_ROOT ?>belepes_bejelentkeztet" method="post">
    <label for="login">Felhasználó:</label><input type="text" name="login" id="login" required><br>
    <label for="password">Jelszó:</label><input type="password" name="password" id="password" required><br>
    <input type="submit" value="Küldés">
</form>
<h2><br><?= (isset($viewData['uzenet']) ? $viewData['uzenet'] : "") ?><br></h2>
