<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($article['titre']) ?></title> 
    <link rel="stylesheet" href="../public/css/style.css"> 
</head>
<body>
    <header class="header">
        <h1><?= htmlspecialchars($article['titre']) ?></h1> 
    </header>

    <nav class="navbar">
        <ul>
            <li><a href="../public/index.php">Accueil</a></li> 
        </ul>
    </nav>


    <main class="main-content">
        <div class="box">
            <p><?= htmlspecialchars($article['contenu']) ?></p> 
        </div>
    </main>
</body>
</html>
