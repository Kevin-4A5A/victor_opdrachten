<?php require_once('database_connection.php'); ?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <?php require('templates/head.php'); ?>
</head>
<body class="home-page sidebar-layout">
    <header id="header">
		<?php require('templates/header.php'); ?>
	</header>

    <nav id="main-nav">
        <?php require('templates/navigation.php'); ?>
    </nav>

    <div id="content-container">
        <?php require('templates/content.php'); ?>
    </div>

    <footer id="footer">
        <?php require('templates/footer.php'); ?>
    </footer>
</body>
</html>