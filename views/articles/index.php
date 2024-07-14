<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualite</title>
    <link rel="stylesheet" href="../public/css/style.css" /> 
</head>
<body>
    <header class="header">
        <h1>ACTUALITES POLYTECHNICIENNES</h1> 
    </header>

    <nav class="navbar">
        <ul>
            <li><a href="index.php">Accueil</a></li> 
            <?php foreach ($categories as $cat) : ?> 
                <li><a href="index.php?category=<?= $cat['id'] ?>"><?= htmlspecialchars($cat['libelle']) ?></a></li> 
            <?php endforeach; ?>
        </ul>
    </nav>

    <main class="main-content">
        <div>
            <h1>Les dernières actualités</h1> 
        </div>
        
        <?php if ($articles) : ?> 
            <?php foreach ($articles as $article) : ?>
                <div class="box">
                    <h2><?= htmlspecialchars($article['titre']) ?></h2> 
                    <p><?= htmlspecialchars($article['contenu']) ?></p> 
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <p>Aucun article trouvé pour cette catégorie.</p> 
        <?php endif; ?>
    </main>
</body>
</html>
