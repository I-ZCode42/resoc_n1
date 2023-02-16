<?php
    session_start();
    $idU = $_SESSION['connected_id'];
    if (!isset($idU)) {
        header("Location: login.php");
        exit();
    } else {
        echo $idU;
    }
?>

<header>
    <img src="resoc.jpg" alt="Logo de notre réseau social"/>
    <nav id="menu">
        <a href="news.php">Actualités</a>
        <a href="wall.php?user_id=<?php echo $idU ?>">Mur</a>
        <a href="feed.php?user_id=<?php echo $idU ?>">Flux</a>
        <a href="tags.php?tag_id=1">Mots-clés</a>
    </nav>
    <nav id="user">
        <a href="#">Profil</a>
        <ul>
            <li><a href="settings.php?user_id=<?php echo $idU ?>">Paramètres</a></li>
            <li><a href="followers.php?user_id=<?php echo $idU ?>">Mes suiveurs</a></li>
            <li><a href="subscriptions.php?user_id=<?php echo $idU ?>">Mes abonnements</a></li>
        </ul>
    </nav>
</header>