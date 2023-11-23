<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registreer</title>
</head>

<body>
    <form action="registratie-proces.php" method="post">
        <div class="form-group">
            <label for="emailForm">E-mail:</label>
            <input type="email" name="emailForm" id="emailForm" placeholder="Uw e-mail adres aub...">
        </div>
        <div class="form-group">
            <label for="passwordForm">Wachtwoord:</label>
            <input type="password" name="passwordForm" id="passwordForm" placeholder="Uw wachtwoord aub...">
        </div>
        <div class="form-group">
            <label for="voornaamForm">Voornaam:</label>
            <input type="text" name="voornaamForm" id="voornaamForm" placeholder="Uw voornaam aub...">
        </div>
        <div class="form-group">
            <label for="achternaamForm">Achternaam:</label>
            <input type="text" name="achternaamForm" id="achternaamForm" placeholder="Uw achternaam aub...">
        </div>
        <div class="form-group">
            <label for="addressForm">Adres:</label>
            <input type="text" name="addressForm" id="addressForm" placeholder="Uw adres aub...">
        </div>
        <div class="form-group">
            <label for="cityForm">Stad:</label>
            <input type="text" name="cityForm" id="cityForm" placeholder="Uw stadnaam aub...">
        </div>
        <div class="form-group">
            <label for="notActive">Niet Actief</label>
            <input type="radio" name="isActiveForm" id="notActive" value="0">
            <label for="active">Actief</label>
            <input type="radio" name="isActiveForm" id="active" value="1">
        </div>
        <div class="form-group">
            <label for="roleForm">Rol:</label>
            <select name="roleForm" id="roleForm">
                <option value="administrator">Administrator</option>
                <option value="employee">Employee</option>
                <option value="customer">Customer</option>
            </select>
        </div>
        <button type="submit" name="submit">Maak gebruiker</button>
    </form>
</body>

</html>