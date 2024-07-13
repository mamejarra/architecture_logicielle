<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($article['titre']) ?></title> <!-- Titre de la page basé sur le titre de l'article -->
    <link rel="stylesheet" href="../public/css/style.css"> <!-- Inclusion de la feuille de style CSS -->
</head>
<body>
    <header class="header">
        <h1><?= htmlspecialchars($article['titre']) ?></h1> <!-- Titre principal de l'article dans l'en-tête -->
    </header>

    <nav class="navbar">
        <ul>
            <li><a href="../public/index.php">Accueil</a></li> <!-- Lien vers la page d'accueil -->
        </ul>
    </nav>

    <!-- Section pour afficher un article spécifique -->

    <main class="main-content">
        <div class="box">
            <p><?= htmlspecialchars($article['contenu']) ?></p> <!-- Affichage du contenu de l'article -->
        </div>
    </main>
</body>
</html>
