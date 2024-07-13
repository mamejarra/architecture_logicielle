<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($category['libelle']) ?></title> <!-- Titre de la page basé sur le libellé de la catégorie -->
    <link rel="stylesheet" href="../public/css/style.css"> <!-- Inclusion de la feuille de style CSS -->
</head>
<body>
    <header class="header">
        <h1><?= htmlspecialchars($category['libelle']) ?></h1> <!-- Titre principal de la page basé sur le libellé de la catégorie -->
    </header>

    <nav class="navbar">
        <ul>
            <li><a href="../public/index.php">Accueil</a></li> <!-- Lien vers la page d'accueil -->
        </ul>
    </nav>

    <!-- La vue pour afficher une catégorie en particulier -->
    <main class="main-content">
        <!-- Le contenu spécifique de la catégorie pourrait être affiché ici -->
    </main>
</body>
</html>
