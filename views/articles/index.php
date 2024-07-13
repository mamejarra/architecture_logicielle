<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualite</title>
    <link rel="stylesheet" href="../public/css/style.css" /> <!-- Inclusion de la feuille de style CSS -->
</head>
<body>
    <header class="header">
        <h1>ACTUALITES POLYTECHNICIENNES</h1> <!-- Titre principal de l'en-tête -->
    </header>

    <nav class="navbar">
        <ul>
            <li><a href="index.php">Accueil</a></li> <!-- Lien vers la page d'accueil -->
            <?php foreach ($categories as $cat) : ?> <!-- Boucle pour chaque catégorie -->
                <li><a href="index.php?category=<?= $cat['id'] ?>"><?= htmlspecialchars($cat['libelle']) ?></a></li> <!-- Lien dynamique pour chaque catégorie -->
            <?php endforeach; ?>
        </ul>
    </nav>

    <main class="main-content">
        <div>
            <h1>Les dernières actualités</h1> <!-- Titre de la section principale -->
        </div>
        
        <!-- Section pour afficher la liste des articles -->

        <?php if ($articles) : ?> <!-- Vérifie s'il y a des articles à afficher -->
            <?php foreach ($articles as $article) : ?> <!-- Boucle pour chaque article -->
                <div class="box">
                    <h2><?= htmlspecialchars($article['titre']) ?></h2> <!-- Affichage du titre de l'article -->
                    <p><?= htmlspecialchars($article['contenu']) ?></p> <!-- Affichage du contenu de l'article -->
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <p>Aucun article trouvé pour cette catégorie.</p> <!-- Message si aucun article trouvé -->
        <?php endif; ?>
    </main>
</body>
</html>
