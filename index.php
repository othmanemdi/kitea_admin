<?php

// var_dump(dirname(__DIR__) . DIRECTORY_SEPARATOR);
// die();
if (isset($_GET['page']) && preg_match("/^[a-zA-Z0-9_-]*$/", $_GET['page'])) {
    $page = htmlspecialchars(trim($_GET['page']));
} else {
    $page = "home";
}

require_once "database/db.php";


$pages =  scandir('pages/');
require_once "helpers/functions.php";

$page_file = $page . ".php";

if (in_array($page_file, $pages)) {
    require_once 'pages/' . $page_file;
} else {
    require_once 'pages/404.php';
}

echo $content_php ?? "";

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <?php require_once "pages/body/head.php" ?>

    <?= $content_css ?? ""; ?>

    <?php require_once "pages/body/script.php" ?>
</head>

<body>

    <div class="container mt-5">

        <?php require_once "pages/body/nav.php" ?>

        <?= $content_html ?? "" ?>
    </div>



    <?= $content_js ?? ""; ?>

</body>

</html>