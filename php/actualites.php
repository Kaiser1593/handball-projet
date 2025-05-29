<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Actualités</title>
  <link rel="stylesheet" href="../style.css">
</head>
<body>
  <header>
    <!-- Ton menu ici -->
  </header>

  <main class="container">
    <h2>🗞️ Dernières actualités</h2>

    <?php
    $stmt = $pdo->query("SELECT * FROM actualites ORDER BY date_publication DESC");

    foreach ($stmt as $article): ?>
      <article class="actualite">
        <h3><?= htmlspecialchars($article['titre']) ?></h3>
        <p><em>Publié le <?= $article['date_publication'] ?></em></p>
        <p><?= nl2br(htmlspecialchars($article['contenu'])) ?></p>
      </article>
    <?php endforeach; ?>
  </main>
</body>
</html>
