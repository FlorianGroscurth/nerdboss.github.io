<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="Stylesheets/innerProfileStyle.css">
</head>
<body>
    <section id="inner-profile-content">
        <form name = "ChangeInfo" action = "" method = "post">
            <h3>Persönliche Angaben</h3>
            <label for="uid">Benutzername</label>
            <input type="text" name="uid" id="uid" required>
            <label for="forename">Vorname</label>
            <input type="text" name="forename" id="forename" required>
            <label for="lastname">Nachname</label>
            <input type="text" name="lastname" id="lastname" required>
            <label for="email">E-Mail-Adresse</label>
            <input type="email" name="email" id="email" required>
        </form>
        <form action="ChangePw">
            <h3>Passwort</h3>
            <label for="uid">Aktuelles Passwort</label>
            <input type="password" name="pw" id="pw" required>
            <label for="uid">Neues Passwort</label>
            <input type="password" name="pwr" id="pwr" required>
            <label for="uid">Neues Passwort wiederholen</label>
            <input type="password" name="pwr" id="pwr" required>
        </form>
    </section>
</body>
</html>