<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type='text/javascript' src='js/register.js'></script>
    <title>Inscription</title>
</head>
<body>
    <label for="firstname">Nom</label>
    <input id ='firstname' name="firstname" type="text" placeholder="Nom">

    <label for="lastname">Prenom</label>
    <input id ='lastname' name="lastname" type="text" placeholder="Prenom">

    <label for="email">Email</label>
    <input id ='email' name="email" type="email" placeholder="Email">
    <p></p>

    <label for="password">Mot de passe</label>
    <input id ='password' name="password" type="password" placeholder="Mot de passe">
    <p>Minimum 8 charatere</p>
    <p>Lettre majuscule</p>
    <p>Lettre minuscule</p>
    <p>Chiffre</p>

    <label for="ConfPassword">Confirmer Mot de passe</label>
    <input id ='ConfPassword' name="ConfPassword" type="password" placeholder="Confirmation Mot de passe">
    <p></p>

    <button id='inscription'> Inscription </button>
</body>
</html>