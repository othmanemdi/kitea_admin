<?php

ob_start();
// php
$title = "Dashboard";

$content_php = ob_get_clean();


ob_start(); ?>

<h1>Dashboard </h1>

<a href="" class="btn btn-success">Suuccess</a>
<?php $content_html = ob_get_clean(); ?>