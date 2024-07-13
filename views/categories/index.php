<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Categories</title> <!-- Titre de la page -->
    <link rel="stylesheet" href="../public/css/style.css"> <!-- Inclusion de la feuille de style CSS -->
</head>
<body>
    <header class="header">
        <h1>Categories</h1> <!-- Titre principal de la page -->
    </header>

    <nav class="navbar">
        <ul>
            <li><a href="../public/index.php">Accueil</a></li> <!-- Lien vers la page d'accueil -->
        </ul>
    </nav>

    <main class="main-content">
        <!-- Section pour afficher la liste des catégories -->

        <?php if ($categories): ?> <!-- Vérification s'il y a des catégories à afficher -->
            <?php foreach ($categories as $category): ?> <!-- Boucle à travers chaque catégorie -->
                <div class="box">
                    <h2><a href="index.php?url=category/show/<?= $category['id'] ?>"><?= htmlspecialchars($category['libelle']) ?></a></h2>
                    <!-- Affichage du lien vers la vue détaillée de la catégorie -->
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Aucune catégorie trouvée.</p> <!-- Message affiché si aucune catégorie n'est disponible -->
        <?php endif; ?>
    </main>
</body>
</html>
