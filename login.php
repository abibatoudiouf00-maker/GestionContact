<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulaire de Connexion</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-card {
            width: 100%;
            max-width: 400px;
            padding: 20px;
            border-radius: 20px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            background: #fff;
        }
    </style>
</head>
<body>
    <div class="login-card">
        <h3 class="text-center mb-4">Connexion</h3>
        <form method ="post" action ="userController">
             <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name ="email"class="form-control" id="email" placeholder="Entrez votre email" required>
            </div>
            <!-- password -->
            <div class="mb-3">
                <label for="password" class="form-label">Mot de Passe</label>
                <input type="password" name = "password"class="form-control" id="password" placeholder="Entrez votre mot de passe" required>
            </div>

            <button type="submit" name=" btnLogin" class="btn btn-primary w-100">Se connecter</button>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

</body>
</html>