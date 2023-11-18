<h2>Regisztráció</h2>
<form action="<?= SITE_ROOT ?>belepes_regisztraltat" method="post">
	<label for="csaladi_nev">Családi név:</label><input type="text" name="csaladi_nev" id="csaladi_nev" required><br>
	<label for="utonev">Keresztnév:</label><input type="text" name="utonev" id="utonev" required><br>
    <label for="login">Loginnév:</label><input type="text" name="login" id="login" required><br>
    <label for="password">Jelszó:</label><input type="password" name="password" id="password" required><br>
    <input type="submit" value="Küldés">
</form>
<h2><br><?= (isset($viewData['uzenet']) ? $viewData['uzenet'] : "") ?><br></h2>
