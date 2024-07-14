<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Categories</title> 
    <link rel="stylesheet" href="../public/css/style.css"> 
</head>
<body>
    <header class="header">
        <h1>Categories</h1> 
    </header>

    <nav class="navbar">
        <ul>
            <li><a href="../public/index.php">Accueil</a></li> 
        </ul>
    </nav>

    <main class="main-content">

        <?php if ($categories): ?> 
            <?php foreach ($categories as $category): ?> 
                <div class="box">
                    <h2><a href="index.php?url=category/show/<?= $category['id'] ?>"><?= htmlspecialchars($category['libelle']) ?></a></h2>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Aucune catégorie trouvée.</p>
        <?php endif; ?>
    </main>
</body>
</html>
